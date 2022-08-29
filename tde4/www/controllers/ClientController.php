<?php

    class ClientController
    {
        public function register()
        {
            require_once('views/templates/header.php');
            require_once('views/client/register.php');
            require_once('views/templates/footer.php');
        }

        public function registerView()
        {
            if(isset($POST['accept']))
            {
                $accept = true;
                $acceptView = "Termo aceito.";
            }else
            {
                $accept = false;
                $acceptView = "Termo não aceito.";
            }

            $arrayClient = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'time' => $_POST['time'],
                'cores' => $_POST['cor'],
                'texto' => $_POST['text'],
                'opt' => $_POST['opt']
            );

            require_once('views/templates/header.php');
            require_once('views/client/registerView.php');
            require_once('views/templates/footer.php');

        }
    }

?>