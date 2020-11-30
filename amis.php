<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
   
    <title>Accueil</title>
</head>
<body>
<?php require('header.php') ;?>

<main>
   
    <h3> MES AMIS </h3>


    <section class="ami">
   
        <article class="mesAmi">
<ul>
    <li>
        <h1>LOLA</h1>
        <p>lola@gmail.com</p>
        <a href="#">SUPPRIMER</a>
    </li>
    <li>
        <h1>LOLA</h1>
        <p>lola@gmail.com</p>
        <a href="#">SUPPRIMER</a>
    </li>
</ul>
        </article>
        <article class="ajoutAmi">
<form action="" class="plusami">
    <label>Ajouter un ami :</label>
    <input type="email" placeholder="Rechercher....." name="recherche">
</form>
        </article>
    </section>
</main>
    
<?php require('footer.php') ;?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>