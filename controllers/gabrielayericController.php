<?php

class gabrielayericController extends Controller
{
    public function index()
    {
        $this->_view->assign('titulo', 'Gabriela y Eric');
        $this->_view->setJs(array('script', 'scriptGifts', 'scriptSend'));
        $this->_view->renderContent('index');
    }
}