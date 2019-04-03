<?php

class profile extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
        $this->authCheck();
    }
    
    function index(){
        
        if($_FILES['image']){
            move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/src/Publics/images/user/'.$_SESSION['auth']['member_id'].'.png');
        }
        
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        $this->view->render('Header');
        $this->view->render('Components/Navbar');
        $this->view->render('Components/Member_Profile');
        $this->view->render('Components/Modal_login');
        $this->view->render('Footer');
    }   
    
    function edit_profile(){
        if($_POST['passwordold']){
            if($_SESSION['auth']['member_password']!=$_POST['passwordold']){
                $this->view->JSAlert[0] = 'พาสเวิร์ดเดิมไม่ถูกต้อง';
            }else{
                $this->loadModel('member');
                $this->member->editmember($_POST);
                $this->login($_SESSION['auth']['member_username'],$_POST['passwordnew']);
            }
        }
        
    
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        $this->view->render('Header');
        $this->view->render('Components/Navbar');
        $this->view->render('Components/Member_Profile_Edit_Form');
        $this->view->render('Components/Modal_login');
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