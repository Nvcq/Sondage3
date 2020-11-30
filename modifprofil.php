<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
   
    <title>Profil</title>
</head>
<body>
<?php require('header.php') ;?>

<main class="modifprofil">
<form action="#" class="modif">
            <input type="text" placeholder="pseudo" name="pseudo" class="btn">
            <input type="text" placeholder="nom" name="nom" class="btn">
            <input type="text" placeholder="prenom" name="prenom" class="btn">
            <input type="email" placeholder="email" name="email" class="btn">
            <input type="password" placeholder="ancien password" name="password" class="btn">
            <input type="password" placeholder="password" name="password" class="btn">
            <button class="menu">VALIDÉ LES MODIFICATIONS</button>
        </form>

</main>

<?php require('footer.php') ;?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>