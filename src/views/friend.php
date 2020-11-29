<h1>Ajouter un Ami</h1> <br> <br>

<form action="?page=addFriend" method="POST">
    <label for="email">Email de la personne que vous souhaitez ajouter : </label>
    <input type="email" name="email">
    <input type="submit" name="addFriend" placeholder="John@doe.com">
</form>




<h2>Liste d'amis :</h2>

<hr>

<p><?= $hasFriends ?></p>

<?php foreach($friends as $friend) { ?>

<h2>Pseudo : <?= $friend['pseudo'] ?></h2>

<p><?= $friend['firstname'] ?> <?= $friend['lastname'] ?></p> <br>

<a href="?page=removeFriend&id=<?= $friend['friend_asked'] ?>">Supprimer l'ami</a>

<br><hr>

<?php } ?>