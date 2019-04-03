<?php

class trips extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
    }
     
    function index(){
        @$this->id();
    }   
    
    function id($tripId){
        
        $this->loadModel('trip');
        $this->loadModel('member');
        
        $this->view->reviewCheck = $this->trip->reviewCheck($tripId);
        
        if(!$this->view->reviewCheck && isset($_POST['review'])){
            $this->trip->addreview($tripId,$_POST['review']);
            $this->view->reviewOff = true;
        }
        
        $this->view->reviews = $this->trip->reviewFetch($tripId);
        
        $this->view->BookingCheck = $this->member->tourList($tripId);
        $this->view->BookingCheck = $this->view->BookingCheck[0];
        
        $this->view->tripDetail = $this->trip->tripDetail($tripId);
        
        $this->view->BCList[0] = array("javascript:void();","ทริป");
        $this->view->BCList[1] = array("./search?keyword=".$this->view->tripDetail['trip_province'],$this->view->tripDetail['trip_province']);
        $this->view->BCList[2] = array("./search?keyword=".$this->view->tripDetail['trip_name'],$this->view->tripDetail['trip_name']);
        
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        
        $this->view->render('Header');
        $this->view->render('Components/Navbar');
        $this->view->render('Components/Modal_login');
        
        $this->view->render('Components/SearchBox_medium');
        $this->view->render('Components/Breadcrumb');
        $this->view->render('Components/Trip_Content');
        
        $this->view->render('Footer');
    }
    
}