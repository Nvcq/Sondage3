<?php
namespace Controller;

use Core\Controller\DefaultController;
use Model\HomeModel;
use Model\SondageModel;

class HomeController extends DefaultController {

    public static function displayHomePage() {

        $mine = SondageModel::getMySondages(["user_id"=>$_SESSION['id']]);
        $hasSondages = null;
        if(!$mine) $hasSondages = "Vous n'avez pas créé de sondages";

        $friends = HomeModel::getFriendSondages(["id"=>$_SESSION['id']]);
        $hasFriendSondages = null;
        if(!$friends) $hasFriendSondages = "Vous n'avez pas de sondages d'amis";

        self::render("homepage", compact("friends", "mine", "hasSondages", "hasFriendSondages"));
    }
    
}