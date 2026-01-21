<?php

class errorController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->_view->assign('titulo','Mns');
		$this->_view->assign('_error',$this->_getError());
		$this->_view->renderizar('index');
	}

	public function access($codigo)
	{
		$this->_view->assign('titulo','Error');
		$this->_view->assign('_error',$this->_getError($codigo));
		$this->_view->renderizar('access');
	}

	private function _getError($codigo = false)
	{
		if($codigo){
			$codigo = $this->filtrarInt($codigo);
			if(is_int($codigo))
				$codigo = $codigo;
		}
		else{
			$codigo = 'default';
		}

		$error['default'] = 'Error de Acceso';
		$error['5050'] = 'Acceso Restringido! Usted no puede ingresar a esta página, para poder hacerlo deberá pedir permisos especiales con la persona a cargo.';
		$error['8080'] = 'Acceso Restringido';

		if(array_key_exists($codigo, $error)){
			return $error[$codigo];
		}
		else{
			return $error['default'];
		}

	}
}

?>