<?php

abstract class Controller
{
    protected $_view;
    protected $_request;
    protected $_numero;
    
    public function __construct() {
        //$this->_request = new Request();
        $this->_view = new View(new Request);
    }
    
    abstract public function index();

    protected function loadModel($modelo){
        $modelo = $modelo . 'Model';
        $rutaModelo = ROOT . 'models' . DS . $modelo . '.php';


        if(is_readable($rutaModelo)){
            require_once $rutaModelo;
            $modelo = new $modelo;

            return $modelo;
        }
        else{
            throw new Exception('Error de Modelo');
        }
    }

    protected function getTexto($clave){
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = htmlspecialchars($_POST[$clave], ENT_QUOTES, 'UTF-8');
            return $_POST[$clave];
        }

        return '';
    }

    protected function getInt($clave){
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = FILTER_INPUT(INPUT_POST, $clave, FILTER_VALIDATE_INT);
            return $_POST[$clave];
        }

        return 0;
    }

    protected function getDecimal($clave) {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])) {
            $_POST[$clave] = FILTER_INPUT(INPUT_POST, $clave, FILTER_VALIDATE_FLOAT);
            return $_POST[$clave];
        }

        return 0;
    }

    protected function filtrarInt($int){
        $int = (int) $int;
        if(is_int($int)){
            return $int;
        }
        else{
            return 0;
        }

    }

    protected function redireccionar($ruta = false)
    {
        if($ruta){
            header('location:' . BASE_URL . $ruta);
            exit;
        }
        else{
            header('location:' . BASE_URL);
            exit;
        }
    }

    protected function getSql($clave)
    {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = htmlspecialchars($_POST[$clave], ENT_QUOTES, 'UTF-8');
            return $_POST[$clave];
        }

        return '';
    }

    protected function getAlphaNum($clave)
    {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = (string) preg_replace('/[^A-Z0-9_]/i', '', $_POST[$clave]);
            return trim($_POST[$clave]);
        }
    }

    public function validarEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        }

        return true;
    }

    protected function getPostParam($clave)
    {
        if(isset($_POST[$clave])){
            return $_POST[$clave];
        }
    }

    protected function getLibrary($libreria)
    {
        $rutaLibreria = ROOT . 'libs' . DS . 'fpdf' . DS . $libreria . '.php';

        if(is_readable($rutaLibreria)){
            require_once $rutaLibreria;
        }
        else{
            throw new Exception('Error de Libreria');
        }
    }

    protected function getLibraries($libreria)
    {
        $rutaLibreria = ROOT . 'libs' . DS . $libreria . '.php';

        if(is_readable($rutaLibreria)){
            require_once $rutaLibreria;
        }
        else{
            throw new Exception('Error de Libreria');
        }
    }

    /**
     * Izipay/Lyra: PAID, AUTHORISED, CAPTURED (y *_EXPIRED) = pago OK.
     * AUTHORISED = autorizada, a veces "en espera de captura".
     */
    protected function izipayEsPagoExitoso($krAnswer)
    {
        if (!is_array($krAnswer) || !isset($krAnswer['orderStatus'])) {
            return false;
        }
        $status = strtoupper(trim((string) $krAnswer['orderStatus']));
        $ok = array(
            'PAID',
            'AUTHORISED',
            'CAPTURED',
            'ACCEPTED',
            'PARTIALLY_PAID',
            'AUTHORISED_TO_VALIDATE',
            'WAITING_AUTHORISATION',
            'WAITING_AUTHORISATION_TO_VALIDATE',
            'CAPTURED_EXPIRED',
            'AUTHORISED_EXPIRED',
        );
        return in_array($status, $ok, true);
    }

    protected function izipayEstadoRecibido($krAnswer)
    {
        if (!is_array($krAnswer) || !isset($krAnswer['orderStatus'])) {
            return '';
        }
        return (string) $krAnswer['orderStatus'];
    }
}

?>
