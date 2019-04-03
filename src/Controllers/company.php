<?php

class company extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
        $this->authCheck();
        $this->authCompany();
        if(empty($_SESSION['company'])){
            $this->registerForm();
            return false;
        }
    }
    
    function index(){
        $this->companyModel ? true:$this->loadModel('companyModel');
        $this->view->tripList = $this->companyModel->tripList();
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        
        $this->view->render('Header');
        $this->view->render('Components/Navbar');
        $this->view->render('Components/Company_TripList');      
        $this->view->render('Footer');
    }
    
    function mytrip($id){
        $this->companyModel ? true:$this->loadModel('companyModel');
        $this->view->myTrip = $this->companyModel->mytrip($id);
        $this->view->tripSlot0 = $this->companyModel->tripSlot($id,0);
        $this->view->tripSlot1 = $this->companyModel->tripSlot($id,1);
        
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        
        $this->view->render('Header');
        $this->view->render('Components/Navbar');
        $this->view->render('Components/Company_TripDetail');      
        $this->view->render('Footer');
    }
    function tripdelslot($tripid,$slotid){
        $this->companyModel ? true:$this->loadModel('companyModel');
        $this->companyModel->tripSlotCancle($slotid,$tripid);
        
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        $this->view->GoTo['url'] = './company/mytrip/'.$tripid;
        $this->view->GoTo['delay'] = 3000;
        $this->view->LoaderMsg = 'ดำเนินการเรียบร้อย';
        $this->view->render('Header');
        $this->view->render('Components/Loader');
        $this->view->render('Footer');
    }
    function tripcpnfirmslot($tripid,$slotid){
        $this->companyModel ? true:$this->loadModel('companyModel');
        $this->companyModel->tripSlotConfirm($slotid,$tripid);
        
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        $this->view->GoTo['url'] = './company/mytrip/'.$tripid;
        $this->view->GoTo['delay'] = 3000;
        $this->view->LoaderMsg = 'ดำเนินการเรียบร้อย';
        $this->view->render('Header');
        $this->view->render('Components/Loader');
        $this->view->render('Footer');
    }
    
    private function authCompany(){
        $this->companyModel ? true:$this->loadModel('companyModel');
        $result = $this->companyModel->auth();
        if($result){
            $_SESSION['company'] = $result;
        }
    }
    
    private function registerForm(){
        if($_POST['name']){
            $this->companyModel ? true:$this->loadModel('companyModel');
            $result = $this->companyModel->addcompany($_POST);
            if($result == 23000){
                $this->view->Form_err = 23000;
            }else{
                $this->view->GoTo['url'] = './company';
                $this->view->LoaderMsg = 'ยืนยันธุรกิจเรียบร้อย';
                $this->view->render('Header');
                $this->view->render('Components/Loader');
                $this->view->render('Footer');
                return false;
            }
        }
        
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        $this->view->render('Header');
        $this->view->render('Components/Navbar');
        $this->view->render('Components/Company_Register_Form');
        $this->view->render('Components/Modal_login');
        $this->view->render('Footer');
        
    }
    
    function addtrip(){
        
        if($_POST['trip']){
            $this->loadModel('trip');
            $result = $this->trip->addtrip($_POST,$_FILES['images']);
            if(!$result){
                $this->view->JSAlert[0] = "Can't addtrip. Please try again.";
            }else{
                $this->view->CSSInject[0] = URL_Public . '/css/style.css';
                
                $this->view->GoTo['url'] = './company';
                $this->view->GoTo['delay'] = 5000;
                
                $this->view->LoaderMsg = 'ระบบทำการเพิ่มข้อมูลเรียบร้อย';
                
                $this->view->render('Header');
                $this->view->render('Components/Loader');
                $this->view->render('Footer');
                return false;
            }
        }
        $this->view->MCEFONT = true;
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        
        $this->view->JSInject[0] = URL_Public . '/script/tinymce/tinymce.min.js';
        $this->view->JSInject[1] = URL_Public . '/script/addtrip.js';
        
        $this->view->ReactInject[0] = URL_Public . '/react/provice_select.js';
        $this->view->render('Header');
        $this->view->render('Components/Navbar');
        
        $this->view->render('Components/Company_Addtrip_Form');      
        $this->view->render('Footer');
    }   
}