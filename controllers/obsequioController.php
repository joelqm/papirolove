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
			if (empty($_POST)) {
				http_response_code(400);
				echo 'No post data received!';
				return;
			}

			$ps_k = $this->_couple->keysEmp(1);

			if (!$ps_k) {
				throw new Exception('No se encontraron credenciales Izipay.');
			}

			Lyra\Client::setDefaultUsername($ps_k['username']);
			Lyra\Client::setDefaultPassword($ps_k['defpas']);
			Lyra\Client::setDefaultEndpoint('https://api.micuentaweb.pe');
			Lyra\Client::setDefaultPublicKey($ps_k['defpk']);
			Lyra\Client::setDefaultSHA256Key($ps_k['defsha']);

			$client = new Lyra\Client();
			$client->setPassword($ps_k['defpas']);
			$client->setSHA256Key($ps_k['defsha']);

			$validHash = false;
			$keysToTry = array();

			if (!empty($ps_k['defpas'])) {
				$keysToTry[] = $ps_k['defpas'];
			}
			if (!empty($ps_k['defsha'])) {
				$keysToTry[] = $ps_k['defsha'];
			}

			foreach ($keysToTry as $key) {
				if ($this->validarFirmaIzipay($key)) {
					$validHash = true;
					break;
				}
			}

			if (!$validHash) {
				$validHash = $client->checkHash();
			}

			if (!$validHash) {
				http_response_code(400);
				echo 'Invalid signature';
				return;
			}

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

		} catch (Exception $e) {
			error_log('Izipay IPN error: ' . $e->getMessage());
			http_response_code(500);
			echo 'Error processing IPN';
		}
	}

	private function validarFirmaIzipay($key)
	{
		if (empty($_POST['kr-answer']) || empty($_POST['kr-hash']) || $key === '') {
			return false;
		}

		$krAnswer = str_replace('\/', '/', $_POST['kr-answer']);
		$payloads = array(
			$krAnswer,
			stripslashes($krAnswer),
			$_POST['kr-answer'],
			stripslashes($_POST['kr-answer']),
		);

		foreach ($payloads as $payload) {
			if (hash_hmac('sha256', $payload, $key) === $_POST['kr-hash']) {
				return true;
			}
		}

		return false;
	}



}
?>