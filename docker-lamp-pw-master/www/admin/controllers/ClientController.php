<?php

    class ClientController
    {
        public function listClient()
        {
            require_once('models/ClientModel.php');
            $ClientModel = new ClientModel();
            $result = $ClientModel -> listClient();
            
            $arrayClients =  array();
            while($line = $result -> fetch_assoc())
            {
                array_push($arrayClients, $line);
            }

            require_once('views/templates/header.php');
            require_once('views/client/listClient.php');
            require_once('views/templates/footer.php');
        }
    }

?>