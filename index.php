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
        <section class="section1">
            <h1>Bienvenue sur votre site de sondage préféré. </h1>
            <h2> Nos derniers sondages phares</h2>
          <article>
              
            <div class="sondage">
            
              <div class="questions">
              <img src="style/img/NBA.png">
              <p>QUI VA GAGNER LA SAISON 2021</p>
            </div>
            <div class="questions">
                <img src="style/img/Roland_garos.png">
                <p>QUI VA GAGNER LA SAISON 2021</p>
              </div>
              <div class="questions">
                <img src="style/img/PSG.png">
                <p>QUI VA GAGNER LA SAISON 2021</p>
              </div>
              </div>

          </article>  
        </section>
        <section class="section2">
          <h2> Regarder à quoi joue vos amis... </h2>
          <article>
            <div class="sondage">
            
              <div class="questions">
              <img src="style/img/NBA.png">
              <div class="amis">
                <img src="style/img/man.jpg" >
                <p>Thomas à répondu</p>
            </div>
            
              <p>QUI VA GAGNER LA SAISON 2021</p>
            </div>
            <div class="questions">
                <img src="style/img/Roland_garos.png">
                <div class="amis">
                <img src="style/img/mamie.png" >
                <p>Mamie à répondu</p>
            </div>
                <p>QUI VA GAGNER LA SAISON 2021</p>
              </div>
              <div class="questions">
                <img src="style/img/PSG.png">
                <div class="amis">
                <img src="style/img/mamie.png" >
                <img src="style/img/man.jpg" >
                <p>Mamie + 1 autre personne à répondu</p>
            </div>
                <p>QUI VA GAGNER LA SAISON 2021</p>
              </div>
              </div>
          </article>
        </section>
        
    </main>
    
    <?php include 'footer.php' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>