<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
   
    <title>Accueil</title>
</head>
<body>
<?php include 'header.php';?>
    <main>

    <div id="fond">
    <div class="page">
        <h1>AJOUTER UN SONDAGE</h1>
        <div class="form">
            <input type="text" placeholder="QUESTION" name="nom" class="btn">
            <input type="text" placeholder="Réponse 1" name="reponse" class="btn">
            <input type="text" placeholder="Réponse 2" name="reponse" class="btn">
            <input type="text" placeholder="Réponse 3" name="reponse" class="btn">
            <input type="text" placeholder="Réponse 4" name="reponse" class="btn">
            
            <label for="avatar">Cloture du sondage:</label>
            <input type="date" placeholder="Date de naissance" name="date" class="btn">

            <input type="file" name="avatar" accept="image/png, image/jpeg" class="btn">
           
            <button id="signIn">PUBLIER</button>
        </div>
        <img src="style/img/elections_09.svg" id="connect">
    </div>
    </div>





    </main>
    
    <?php include 'footer.php' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>