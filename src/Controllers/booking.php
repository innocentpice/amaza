<?php

class booking extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
        $this->authCheck();
    }
    
    function id($tripid){
        
        $this->loadModel('trip');
        $this->loadModel('member');
        $this->view->BookingCheck = $this->member->tourList($tripid);
        if(!$this->view->BookingCheck){
            $this->trip->bookingTrip($tripid);
            $this->view->LoaderMsg = 'ระบบทำการเพิ่มข้อมูลเรียบร้อย';
        }else{
            $this->view->LoaderMsg = 'คุณมีทริปนี้อยู่แล้ว';
        }
        
        
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
    
        $this->view->GoTo['url'] = './trips/id/'.$tripid;
        $this->view->GoTo['delay'] = 5000;
        
        
        
        $this->view->render('Header');
        $this->view->render('Components/Loader');
        $this->view->render('Footer');
        return false;
    }
}