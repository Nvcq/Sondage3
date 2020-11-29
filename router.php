<?php

use Controller\HomeController;
use Controller\UserController;

if(array_key_exists("page", $_GET)){
    switch ($_GET['page']) {

        case 'sign':
            $controller = new UserController();
            $controller->displaySignPage();
            break;

        case 'signed':
            $controller = new UserController();
            $controller->sign();
            break;

        case 'log':
            $controller = new UserController();
            $controller->displayLogPage();
            break;

        case 'logged':
            $controller = new UserController();
            $controller->log();
            break;

        case 'logout':
            $controller = new UserController();
            $controller->logout();
            break;

        case 'profile':
            $controller = new UserController();
            $controller->displayProfilePage();
            break;

        case 'changeProfile':
            $controller = new UserController();
            $controller->displayChangeProfilePage();
            break;

        case 'changed':
            $controller = new UserController();
            $controller->changeProfile();
            break;

        case 'friend':
            $controller = new UserController();
            $controller->displayFriendPage();
            break;

        case 'removeFriend':
            $controller = new UserController();
            $controller->removeFriend();
            break;

        case 'addFriend':
            $controller = new UserController();
            $controller->addFriend();
            break;
        
        default:
            echo "Mauvais url !";
            die();
            break;
    }
}else {
    $controller = new HomeController();
    $controller->displayHomePage();
}

