<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
    </head>
    <body>
        <?php
            if($_SESSION['email']) {
                echo "<h1>Page d'accueil - Bonjour " . $_SESSION['pseudo'] . " !</h1>";
            } else {
                echo "<h1>Page d'accueil - (Vous n'etes pas connecté) </h1>";
            }
        ?>
        

        <p>Ceci est la page d'accueil ouai ouai ouai</p>

        <a href="?page=sign">S'inscrire</a> <br> <br>
        <a href="?page=log">Se connecter</a> <br> <br>
        <a href="?page=logout">Se déconnecter</a> <br> <br>
        <a href="?page=profile">Consulter son profil</a> <br> <br>
    </body>

</html>