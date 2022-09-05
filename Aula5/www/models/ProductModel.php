<?php
    class ProductModel
    {
        public function listProducts()
        {
            require_once('db/ConnectClass.php');
            $ConnectClass = new ConnectClass();
            $ConnectClass -> openConnect();
            $connection = $ConnectClass -> getConn();

            $sql = "SELECT * FROM products";
            return $connection -> query($sql);
        }
    }
?>