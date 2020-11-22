<?php
namespace Controller;

use Core\Controller\DefaultController;

class HomeController extends DefaultController {

    public static function displayHomePage() {
        self::render("homepage");
    }
}