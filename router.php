<?php

use Controller\HomeController;

if(array_key_exists("page", $_GET)){
    switch ($_GET['page']) {
        case 'oui':
            echo "C'est un oui!";
            break;
        
        case 'non':
            echo "est ce un non ?";
            break;
        
        default:
            echo "c'est l'index oui oui";
            break;
    }
}else {
    $controller = new HomeController();
    $controller->displayHomePage();
}

