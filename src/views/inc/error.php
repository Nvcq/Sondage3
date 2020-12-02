<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= MAIN_PATH ?>/style/style.css">
   
    <title>Erreur</title>
</head>
<body>
<?php require('header.php') ;?>

<main id="error">
    <h1> <?= $msgError ?></h1>
    <img src="<?= MAIN_PATH ?>/img/grave.png" alt="tetemorte">
</main>
<?php require('footer.php') ;?>
</body>
</html>