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
	public function __construct() {

		parent::__construct();
		$this->_ajax = $this->loadModel('ajax');
		$this->_obsequio = $this->loadModel('obsequio');
		$this->_index = $this->loadModel('index');

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



}
?>