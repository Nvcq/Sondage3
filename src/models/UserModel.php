<?php 
namespace Model;

use Core\Model\DefaultModel;

class UserModel extends DefaultModel{

    public static function signup($data) {
        $ddb = self::getDb();
        
        $query = $ddb->prepare("INSERT INTO user (firstname, lastname, pseudo, email, password) VALUES (:firstname, :lastname, :pseudo, :email, :password)");

        return $query->execute($data);
    }

    public static function checkUser($email) {
        $ddb = self::getDb();

        $query = $ddb->prepare("SELECT user_id FROM user WHERE email = :email");

        $query->execute($email);

        return $query->fetch();
    }


    public static function findUser($email) {
        $ddb = self::getDb();

        $query = $ddb->prepare("SELECT user_id, firstname, lastname, pseudo, password FROM user WHERE email = :email");

        $query->execute($email);

        return $query->fetch();
    }


    public static function updateProfile($data) {
        $ddb = self::getDb();

        $query = $ddb->prepare("UPDATE user SET firstname = :firstname, lastname = :lastname, pseudo = :pseudo, email = :email, password = :password WHERE user_id = :user_id");

        return $query->execute($data);

        
    }

}