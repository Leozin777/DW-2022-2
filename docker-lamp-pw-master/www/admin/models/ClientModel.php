<?php
    class ClientModel
    {
        var $connection;

        public function __connection()
        {
            require_once('db/ConnectClass.php');
            $ConnectClass = new ConnectClass();
            $ConnectClass -> openConnect();
            $this -> connection = $ConnectClass -> getConn();
        }

        public function listClients()
        {
            $sql = "SELECT * FROM clients";
            var_dump($sql);
        }

        public function consultClient($idClient)
        {
            $sql = " SELECT * FROM clients 
            WHERE 
                idClient = $idClient
            ";
            return $this -> connection -> query($sql);
        }

        public function insertClient($arrayClient)
        {
            $sql = " INSERT INTO 
                clients (name, email, phone, address)
            VALUES
                (
                    '{$arrayClient['name']}', 
                    '{$arrayClient['email']}', 
                    '{$arrayClient['phone']}', 
                    '{$arrayClient['address']}'
                )    
            ";
            return $this -> connection -> query($sql); 
        }

        public function updateClient($arrayClient)
        {
            $sql = " UPDATE clients
                    SET
                        name = '{$arrayClient['name']}',
                        email = '{$arrayClient['email']}',
                        phone = '{$arrayClient['phone']}',
                        address = '{$arrayClient['address']}'
                    WHERE
                        idClient = {$arrayClient['id']}
            ";
            return $this -> connection -> query($sql); 
        }

        public function deleteClient($arrayClient)
        {
            $sql = " DELETE FROM clients
                WHERE
                    idClient = '{$arrayClient['id']}'
            ";
            return $this -> connection -> query($sql); 
        }
    }
?>