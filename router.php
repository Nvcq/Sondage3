<?php

use Controller\HomeController;
use Controller\SondageController;
use Controller\UserController;
use Model\ChatModel;
use Model\SondageModel;

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

        case 'createSondage':
            $sondage = new SondageController();
            $sondage->displayCreateSondagePage();
            break;

        case 'creating':
            $sondage = new SondageController();
            $sondage->createSondage();
            break;

        case 'mySondages':
            $sondage = new SondageController();
            $sondage->displayMySondagesPage();
            break;

        case 'friendSondages':
            $sondage = new SondageController();
            $sondage->displayFriendSondagesPage();
            break;

        case 'answer':
            $sondage = new SondageController();
            $sondage->displayAnswerPage();
            break;

        case 'postRep1':
            $rep = new SondageModel();
            $rep->postRep1($_POST);
            break;

        case 'postRep2':
            $rep = new SondageModel();
            $rep->postRep2($_POST);
            break;

        case 'getRep':
            $rep = new SondageModel();
            $rep->getRep($_POST);
            break;

        case 'result':
            $sondage = new SondageController();
            $sondage->displayResultPage();
            break;


        case 'postMessage':
            $controller = new ChatModel();
            $controller->postMessage($_POST);
            break;

        case 'getMessages':
            $controller = new ChatModel();
            $controller->getMessages($_POST);
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

