<?php

class ConnectClass{
    
    var $conn;

    public function openConnect(){
        $servername ="db:3306"; //docker: db:3306 // wamp: localhost
        $username ="root";
        $password ="1q2w3e4r5t";
        $dbname ="pw_exemple"; 

        $this -> conn = new mysqli($servername, $username, $password, $dbname);
        if ($this -> conn->connect_error){
            die("Connection failed: " . $this -> conn -> connect_error);
        }
    }

    public function getConn(){
        return $this -> conn;
    }
}