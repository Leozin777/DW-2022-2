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
                    header('Location: index.php');
                }else
                {
                    echo 'senha inválida';
                }
            }else
            {
                echo 'usuário não existe';
            }
        }

    }

?>