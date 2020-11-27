<?php 

namespace Controller;

use Core\Controller\DefaultController;
use Core\Http;
use Core\Model\DefaultModel;
use Model\UserModel;

class UserController extends DefaultController{

    public function displaySignPage() {
        if($_SESSION['email']) {
            echo 'Vous êtes déjà connecté';
        }
        else {
            self::render("sign");
        }
    }


    public function sign() {
        if(isset($_POST["signup"]) && isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["pseudo"])  && isset($_POST["email"]) &&  isset($_POST["password"])) {

            $check = UserModel::checkUser(["email"=>$_POST["email"]]);

            if(!$check) {

                $pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);

                $userData = [
                    "firstname" => $_POST["firstname"],
                    "lastname" => $_POST["lastname"],
                    "pseudo" => $_POST["pseudo"],
                    "email" => $_POST["email"],
                    "password" => $pwd,
                ];

                $query = UserModel::signup($userData);

                if($query) {
                    Http::redirect("?page=log");
                }
                else {
                    echo "Erreur lors de l'inscription !";
                    die();
                }

            }
            else {
                echo "Ce compte existe déjà !";
                die();
            }

        } 
        else {
            self::render("errors/signError");
            die();
        }
    }



    public function displayLogPage() {
        if($_SESSION['email']) {
            echo 'Vous êtes déjà connecté';
        }
        else {
            self::render("log");
        }
        
    }


    public function log() {

        if(isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password']) ) {

            $email = htmlspecialchars($_POST['email']);
            $pwd = htmlspecialchars($_POST['password']);

            $userData = UserModel::findUser(["email"=>$email]);

            
            if($userData) {
                
                if(password_verify($pwd, $userData->password)) {
                    $_SESSION['id'] = $userData->user_id;
                    $_SESSION['firstname'] = $userData->firstname;
                    $_SESSION['lastname'] = $userData->lastname;
                    $_SESSION['pseudo'] = $userData->pseudo;
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $userData->password;

                    Http::redirect("");
                }
                else {
                    echo 'identifiant ou mot de passe incorrect';
                    die();
                }

            }
            else {
                echo "Email incorrect";
                die();
            }
            
        }
        else {
            self::render("errors/logError");
            die();
        }

    }


    public function logout() {
        $_SESSION['id'] = null;
        $_SESSION['firstname'] = null;
        $_SESSION['lastname'] = null;
        $_SESSION['pseudo'] = null;
        $_SESSION['email'] = null;
        $_SESSION['password'] = null;

        Http::redirect("");
    }


    public function displayProfilePage() {
        if($_SESSION['email']) {
            self::render("profile");
        }
        else {
            echo "Vous devez vous connecter pour pouvoir accéder a votre profil";
            die();
        }
    }


    public function displayChangeProfilePage() {
        if($_SESSION['email']) {
            self::render("changeProfile");
        }
        else {
            echo "Vous devez vous connecter pour pouvoir modifier votre profil";
            die();
        }
    }

    public function changeProfile() {
        if(isset($_POST['changeProfile']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['pseudo']) && isset($_POST['password']) && $_POST['password'] !== "" && isset($_POST['exPassword']) ) {
            
            if(password_verify($_POST["exPassword"], $_SESSION['password'])) {

                $pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
                
                $userData = UserModel::updateProfile(["firstname"=>$_POST['firstname'], "lastname"=>$_POST['lastname'], "pseudo"=>$_POST['pseudo'], "email"=>$_POST['email'], "password"=>$pwd, "user_id"=>$_SESSION['id'] ]); 
                
                if($userData) {
                    $_SESSION['firstname'] = $_POST['firstname'];
                    $_SESSION['lastname'] = $_POST['lastname'];
                    $_SESSION['pseudo'] = $_POST['pseudo'];
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['password'] = $pwd;

                    Http::redirect("?page=profile");
                }
                else {
                    echo 'Erreur lors de la modification du profil';
                    die();
                }
            }
            else {
                echo 'Mot de passe incorrect';
                die();
            }
        }
        else if (isset($_POST['cancelProfile'])) {
            Http::redirect("?page=profile");
        }
        else {
            echo 'Vous devez compléter le formulaire pour accéder à cette page';
            die();
        }
    }




}