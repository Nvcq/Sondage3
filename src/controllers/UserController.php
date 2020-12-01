<?php 

namespace Controller;

use Core\Controller\DefaultController;
use Core\Http;
use Model\UserModel;

class UserController extends DefaultController{

    public function displaySignPage() {
        if(isset($_SESSION['email'])) {
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
        if(isset($_SESSION['email'])) {
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
        if(isset($_SESSION['email'])) {
            self::render("profile");
        }
        else {
            echo "Vous devez vous connecter pour pouvoir accéder a votre profil";
            die();
        }
    }


    public function displayChangeProfilePage() {
        if(isset($_SESSION['email'])) {
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

                $checkEmail = null;

                if($_POST['email'] !== $_SESSION['email']) $checkEmail = UserModel::checkUser(["email"=>$_POST["email"]]);

                if(!$checkEmail) {
                    
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
                    echo 'Cet email est déja pris !';
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



    public function displayFriendPage() {

        if(isset($_SESSION['email'])) {

            $friends = UserModel::listingFriend(["id"=>$_SESSION['id']]);

            $hasFriends = null;

            if(!$friends) $hasFriends = "Vous n'avez pas d'amis !";

            self::render("friend", compact("friends", "hasFriends"));
            
        }
        else {
            echo "Vous devez être connecté pour accéder à votre liste d'amis";
            die();
        }
    }

    public function removeFriend() {
        if(isset($_SESSION['email']) && isset($_GET['id']) && is_numeric($_GET['id'])) {

            $remove = UserModel::removeFriend(["asking"=>$_SESSION['id'], "asked"=>$_GET['id']]);

            if($remove) {
                Http::redirect("?page=friend");
            }   
            else {
                echo "Erreur lors de la suppression de l'ami";
            }         
        }
        else {
            echo 'Vous ne pouvez pas accéder a cette page';
        }
    }


    public function addFriend() {
        if(isset($_SESSION['email']) && isset($_POST['email']) ) {

            if($_POST['email'] === $_SESSION['email']) Http::redirect("?page=friend");
            
            $getId = UserModel::checkUser(["email"=>$_POST['email']]);

            if($getId) {

                $getId = $getId->user_id;
                $getId = (int)$getId;

                $check = UserModel::checkFriend(["asking"=>$_SESSION['id'], "asked"=>$getId]);

                if(!$check) {

                    $add = UserModel::addFriend(["asking"=>$_SESSION['id'], "asked"=>$getId]);

                    if($add) {
                        Http::redirect("?page=friend");
                    }
                    else {
                        echo "Erreur lors de l'ajout de l'ami";
                        die();
                    }
                }
                else {
                    echo "Vous êtes déjà ami avec cette personne";
                }

            }
            else {
                echo "Cet email ne correspond à aucun compte";
                die();
            }
        }
        else {
            echo "Vous ne pouvez pas accéder a cette page";
        }
    }




}