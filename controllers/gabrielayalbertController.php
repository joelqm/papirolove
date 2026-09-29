<?php

/**
 * Compatibilidad: URL antigua sin "h".
 * Redirige de forma permanente a gabrielayalberth.
 */
class gabrielayalbertController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->redirectToCanonical();
	}

	public function index()
	{
		$this->redirectToCanonical();
	}

	private function redirectToCanonical()
	{
		$request = new Request();
		$method = $request->getMetodo();
		$args = $request->getArgs();

		$path = 'gabrielayalberth';
		if ($method && $method !== 'index') {
			$path .= '/' . $method;
			if (!empty($args)) {
				$path .= '/' . implode('/', $args);
			}
		}

		header('HTTP/1.1 301 Moved Permanently');
		header('Location: ' . BASE_URL . $path);
		exit;
	}
}
