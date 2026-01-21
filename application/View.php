<?php

require_once ROOT . 'libs' . DS . 'smarty-5.5.1' . DS .'libs' . DS . 'Smarty.class.php';
use Smarty\Smarty;



class View extends Smarty
{
    private $_request;
    private $_js;
    private $_rutas;

    public function __construct(Request $peticion)
    {
        parent::__construct();
        $this->_request = $peticion;
        $this->_js = array();
        $this->_rutas = array();

        $modulo = $this->_request->getModulo();
        $controlador = $this->_request->getControlador();

        if($modulo){
            $this->_rutas['view'] = ROOT . 'modules' . DS . $modulo . DS . 'views'. DS . $controlador . DS;
            $this->_rutas['js'] = BASE_URL . 'modules/' . $modulo . '/views/' . $controlador . '/js/';
        }
        else{
            $this->_rutas['view'] = ROOT . 'views'. DS . $controlador . DS;
            $this->_rutas['js'] = BASE_URL . 'views/' . $controlador . '/js/';
        }
    }

    public function setJs(array $js)
    {
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->_js[] = $this->_rutas['js'] . $js[$i] . '.js';
            }
        } else {
            throw new Exception('Error de js');
        }
    }

    // Función ÚNICA para renderizar
    public function render($vista, $item = false)
    {
        // Configuración de directorios Smarty para el tema actual
        $this->setTemplateDir(ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS);
        $this->setConfigDir(ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'configs' . DS);
        $this->setCacheDir(ROOT . 'tmp' . DS . 'cache' . DS);
        $this->setCompileDir(ROOT . 'tmp' . DS . 'template' . DS);

        $_params = array(
            'rutacentral' => BASE_URL . 'views/',
            'ruta_css'    => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/assets/css/', // Ajustado a "assets"
            'ruta_img'    => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/assets/img/', // Ajustado a "assets"
            'ruta_js'     => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/assets/js/',  // Ajustado a "assets"
            'ruta_fonts'  => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/assets/fonts/',
            'ruta_layout' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/',
            'js'          => $this->_js,
            'item'        => $item,
            'root'        => BASE_URL,
            'configs'     => array(
                'app_name' => APP_NAME,
                'app_company' => APP_COMPANY
            )
        );

        // Verificar si existe la vista solicitada (el contenido central)
        if(is_readable($this->_rutas['view'] . $vista . '.tpl')){
            // Asignamos la ruta del contenido para que template.tpl la incluya
            $this->assign('_contenido', $this->_rutas['view'] . $vista . '.tpl');
        } else {
            throw new Exception('Error de vista: ' . $this->_rutas['view'] . $vista . '.tpl');
        }

        $this->assign('_layoutParams', $_params);
        
        // Renderizamos la plantilla principal del tema
        $this->display('template.tpl');
    }


    public function renderClean($vista, $item = false)
    {
        // Configuración de directorios Smarty para el tema actual
        $this->setTemplateDir(ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS);
        $this->setConfigDir(ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'configs' . DS);
        $this->setCacheDir(ROOT . 'tmp' . DS . 'cache' . DS);
        $this->setCompileDir(ROOT . 'tmp' . DS . 'template' . DS);

        $js = array();
        if(count($this->_js)){
            $js = $this->_js;
        }

        $_params = array(
            'rutacentral' => BASE_URL . 'views/',
            'ruta_css'    => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/assets/css/', // Ajustado a "assets"
            'ruta_img'    => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/assets/img/', // Ajustado a "assets"
            'ruta_js'     => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/assets/js/',  // Ajustado a "assets"
            'ruta_fonts'  => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/assets/fonts/',
            'ruta_layout' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/',
            'js'          => $js,
            'item'        => $item,
            'root'        => BASE_URL,
            'filever'     => rand(),
            'configs'     => array(
                'app_name' => APP_NAME,
                'app_company' => APP_COMPANY
            )
        );

        // Verificar si existe la vista solicitada (el contenido central)
        if(is_readable($this->_rutas['view'] . $vista . '.tpl')){
            // Asignamos la ruta del contenido para que template.tpl la incluya
            $this->assign('_contenido', $this->_rutas['view'] . $vista . '.tpl');
        } else {
            throw new Exception('Error de vista: ' . $this->_rutas['view'] . $vista . '.tpl');
        }

        $this->assign('_layoutParams', $_params);
        
        // Renderizamos la plantilla principal del tema
        $this->display('template_clean.tpl');
    }


}