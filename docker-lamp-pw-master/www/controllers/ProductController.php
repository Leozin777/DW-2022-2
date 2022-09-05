<?php

    class ProductController
    {
        public function listProducts()
        {
            require_once('models/ProductModel.php');
            $ProductModel = new ProductModel();
            $result = $ProductModel -> listProducts();

            $arrayProducts =  array();
            while($line = $result -> fetch_assoc())
            {
                array_push($arrayProducts, $line);
            }

            require_once('views/templates/header.php');
            require_once('views/product/listProducts.php');
            require_once('views/templates/footer.php');
        }
    }
?>