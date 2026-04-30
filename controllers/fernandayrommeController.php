<?php

require_once "libs/PHPMailer/src/Exception.php";
require_once "libs/PHPMailer/src/PHPMailer.php";
require_once "libs/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once './libs/rest-php-sdk-master/src/autoload.php';

class fernandayrommeController extends Controller
{

	private $_fernandayrommel;
	private $_dt;
	private $_key;

	private $_obsequio;
	private $_index;

	public function __construct()
	{
		parent::__construct();
		$this->_ajax = $this->loadModel('ajax');
		$this->_fernandayrommel = $this->loadModel('couple');
		$this->_obsequio = $this->loadModel('obsequio');
		$this->_index = $this->loadModel('index');
		$this->_dt = $this->loadModel('dataTable');

		// TODO: actualizar al ID real (tbl_sede) de Fernanda y Rommel
		$this->_key = 1;
	}

	public function index()
	{
		$this->_view->assign('titulo', 'Fernanda y Rommel');

		$ps_k = $this->_fernandayrommel->keysEmp($this->_key);

		$this->_view->assign('pk', $ps_k['defpk']);
		$this->_view->setJs(array('script', 'scriptGifts', 'scriptSend'));
		$this->_view->renderContent('index');
	}


	public function guardarMensaje()
	{

		echo json_encode($registro = $this->_fernandayrommel->guardarmensaje(
			$this->getTexto('hdn_ao'),
			$this->getTexto('txt_nombres'),
			$this->getTexto('txt_mensaje'),
			$this->_key
		));

	}

	public function guardarmensajeMonto()
	{

		$data = $this->getPostParam('cart');
		$messageId = $this->getTexto('messageId');

		$cartArray = json_decode($data, true);

		$totalAmount = 0;
		foreach ($cartArray as $item) {
			$subtotal = $item['quantity'] * $item['price'];
			$totalAmount = $totalAmount + $subtotal;
			$this->_obsequio->save(
				$messageId,
				$item['quantity'],
				$item['price'],
				strval($subtotal),
				$item['id']
			);
		}

		echo json_encode($registro = $this->_fernandayrommel->guardarmensajeMonto(
			$messageId,
			$this->getTexto('signature'),
			$this->getTexto('message'),
			$totalAmount,
			$this->_key
		));

	}

	public function g_ao()
	{

		echo json_encode($this->_fernandayrommel->g_ao($this->getTexto("ao")));

	}

	/* PROCEDIMIENTOS IZIPAY */

	public function obsequio($codigo)
	{

		$ps_k = $this->_fernandayrommel->keysEmp($this->_key);
		$mensaje = $this->_fernandayrommel->buscarMensaje($codigo);

		$this->_view->assign('pk', $ps_k['defpk']);
		$this->_view->assign('nombre', $mensaje['nombre']);
		$this->_view->assign('mensaje', $mensaje['mensaje']);

		Lyra\Client::setDefaultUsername($ps_k['username']);
		Lyra\Client::setDefaultPassword($ps_k['defpas']);
		Lyra\Client::setDefaultEndpoint("https://api.micuentaweb.pe");
		Lyra\Client::setDefaultPublicKey($ps_k['defpk']);
		Lyra\Client::setDefaultSHA256Key($ps_k['defsha']);

		$client = new Lyra\Client();

		$store = array(
			"amount" => str_replace('.', '', bcdiv($mensaje['monto'], '1', 2)),
			"currency" => "PEN",
			"orderId" => $codigo,
			"customer" => array(
				"nombre" => $mensaje['nombre']
			)
		);
		$response = $client->post("V4/Charge/CreatePayment", $store);

		if ($response['status'] != 'SUCCESS') {
			$error = $response['answer'];
			throw new Exception("error " . $error['errorCode'] . ": " . $error['errorMessage']);
		}

		$formToken = $response["answer"]["formToken"];

		$this->_view->assign('crearToken', $formToken);

		$this->_view->assign('nombre', $mensaje['nombre']);
		$this->_view->assign('mensaje', $mensaje['mensaje']);
		$this->_view->assign('firma', $mensaje['firma']);
		$this->_view->assign('codigo', $codigo);

		$this->_view->setJs(array('scriptObsequio'));
		$this->_view->render_template_basic('indexObsequio');
	}

	public function estado($codigo)
	{
		$client = new Lyra\Client();
		$formAnswer = $client->getParsedFormAnswer();

		if ($formAnswer['kr-answer']['orderStatus'] == 'PAID') {

			$uuid = $formAnswer['kr-answer']['transactions'][0]['uuid'];
			$hash = $formAnswer['kr-hash'];

			$this->_fernandayrommel->cambiarMensajeEstado($codigo, $uuid, $hash, $formAnswer['kr-answer']['orderStatus']);

			$rptaPaymentCode = '00';
			$rptaPayment = "Su operación se ha realizado con éxito, revise su correo electrónico con el detalle del pedido.";

		}
		else {

			$rptaPaymentCode = '1';
			$rptaPayment = "Transaccion invalida. Los datos fueron alterados en el proceso de respuesta";
		}

		$this->_view->assign('resultPaymentCode', $rptaPaymentCode);
		$this->_view->assign('resultPayment', $rptaPayment);

		$this->_view->setJs(array('scriptRespuesta'));
		$this->_view->render_template_basic('indexRespuesta');
	}

	public function enviarCorreo($codigo)
	{
		echo json_encode($this->_fernandayrommel->enviarCorreo($codigo));
	}

	public function lista($codigo)
	{
		if ($codigo === "pdcgb") {
			$this->_view->setJs(array('scriptLista'));
			$this->_view->render_template_bodas_clean('indexLista');
		}
		else {
			$this->redireccionar('/fernandayrommel');
		}
	}

	public function mostrarListaRegistros()
	{
		$columns = array(
			array(
				'db' => 'id',
				'dt' => 'DT_RowId',
				'formatter' => function ($d, $row) {
					return 'row_' . $d;
				}
			),
			array('db' => 'fechor', 'dt' => 0),
			array('db' => 'nombre', 'dt' => 1),
			array('db' => 'mensaje', 'dt' => 2),
			array('db' => 'monto', 'dt' => 3),
			array('db' => 'estado', 'dt' => 4),
			array('db' => 'id', 'dt' => 5),
			array('db' => 'empresa', 'dt' => 6),
			array('db' => 'mensajeall', 'dt' => 7)
		);

		$where = array(
			array('columna' => 'empresa', 'ope' => ' = ', 'value' => $this->_key),
		);

		echo json_encode($this->_dt->simple($_GET, 'vw_cellis', 'id', $columns, $where));
	}
}

?>

