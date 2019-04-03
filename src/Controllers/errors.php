<?php

class errors extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
    }
     
    function index(){
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        
        $this->view->render('Header');
        $this->view->render('Components/Navbar');
        $this->view->render('Components/Error_404');
        $this->view->render('Components/Modal_login');
        $this->view->render('Footer');
    }   
}