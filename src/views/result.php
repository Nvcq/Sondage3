<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        
        <h1>Les résultats</h1>

        <div id="nbr"></div>

        <input type="hidden" value="<?= $id ?>" name="sondage_id" id="sondage_id">
        <input type="hidden" value="<?= $_SESSION['id'] ?>" name="user_id" id="user_id">
        <div id="reps"></div>

        <br>
        <hr>

        <h2>Chat</h2>

        <div id="messages"></div>

        <form>
            <input type="text" name="message" id="msg">
            <button>Envoyer</button>
        </form>




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="<?= MAIN_PATH ?>/js/rep.js"></script>

    </body>

</html>