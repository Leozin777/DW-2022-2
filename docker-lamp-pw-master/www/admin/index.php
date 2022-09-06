<?php
    if(!isset($_GET['controller']))
    {
        require_once('controllers/MainController.php');
        $MainController = new MainController();
        $MainController -> home();
    }else
    {
       switch($_REQUEST['controller'])
       {
            case 'site':
                require_once('controllers/MainController.php');
                $MainController = new MainController();

                if(!isset($_GET['action']))
                {
                    $MainController -> home();
                }else
                {
                    switch ($_REQUEST['action']) {
                        case 'value':
                            # code...
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                }
       } 
    }

?>