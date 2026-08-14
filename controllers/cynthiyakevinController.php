<?php

/**
 * Redirección de URL antigua mal escrita.
 */
class cynthiyakevinController extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->redireccionar('cynthiaykevin');
	}
}
?>
