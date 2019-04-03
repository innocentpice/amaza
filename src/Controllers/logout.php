<?php

class logout extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
    }
     
    function index(){
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        
        session_unset();
        
        $this->view->GoTo['url'] = './';
        $this->view->LoaderMsg = 'กำลังออกจากระบบ';
        
        $this->view->render('Header');
        $this->view->render('Components/Loader');
        $this->view->render('Footer');
    }   
}