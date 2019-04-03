<?php

class Bootstrap {
    function __construct(){
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/',$url);
        
        if(!isset($url[0]) || $url[0] == 'index.php'){
            $url[0] = 'index';
        }
        
        $file = 'Controllers/' . $url[0] . '.php';
        
        if(file_exists($file)){
            require $file;
        } else {
            require 'Controllers/errors.php';
            $controller = new Errors();
            $controller->index();
            return false;
        }
        
        $controller = new $url[0];
        if(isset($url[1])){
            if(method_exists($controller, $url[1])){
                if(isset($url[2])){
                    @$controller->{$url[1]}($url[2],@$url[3],@$url[4]);
                }else{
                    @$controller->{$url[1]}();
                }
            }else{
                require 'Controllers/errors.php';
                $controller = new Errors();
                $controller->index();
                return false;
            }
        }else{
            $controller->index();
        }
    }
}