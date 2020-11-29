<h1>Entrez vos nouvelles informations : </h1> <br>

<form action="?page=changed" method="POST">

    <label for="firstname">Prénom : </label> <input type="text" name="firstname" value="<?= $_SESSION["firstname"] ?>" required> <br> <br>
    <label for="lastname">Nom : </label> <input type="text" name="lastname" value="<?= $_SESSION["lastname"] ?>" required> <br> <br>
    <label for="pseudo">Pseudo : </label> <input type="text" name="pseudo" value="<?= $_SESSION["pseudo"] ?>" required> <br> <br>
    <label for="email">Email : </label> <input type="email" name="email" value="<?= $_SESSION["email"] ?>" required> <br> <br>
    <label for="password">Nouveau mot de passe (Remettez le même si vous ne souhaitez pas changer) : </label> <input type="password" name="password"> <br> <br> <br> <br> <br>
    <label for="exPassword">Mot de passe : </label> <input type="password" name="exPassword">
    <input type="submit" name="changeProfile" value="Enregistrer les modifications">
    <input type="submit" name="cancelProfile" value="Annuler les modifications">

</form>