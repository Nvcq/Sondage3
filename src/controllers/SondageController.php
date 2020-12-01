<?php 
namespace Controller;

use Core\Controller\DefaultController;
use Core\Http;
use Model\SondageModel;

class SondageController extends DefaultController {

    public function displayCreateSondagePage() {
        if(isset($_SESSION['email'])) {
            self::render("createSondage");
        }
        else {
            echo "Vous devez être connecté pour créer un sondage";
            die();
        }
    }


    public function createSondage() {
        if(isset($_POST['create']) && isset($_POST['choice1']) && isset($_POST['choice2']) && isset($_POST['ending_date']) ) {
            
            if(!isset($_SESSION['email'])) Http::redirect("");

            $sondageData = [
                "user_id" =>$_SESSION['id'],
                "question" => $_POST["question"],
                "c1" => $_POST["choice1"],
                "c2" => $_POST["choice2"],
                "ending_date" => $_POST['ending_date'],
            ];
            
            $create = SondageModel::createSondage($sondageData);

            if($create) {
                Http::redirect("");
            }
            else {
                echo "Erreur lors de la création du sondage";
                die();
            }

        }
        else {
            echo "Vous devez compléter le formulaire de création de sondage !";
            die();
        }
    }



    public function displayMySondagesPage() {
        
        if(isset($_SESSION['email'])) {
            
            $sondages = SondageModel::getMySondages(["user_id"=>$_SESSION['id']]);

            $hasSondages = null;

            if(!$sondages) $hasSondages = "Vous n'avez pas crée de sondages";

            self::render("sondages", compact("sondages", "hasSondages"));

        }
        else {
            echo "Vous devez être connecté pour consulter vos sondages";
            die();
        }
    }



    public function displayFriendSondagesPage() {

        if(isset($_SESSION['email'])) {
            
            $query = SondageModel::getFriendSondages(["id"=>$_SESSION['id']]);

            self::render("friendSondages", compact("query"));

            
        }
        else {
            echo "Vous devez être connecté pour consulter les sondages de vos amis !";
            die();
        }

    }


    public function displayAnswerPage() {
        if(!isset($_GET['id'])) {
            echo 'Vous ne pouvez pas accéder a cette page';
            die();
        }
        else {

            $close = SondageModel::closeSondage(["id"=>$_GET['id']]);

            
            if($close->time > 0) {
                $check = SondageModel::checkIfAnswered(["sondage_id"=>$_GET['id'], "user_id"=>$_SESSION['id']]);

                if($check) {
                    echo 'Vous avez déja répondu a ce sondage';
                    die();                
                }
                else {
                    $sondage = SondageModel::getFriendSondage(["id"=>$_GET["id"]]);
                    self::render("answer", compact('sondage'));
                }
            }
            else {
                echo "c'est plus dispo ntm";
                die();
            }
        }

    }


    public function displayResultPage() {
        
        if(isset($_GET['id'])) {
            
            $id = $_GET['id'];
            
            self::render("result", compact("id"));

            
        }
        else {
            echo "Vous n'avez pas accès à cette page";
            die();
        }
        

    }

 

}