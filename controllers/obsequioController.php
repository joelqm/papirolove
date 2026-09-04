<?php

require_once "libs/PHPMailer/src/Exception.php";
require_once "libs/PHPMailer/src/PHPMailer.php";
require_once "libs/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once './libs/rest-php-sdk-master/src/autoload.php';

class obsequioController extends Controller{	

	private $_obsequio;
	private $_index;
	private $_couple;

	public function __construct() {

		parent::__construct();
		$this->_ajax = $this->loadModel('ajax');
		$this->_obsequio = $this->loadModel('obsequio');
		$this->_index = $this->loadModel('index');
		$this->_couple = $this->loadModel('couple');

	}

	
	public function index(){


	}

	public function obtenerObsequiosPareja(){

		echo json_encode($this->_obsequio->obtenerObsequiosPareja(
			$this->getInt('parejaId'),
			$this->getInt('categoriaId')
		));

	}

	public function obtenerObsequiosParejaCategoria(){

		echo json_encode($this->_obsequio->obtenerObsequiosParejaCategoria());

	}

	public function obtenerObsequiosRecibidos(){
		$mensajeId = $this->getTexto('id');
		
		
		echo json_encode($this->_obsequio->obtenerObsequiosRecibidos($mensajeId));

	}


    public function guardarObsequio() {
        $mensajeId = $this->getTexto('hiddenInput');
        $obsequios = $this->getPostParam('cart');
		
        echo json_encode($this->_obsequio->guardarObsequio($mensajeId, $obsequios));
        
    }

	public function saveCart(){
		$cart =$this->getTexto("cart");
		
	}

	/**
	 * IPN Izipay (servidor a servidor).
	 * Configurar en Back Office: API REST > URL de notificación IPN.
	 */
	public function ipn()
	{
		header('Content-Type: text/plain; charset=UTF-8');

		try {
			$rawBody = file_get_contents('php://input');
			parse_str($rawBody, $rawPost);

			if (empty($_POST) && !empty($rawPost)) {
				$_POST = $rawPost;
			}

			if (empty($_POST) || empty($_POST['kr-answer'])) {
				http_response_code(200);
				echo 'OK! No post data received';
				return;
			}

			// Resolver boda dueña del pedido ANTES de validar firma (sin cruzar claves).
			$codigoPedido = $this->extraerOrderIdIzipay($_POST['kr-answer']);
			$ps_k = $codigoPedido !== ''
				? $this->_couple->keysEmpPorCodigoMensaje($codigoPedido)
				: false;

			if (!$ps_k) {
				throw new Exception('No se encontraron credenciales Izipay de la boda del pedido.');
			}

			Lyra\Client::setDefaultUsername($ps_k['username']);
			Lyra\Client::setDefaultPassword($ps_k['defpas']);
			Lyra\Client::setDefaultEndpoint('https://api.micuentaweb.pe');
			Lyra\Client::setDefaultPublicKey($ps_k['defpk']);
			Lyra\Client::setDefaultSHA256Key($ps_k['defsha']);

			$client = new Lyra\Client();
			$client->setPassword(trim($ps_k['defpas']));
			$client->setSHA256Key(trim($ps_k['defsha']));

			$keysToTry = array_filter(array(
				trim($ps_k['defpas']),
				trim($ps_k['defsha']),
			));

			$validHash = false;
			foreach ($keysToTry as $key) {
				if ($this->validarFirmaIzipay($key, $rawBody)) {
					$validHash = true;
					break;
				}
			}

			if (!$validHash) {
				try {
					$validHash = $client->checkHash();
				} catch (Exception $hashException) {
					error_log('Izipay IPN checkHash: ' . $hashException->getMessage());
				}
			}

			if ($validHash) {
				$formAnswer = $client->getParsedFormAnswer();
				$answer = $formAnswer['kr-answer'];
				$orderStatus = isset($answer['orderStatus']) ? $answer['orderStatus'] : '';

				if ($orderStatus === 'PAID') {
					$codigo = '';

					if (isset($answer['orderDetails']['orderId'])) {
						$codigo = $answer['orderDetails']['orderId'];
					} elseif (isset($answer['orderId'])) {
						$codigo = $answer['orderId'];
					}

					$uuid = isset($answer['transactions'][0]['uuid']) ? $answer['transactions'][0]['uuid'] : '';
					$hash = $formAnswer['kr-hash'];

					if ($codigo !== '') {
						$this->_couple->cambiarMensajeEstado($codigo, $uuid, $hash, $orderStatus);
					}
				}

				http_response_code(200);
				echo 'OK! OrderStatus is ' . $orderStatus;
				return;
			}

			error_log('Izipay IPN firma no coincidió. hash-key=' . (isset($_POST['kr-hash-key']) ? $_POST['kr-hash-key'] : ''));
			http_response_code(200);
			echo 'OK! Notification received';

		} catch (Exception $e) {
			error_log('Izipay IPN error: ' . $e->getMessage());
			http_response_code(200);
			echo 'OK! Notification received';
		}
	}

	private function extraerOrderIdIzipay($krAnswerRaw)
	{
		$json = is_string($krAnswerRaw) ? json_decode($krAnswerRaw, true) : null;
		if (!is_array($json)) {
			$json = json_decode(stripslashes((string) $krAnswerRaw), true);
		}
		if (!is_array($json)) {
			return '';
		}
		if (isset($json['orderDetails']['orderId']) && $json['orderDetails']['orderId'] !== '') {
			return (string) $json['orderDetails']['orderId'];
		}
		if (isset($json['orderId']) && $json['orderId'] !== '') {
			return (string) $json['orderId'];
		}
		return '';
	}

	private function validarFirmaIzipay($key, $rawBody = '')
	{
		if (empty($_POST['kr-answer']) || empty($_POST['kr-hash']) || $key === '') {
			return false;
		}

		$key = trim($key);
		$krAnswer = str_replace('\/', '/', $_POST['kr-answer']);
		$payloads = array(
			$krAnswer,
			stripslashes($krAnswer),
			$_POST['kr-answer'],
			stripslashes($_POST['kr-answer']),
		);

		if (!empty($rawBody) && preg_match('/kr-answer=([^&]*)/', $rawBody, $matches)) {
			$payloads[] = urldecode($matches[1]);
			$payloads[] = rawurldecode($matches[1]);
		}

		foreach ($payloads as $payload) {
			if (hash_hmac('sha256', $payload, $key) === $_POST['kr-hash']) {
				return true;
			}
		}

		return false;
	}



}
?>
