<?php if($_SESSION['id'] === $sondage->user_id) {
    echo 'Vous ne pouvez pas répondre a votre propre sondage';
    die();
} ?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1> Répondre au sondage de <?= $sondage->pseudo ?></h1>


    <p>Question : <?= $sondage->question ?></p> <br>

    <form>

        <input type="submit" value="<?= $sondage->choice1 ?>" name="choice1" id="choice1">

        <input type="submit" value="<?= $sondage->choice2 ?>" name="choice2" id="choice2">

        <input type="hidden" value="<?= $sondage->sondage_id ?>" name="sondage_id" id="sondage_id">

        <input type="hidden" value="<?= $_SESSION['id'] ?>" name="user_id" id="user_id">

    </form>

    <div id="voted"></div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= MAIN_PATH ?>/js/rep.js" type="text/javascript"></script>

    </body>

</html>
