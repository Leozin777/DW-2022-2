<?php

    class ClientModel
    {
        public function listClient()
        {
            require_once('db/ConnectClass.php');
            $ConnectClass = new ConnectClass();
            $ConnectClass -> openConnect();
            $connection = $ConnectClass -> getConn();

            $sql = "SELECT * FROM clients";
            return $connection -> query($sql);
        }
    }

?>