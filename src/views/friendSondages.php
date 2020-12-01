<h1>Les sondages de mes amis !</h1>


<?php foreach($query as $sondage) { ?>

<h4>Question : <?= $sondage['question'] ?></h4>
<p>Choix 1 : <?= $sondage['choice1'] ?></p>
<p>Choix 2 : <?= $sondage['choice2'] ?></p>
<h5>Créer par <?= $sondage['pseudo'] ?>, <?php if($sondage['time'] > 0 ) {
    echo " plus que " . $sondage['time'] . " heures pour répondre !";
} else {
    echo "le sondage est terminé...";
}  ?></h5>
<a href="?page=answer&id=<?= $sondage['sondage_id'] ?>">Répondre</a>
<a href="?page=result&id=<?= $sondage['sondage_id'] ?>">Voir les résultats</a>

<br> <br> <br> <hr>

<?php } ?>
