<?php

class login extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
    }
     
    function index(){
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        
        if(isset($_POST['username']) && isset($_POST['password'])){
            $this->login($_POST['username'],$_POST['password']);
        }
        
        $this->view->GoTo['url'] = './';
        $this->view->LoaderMsg = 'กำลังเข้าสู่ระบบ';
        
        $this->view->render('Header');
        $this->view->render('Components/Loader');
        $this->view->render('Footer');
    }   
    
    private function login($username,$password){
        $this->loadModel('auth');
        $result = $this->auth->login($_POST['username'],$_POST['password']);
        if($result){
            $_SESSION['auth'] = $result;
            return true;
        }else{
            return false;
        }
    }
}