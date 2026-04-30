<?php

require_once "libs/PHPMailer/src/Exception.php";
require_once "libs/PHPMailer/src/PHPMailer.php";
require_once "libs/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once './libs/rest-php-sdk-master/src/autoload.php';

class fernandayrommelController extends Controller
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

	}

	public function index()
	{
		
		$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
		$base = (stripos($host, 'localhost') !== false) ? '/papirolove' : '';
		header('Location: ' . $base . '/fernandayromme');
		exit;
	}

}

?>

