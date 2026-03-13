<?php

require_once "libs/PHPMailer/src/Exception.php";
require_once "libs/PHPMailer/src/PHPMailer.php";
require_once "libs/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once './libs/rest-php-sdk-master/src/autoload.php';

class sofiaygabrielController extends Controller
{

	private $_sofiaygabriel;
	private $_dt;
	private $_key;

	private $_obsequio;
	private $_index;

	public function __construct()
	{
		parent::__construct();
		$this->_ajax = $this->loadModel('ajax');
		$this->_sofiaygabriel = $this->loadModel('couple');
		$this->_obsequio = $this->loadModel('obsequio');
		$this->_index = $this->loadModel('index');
		$this->_dt = $this->loadModel('dataTable');
		$this->_key = 19; // Nuevo ID único para Sofia y Gabriel
	}

	public function index()
	{
		$this->_view->assign('titulo', 'Sofia y Gabriel');

		$ps_k = $this->_sofiaygabriel->keysEmp($this->_key);

		$this->_view->assign('pk', $ps_k['defpk']);
		$this->_view->setJs(array('script', 'scriptGifts', 'scriptSend'));
		$this->_view->render_template_basic('index');
	}

	public function guardarMensaje()
	{

		echo json_encode($registro = $this->_sofiaygabriel->guardarmensaje(
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







		
$cartArray = json_decode($data, true); // The 'true' makes it an associative array

		$totalAmount = 0;
		foreach ($cartArray as $item) {


			$subtotal = $item['quantity'] * $item['price'];
			$totalAmount = $totalAmount + $subtotal;
			// Guardar la información del obsequio
			$this->_obsequio->save(
				$messageId,
				$item['quantity'],
				$item['price'],
				strval($subtotal),
				$item['id']
			);
		}


		echo json_encode($registro = $this->_sofiaygabriel->guardarmensajeMonto(
			$messageId,
			$this->getTexto('signature'),
			$this->getTexto('message'),
			$totalAmount,
			$this->_key
		));

	}

	public function g_ao()
	{

		echo json_encode($this->_sofiaygabriel->g_ao($this->getTexto("ao")));

	}

	/* PROCEDIMIENTOS IZIPAY */

	public function obsequio($codigo)
	{


		$ps_k = $this->_sofiaygabriel->keysEmp($this->_key);

		//var_dump($this->_key);exit;

		$mensaje = $this->_sofiaygabriel->buscarMensaje($codigo);

		$this->_view->assign('pk', $ps_k['defpk']);
		$this->_view->assign('nombre', $mensaje['nombre']);
		$this->_view->assign('mensaje', $mensaje['mensaje']);

		Lyra\Client::setDefaultUsername($ps_k['username']); // $usernameTEST
		//(En el Back Office) Copiar Contraseña de test
		Lyra\Client::setDefaultPassword($ps_k['defpas']); // $defpasTEST
		//(En el Back Office) Copiar Contraseña de Nombre del servidor API REST
		Lyra\Client::setDefaultEndpoint("https://api.micuentaweb.pe");
		/* publicKey and used by the javascript client */
		//(En el Back Office) Copiar Clave pública de test
		Lyra\Client::setDefaultPublicKey($ps_k['defpk']); // $defpkTEST
		/* SHA256 key */
		//(En el Back Office) Clave HMAC-SHA-256 de test
		Lyra\Client::setDefaultSHA256Key($ps_k['defsha']); // $defshaTEST

		$client = new Lyra\Client();


		/** I create a formToken **/
		$store = array("amount" => str_replace('.', '', bcdiv($mensaje['monto'], '1', 2)),
			"currency" => "PEN",
			"orderId" => $codigo, /*uniqid("12312312312"),*/
			"customer" => array(
				"nombre" => $mensaje['nombre']
			));
		$response = $client->post("V4/Charge/CreatePayment", $store);

		//var_dump(json_encode($response));exit;

		/* I check if there are some errors */
		if ($response['status'] != 'SUCCESS') {
			/* an error occurs, I throw an exception */
			//display_error($response);
			$error = $response['answer'];
			throw new Exception("error " . $error['errorCode'] . ": " . $error['errorMessage']);
		}

		/* everything is fine, I extract the formToken */
		$formToken = $response["answer"]["formToken"];

		//$this->_view->assign('formToken',$formToken);
		//echo json_encode($formToken);
		//return $formToken;

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

		//COMPRUEBA SI LOS HASH SON IGUALES
		//$ps_k = $this->_pedido->keysEmp($_COOKIE['se']);
		//var_dump($this->checkHash($ps_k['defsha']));

		$client = new Lyra\Client();

		/* Use client SDK helper to retrieve POST parameters */
		$formAnswer = $client->getParsedFormAnswer();

		//var_dump(json_encode($formAnswer));
		//exit;

		//var_dump($formAnswer['kr-answer']['customer']['email']);exit;

		if ($formAnswer['kr-answer']['orderStatus'] == 'PAID') {

			$uuid = $formAnswer['kr-answer']['transactions'][0]['uuid'];
			$hash = $formAnswer['kr-hash'];

			//var_dump(json_encode($formAnswer['kr-answer']['transactions'][0]['uuid']));exit;

			$this->_sofiaygabriel->cambiarMensajeEstado($codigo, $uuid, $hash, $formAnswer['kr-answer']['orderStatus']);
			// $this->_pedido->enviarCorDet($formAnswer['kr-answer']['customer']['email'],$codigo);

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

	//var_dump($formAnswer['kr-answer']['orderStatus'].$formAnswer['kr-answer']['transactions']['uuid']);

	}

	public function enviarCorreo($codigo)
	{

		echo json_encode($this->_sofiaygabriel->enviarCorreo($codigo));

	}

	public function lista($codigo)
	{

		if ($codigo === "pdcgb") {

			$this->_view->setJs(array('scriptLista'));
			$this->_view->render_template_bodas_clean('indexLista');

		}
		else {
			$this->redireccionar('/sofiaygabriel');

		}

	// exit;
	// 

	}

	public function mostrarListaRegistros()
	{

		//var_dump($tipbus);exit;
		//guarda en un array las columnas que se usaran
		$columns = array(
				array(
				'db' => 'id',
				'dt' => 'DT_RowId',
				'formatter' => function ($d, $row) {
			// Technically a DOM id cannot start with an integer, so we prefix
			// a string. This can also be useful if you have multiple tables
			// to ensure that the id is unique with a different prefix
			return 'row_' . $d;
		}),

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
	// ... rest of the class methods


	public function quitarEmojis($texto)
	{
		// Elimina todos los caracteres fuera del rango básico multilingüe
		$texto = preg_replace(
			'/[\x{1F600}-\x{1F64F}]|' . // Emoticonos
			'[\x{1F300}-\x{1F5FF}]|' . // Símbolos y pictogramas
			'[\x{1F680}-\x{1F6FF}]|' . // Transporte y mapas
			'[\x{1F1E0}-\x{1F1FF}]|' . // Banderas
			'[\x{2600}-\x{26FF}]|' . // Misceláneos
			'[\x{2700}-\x{27BF}]|' . // Otros símbolos
			'[\x{1F900}-\x{1F9FF}]|' . // Símbolos suplementarios
			'[\x{1FA70}-\x{1FAFF}]|' . // Nuevos emojis (2020+)
			'[\x{200D}]|' . // Zero Width Joiner
			'[\x{FE0F}]|' . // Variantes
			'[\x{1F018}-\x{1F270}]|' .
			'[\x{238C}-\x{2454}]|' .
			'[\x{20D0}-\x{20FF}]/u', '', $texto
		);
		return trim($texto);
	}


}
?>
