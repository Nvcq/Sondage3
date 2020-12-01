<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= MAIN_PATH ?>/style/style.css">

  <title>Accueil</title>
</head>

<body>
<?php require('inc/header.php') ;?>

<?php /*
      $_SESSION['id'] = null;
      $_SESSION['firstname'] = null;
      $_SESSION['lastname'] = null;
      $_SESSION['pseudo'] = null;
      $_SESSION['email'] = null;
      $_SESSION['password'] = null;
      */ ?>

  <main>
    <section class="section1">
      <h1>Bienvenue sur votre site de sondage préféré. </h1>
      <h2> Vos derniers sondages</h2>
      <article>

        <div class="sondage">

          <div class="questions">
            <img src="<?= MAIN_PATH ?>/img/NBA.png">
            <p>QUI VA GAGNER LA SAISON 2021</p>
          </div>
          <div class="questions">
            <img src="<?= MAIN_PATH ?>/img/Roland_garos.png">
            <p>QUI VA GAGNER LA SAISON 2021</p>
          </div>
          <div class="questions">
            <img src="<?= MAIN_PATH ?>/img/PSG.png">
            <p>QUI VA GAGNER LA SAISON 2021</p>
          </div>
        </div>

      </article>
    </section>
    <section class="section2">
      <h2> Les sondages de vos amis </h2>
      <article>
        <div class="sondage">

          <div class="questions">
            <img src="<?= MAIN_PATH ?>/img/NBA.png">
            <div class="amis">
              <img src="<?= MAIN_PATH ?>/img/man.jpg">
              <p>Thomas à répondu</p>
            </div>

            <p>QUI VA GAGNER LA SAISON 2021</p>
          </div>
          <div class="questions">
            <img src="<?= MAIN_PATH ?>/img/Roland_garos.png">
            <div class="amis">
              <img src="<?= MAIN_PATH ?>/img/mamie.png">
              <p>Mamie à répondu</p>
            </div>
            <p>QUI VA GAGNER LA SAISON 2021</p>
          </div>
          <div class="questions">
            <img src="<?= MAIN_PATH ?>/img/PSG.png">
            <div class="amis">
              <img src="<?= MAIN_PATH ?>/img/mamie.png">
              <img src="<?= MAIN_PATH ?>/img/man.jpg">
              <p>Mamie + 1 autre personne à répondu</p>
            </div>
            <p>QUI VA GAGNER LA SAISON 2021</p>
          </div>
        </div>
      </article>
    </section>

  </main>

  <?php require('inc/footer.php') ;?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="<?= MAIN_PATH ?>/js/main.js"></script>
</body>

</html>