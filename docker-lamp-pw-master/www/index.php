<?php
    if(!isset($_GET['controller']))
    {
        require_once('controllers/SiteController.php');
        $SiteController = new SiteController();
        $SiteController -> home();
    }else
    {
        switch($_REQUEST['controller'])
        {
            case 'site':
                require_once('controllers/SiteController.php');
                $SiteController = new SiteController();  
                
                if(!isset($_GET['action']))
                {
                    $SiteController -> home();
                }else
                {
                    switch ($_REQUEST['action']) 
                    {
                        case 'home':
                            $SiteController -> home();
                            break;

                        case 'about':
                            $SiteController -> about();
                            break;

                        case 'product':
                            $SiteController -> product();
                            break;

                        case 'contact':
                            $SiteController -> contact();
                            break;
                    }
                }
                break;

            case 'client':
                require_once('controllers/ClientController.php');
                $ClientController = new ClientController();
                if(!isset($_GET['action']))
                {

                }else
                {
                    switch ($_REQUEST['action'])
                    {
                        case 'register':
                            $ClientController -> register();
                            break;
                        
                        case 'registerView':
                            $ClientController -> registerView();
                            break;

                        case 'listClients':
                            $ClientController -> listClients();
                            break;

                        default:
                            # code...
                            break;
                    }
                }

                break;
            
            case 'product':
                require_once('controllers/ProductController.php');
                $ProductController = new ProductController();
                if(!isset($_GET['action']))
                {

                }else
                {
                    switch($_REQUEST['action'])
                    {
                        case 'home':
                            $ProductController -> home();
                            break;

                        case 'listProduct':
                            $ProductController -> listProducts();
                            break;

                        default:
                            # code...
                            break;
                    }
                }
                
                break;

             
        }
    }
?>
                
