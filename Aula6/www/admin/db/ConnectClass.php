<?php
    class ConnectClass
    {
        var $conn;

        public function openConnect()
        {
            $servername = "localhost"; //localhost:3306
            $username = "root";
            $password = "";
            $dbname = "pw_exemple";

            $this->conn = new mysqli($servername, $username, $password, $dbname);
            if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
            }
        }

        public function getConn()
        {
            return $this->conn;
        }
    }
?>