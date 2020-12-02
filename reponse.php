<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">

  <title>Reponses</title>
</head>

<body>
<?php include 'header.php' ?>
  <main id="sondagereponse">
  <div class="formulaire">
        <h5>choix1</h5>
        <h5>choix2</h5>
        <h6>TOTAL</h6>
        <p>A repondu</p>
         
           
  </div>
  <div id="titre">
  <h2> TCHAT</h2>
  </div>

  <div class="formulaire">
    <br>
    <p>personne qui fais blabla1</p>
    <p>personne qui fais blabla2</p>
    <form action="" class="plusami">
    <input type="text" placeholder="Ecrire" name="message">
    <button id="envoyer">Envoyer</button>
</form>
    <br>
</div>
  </main>
  <?php include 'footer.php' ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>