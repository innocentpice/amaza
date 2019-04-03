<?php

class index extends Controller {
    function __construct(){
        parent:: __construct();
        session_start();
    }
     
    function index(){
        $this->view->CSSInject[0] = URL_Public . '/css/style.css';
        $this->view->render('Header');
        $this->view->render('Components/Navbar');
        $this->view->render('Components/SearchBox_large');
        $this->Trip_new();
        $this->review();
        $this->Trip_hit();
        $this->view->render('Components/Modal_login');
        $this->view->render('Footer');
    }   
    
    private function Trip_new(){
        $this->trip ? true:$this->loadModel('trip');
        $this->view->tripList_new = $this->trip->tripList(4,'new');
        $this->view->render('Components/Trip_new');
    }
    private function Trip_hit(){
        $this->trip ? true:$this->loadModel('trip');
        $this->view->tripList_hit = $this->trip->tripList(4,'hit');
        $this->view->render('Components/Trip_hit');
    }
    private function review(){
        $this->trip ? true:$this->loadModel('trip');
        $this->view->reviews = $this->trip->reviewFetch('all',6);
        $this->view->render('Components/Review_Event_Rank');
    }
}