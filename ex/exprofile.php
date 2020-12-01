<h1>Votre profil</h1>

<br><hr><br><br>

<p>Nom : <?= $_SESSION["lastname"] ?></p> <br> <br>
<p>Prénom : <?= $_SESSION["firstname"] ?></p> <br> <br>
<p>Pseudo : <?= $_SESSION["pseudo"] ?></p> <br> <br>
<p>Email : <?= $_SESSION["email"] ?></p> <br> <br> <br> <br>

<a href="?page=changeProfile">Modifier le profil</a> <br> <br> <br>

<a href="?">Page d'accueil</a>