<?php

class mytour extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
        $this->authCheck();
    }
    
    function index(){
        $this->member ? true:$this->loadModel('member');
        $this->view->tourList = $this->member->tourList();
        
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        $this->view->render('Header');
        $this->view->render('Components/Navbar');
        $this->view->render('Components/Member_Tourlist');
        $this->view->render('Components/Modal_login');
        $this->view->render('Footer');
    }  
    function payment(){
        if(isset($_POST['payment_number'])){
            $this->member ? true:$this->loadModel('member');
            $result = $this->member->paymentConfirm($_POST['trip_id'],$_POST['payment_number'],$_POST['payment_price'],$_POST['payment_log']);
        }else{
            $this->index();
            return false;
        }
        
        $this->view->GoTo['url'] = './mytour';
        $this->view->GoTo['delay'] = 5000;
        $this->view->LoaderMsg = 'บันทึกข้อมูลแล้ว';
        
        $this->view->render('Header');
        $this->view->render('Components/Loader');
        $this->view->render('Footer');
        
    }
    
    function tripdelslot($tripid,$slotid){
        $this->companyModel ? true:$this->loadModel('companyModel');
        $this->companyModel->tripSlotCancle($slotid,$tripid);
        
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        $this->view->GoTo['url'] = './mytour';
        $this->view->GoTo['delay'] = 3000;
        $this->view->LoaderMsg = 'ดำเนินการเรียบร้อย';
        $this->view->render('Header');
        $this->view->render('Components/Loader');
        $this->view->render('Footer');
    }
}