<?php
    include('templates/header.php');

    if(($_GET['pages'] == 'home'))
    {
        include('pages/home.php');
    }
    if(($_GET['pages'] == 'about'))
    {
        include('pages/about.php');
    }
    if(($_GET['pages'] == 'product'))
    {
        include('pages/product.php');
    }else
    {
        include('pages/home.php');
    }



    
    include('templates/footer.php');
?>
                
