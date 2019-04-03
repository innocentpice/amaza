<?php

class Database extends PDO {
    public function __construct(){
            $DBHost = Configs::$DBHost;
            $DBName = Configs::$DBName;
            $DBUser = Configs::$DBUser;
            $DBPass = Configs::$DBPass;
        try{
            parent::__construct("mysql:host=$DBHost;dbname=$DBName",$DBUser,$DBPass);
            parent::exec("SET NAMES utf8");
            parent::exec("SET @@global.time_zone = '+00:00'");
            parent::exec("SET GLOBAL time_zone = '+7:00'");
            parent::exec("SET GLOBAL time_zone = 'Asia/Bangkok'");
        } catch (PDOException $e){
            echo "Database Connection Error.</br>";
        }
    }
}


