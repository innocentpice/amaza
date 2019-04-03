<?php

class register extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
    }
    
    function index(){
        if($_POST['username']){
            $this->loadModel('member');
            $result = $this->member->addmember($_POST);
            if($result == 23000){
                $this->view->Form_err = 23000;
                $this->registerForm();
            }else{
                $this->loadModel('auth');
                $result = $this->auth->login($_POST['username'],$_POST['password']);
                if($result){
                    $_SESSION['auth'] = $result;
                }
                $this->view->GoTo['url'] = './profile';
                $this->view->LoaderMsg = 'สมัครสมาชิกเรียบร้อย';
                
                $this->view->render('Header');
                $this->view->render('Components/Loader');
                $this->view->render('Footer');
            }
        }else{
            $this->registerForm();
        }
    }   
    
    private function registerForm(){
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        $this->view->render('Header');
        $this->view->render('Components/Navbar');
        $this->view->render('Components/Register_Form');
        $this->view->render('Components/Modal_login');
        $this->view->render('Footer');
    }
}