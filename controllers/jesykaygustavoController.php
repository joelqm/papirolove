<?php

class jesykaygustavoController extends Controller
{
    public function index()
    {
        $this->_view->assign('titulo', 'Jesyka y Gustavo');
        $this->_view->setJs(array('script'));
        $this->_view->renderContent('index');
    }
}
