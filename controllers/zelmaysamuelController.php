<?php

class zelmaysamuelController extends Controller
{
    public function index()
    {
        $this->_view->assign('titulo', 'Zelma y Samuel');
        $this->_view->setJs(array('script'));
        $this->_view->renderContent('index');
    }
}
