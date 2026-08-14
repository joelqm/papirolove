<?php

class e404Controller extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		http_response_code(404);
		$this->_view->assign('titulo', '404 | Página no encontrada');
		$this->_view->assign('descripcion', 'La página solicitada no existe');
		$this->_view->render_template_basic('index');
	}

}
?>
