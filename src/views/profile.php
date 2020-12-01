<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= MAIN_PATH ?>/style/style.css">
   
    <title>Profil</title>
</head>
<body>
<?php require('inc/header.php') ;?>

<main>

    <h1>Bienvenue sur le profil</h1>


<section class="profil">
<h1>Bienvenue sur le profil</h1>

    <article class="infoProfil">
        <h3>Infos du profil</h3>
        <p>Pseudo : <?= $_SESSION['pseudo'] ?></p>
        <p>Nom : <?= $_SESSION['lastname'] ?></p>
        <p>Prénom : <?= $_SESSION['firstname'] ?></p>
        <p>Email : <?= $_SESSION['email'] ?></p>
    </article>

    <article class="modifProfil">
        <h3>Modif infos profil</h3>
        <form action="#" class="modif">
            <input type="text" placeholder="pseudo" name="pseudo" class="btn">
            <input type="email" placeholder="email" name="email" class="btn">
            <input type="password" placeholder="password" name="password" class="btn">
            <button >VALIDER LES MODIFICATIONS</button>
        </form>
    </article>

</section>
</main>

<?php require('inc/footer.php')  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= MAIN_PATH ?>/js/main.js"></script>
</body>
</html>