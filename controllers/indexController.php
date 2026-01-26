<?php

class indexController extends Controller{	

	private $_index;
	private $_dt;
	private $_ajax;

	public function __construct() {

		parent::__construct();
		$this->_ajax = $this->loadModel('ajax');
		$this->_index = $this->loadModel('index');
		$this->_dt = $this->loadModel('dataTable');

	}

	public function index(){

		
		$this->_view->assign('titulo','.:: PAPIROLOVE ::.');
		$this->_view->setJs(array('script'));
		$this->_view->renderConstruction('index');
		


	}

}

?>
