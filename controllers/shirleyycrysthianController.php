<?php

class shirleyycrysthianController extends Controller
{
    public function index()
    {
        $this->_view->assign('titulo', 'Shirley y Crysthian');
        $this->_view->setJs(array('script', 'scriptGifts', 'scriptSend'));
        $this->_view->renderContent('index');
    }
}