<?php

class search extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
    }
     
    function index(){
        $this->trip ? true:$this->loadModel('trip');
        $this->view->tripList_hit = $this->trip->tripList(1,'hit');
        $this->view->searchResult = $this->trip->tripList(false,$_GET['keyword']);
        
        $this->view->BCList[0] = array("javascript:void();","ค้นหา");
        $this->view->BCList[1] = array("./search?keyword=".$_GET['keyword'],$_GET['keyword']);
        
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        
        $this->view->render('Header');
        $this->view->render('Components/Navbar');
        $this->view->render('Components/Modal_login');
        $this->view->render('Components/SearchBox_medium');
        $this->view->render('Components/Breadcrumb');
        $this->view->render('Components/Search_Result');
        
        $this->view->render('Footer');
    }   
}