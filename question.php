<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">

  <title>Accueil</title>
</head>

<body>
<?php include 'header.php' ?>
  <main id="sondageqst">
  <div class="form">
            <h1>QUESTION</h1>
            <label for="réponse1">RÉPONSE 1</label>
            <input type="checkbox" placeholder="Réponse 1" name="reponse" class="btn">
            <label for="réponse1">RÉPONSE 2</label>
            <input type="checkbox" placeholder="Réponse 1" name="reponse" class="btn">
            <label for="réponse1">RÉPONSE 3</label>
            <input type="checkbox" placeholder="Réponse 1" name="reponse" class="btn">
            <label for="réponse1">RÉPONSE 4</label>
            <input type="checkbox" placeholder="Réponse 1" name="reponse" class="btn">

            <button id="valide">VALIDÉ LES MODIFICATIONS</button>
           
  </div>

  </main>
  <?php include 'footer.php' ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>