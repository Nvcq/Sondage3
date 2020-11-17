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
        <h1>NEW ACCOUNT</h1>
        <div class="form">
            <input type="text" placeholder="Nom" name="nom" class="btn">
            <input type="text" placeholder="Prenom" name="prenom" class="btn">
            <input type="date" placeholder="Date de naissance" name="date" class="btn">
            <input type="email" placeholder="Email" name="email" class="btn">
            <input type="password" placeholder="Password" name="password" class="btn">
            <button id="signIn">SIGN IN</button>
        </div>
        <img src="style/img/connect.svg" id="connect">
    </div>
    </div>
</main>
    
 <?php include 'footer.php' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>