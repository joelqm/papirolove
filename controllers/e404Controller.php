<?php

class e404Controller extends Controller{

	public function __construct(){

		parent::__construct();

	}

	public function index() {

		$this->_view->assign('titulo','404 | Inti Raymi');
		$this->_view->renderizarError('index');

	}


}
?>