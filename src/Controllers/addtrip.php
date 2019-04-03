<?php

class addtrip extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
        $this->authCheck();
    }
    
    function index(){
        
        if($_POST['trip']){
            $this->loadModel('trip');
            $result = $this->trip->addtrip($_POST,$_FILES['images']);
            if(!$result){
                $this->view->JSAlert[0] = "Can't addtrip. Please try again.";
            }else{
                $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        
                $this->view->GoTo['url'] = './addtrip';
                $this->view->GoTo['delay'] = 5000;
                
                $this->view->LoaderMsg = 'ระบบทำการเพิ่มข้อมูลเรียบร้อย';
                
                $this->view->render('Header');
                $this->view->render('Components/Loader');
                $this->view->render('Footer');
                return false;
            }
        }
        
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        
        $this->view->JSInject[0] = URL_Public . '/script/tinymce/tinymce.min.js';
        $this->view->JSInject[1] = URL_Public . '/script/addtrip.js';
        
        $this->view->ReactInject[0] = URL_Public . '/react/provice_select.js';
        $this->view->render('Header');
        $this->view->render('Components/Navbar');
        
        // เพิ่ม
        $this->view->render('Components/Addtrip_Form');      
        $this->view->render('Footer');
    }   
}