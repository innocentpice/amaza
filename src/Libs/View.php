<?php

class View {
    function __construct(){}
    
    public function render($name){
        require 'Views/' . $name . '.php';
    }
    public function asXml($name){
        echo header('content-type: text/xml');
        require 'Views/' . $name . '.php';
    }
    public function mb_wordwrap($string, $limit){
        $string = strip_tags($string); 
        $string = html_entity_decode($string); 
        $string = str_replace(array("\r", "\n"), "", $string); 
        if(mb_strlen($string, "UTF-8") <= $limit) return $string; 
        $last_space = mb_strrpos(mb_substr($string, 0, $limit, "UTF-8"), " ", 0, "UTF-8"); 
    
        return mb_substr($string, 0, $last_space, "UTF-8").' ...'; 
    }
}