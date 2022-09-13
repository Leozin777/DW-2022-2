<?php

    class UserController
    {
        public function validateLogin()
        {
            $userName = $_POST['userName'];
            $password = $_POST['password'];
            require_once('models/UserModel.php');
            $userModel = new UserModel();

            $result = $userModel -> consultUser($userName);

            if($line = $result -> fetch_assoc())
            {
                if($password == $line['password'])
                {
                    $_SESSION['user'] = $line;
                    header('Location: ?');
                }else
                {
                    echo 'errou';
                }
            }else
            {
                echo 'não existe';
            }
        }

        public function listUsers()
        {
            require_once('user/UserModel.php');
            $userModel = new UserModel();
            $result = $userModel -> listUsers();

            $arrayUsers =  array();
            while($line = $result -> fetch_assoc())
            {
                array_push($arrayClients, $line);
            }

            require_once('views/templates/header.php');
            require_once('views/templates/listUser.php');
            require_once('views/templates/footer.php');
        }
    }

?>