<?php

require_once "libs/PHPMailer/src/Exception.php";
require_once "libs/PHPMailer/src/PHPMailer.php";
require_once "libs/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once './libs/rest-php-sdk-master/src/autoload.php';

class zelmaysamuelController extends Controller
{

    private $_zelmaysamuel;
	private $_dt;
	private $_key;
	private $_obsequio;
	private $_index;

    public function __construct()
	{
		parent::__construct();
		$this->_ajax = $this->loadModel('ajax');
		$this->_zelmaysamuel = $this->loadModel('couple');
		$this->_obsequio = $this->loadModel('obsequio');
		$this->_index = $this->loadModel('index');
		$this->_dt = $this->loadModel('dataTable');

		// TODO: actualizar al ID real (tbl_sede) de Fernanda y Rommel
		$this->_key = 3;
	}

    /*
    public function index()
    {
        $this->_view->assign('titulo', 'Zelma y Samuel');
        $this->_view->setJs(array('script', 'scriptGifts', 'scriptSend'));
        $this->_view->renderContent('index');
    }
    */


	public function index()
	{
		$this->_view->assign('titulo', 'Zelma y Samuel');

		$ps_k = $this->_zelmaysamuel->keysEmp($this->_key);

		$this->_view->assign('pk', $ps_k['defpk']);
		$this->_view->setJs(array('script', 'scriptGifts', 'scriptSend'));
		//$this->_view->renderContent('index');
		$this->_view->renderContent('proximamente');
	}




}