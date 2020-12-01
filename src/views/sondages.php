<h1>Listes des sondages</h1>

<p><?= $hasSondages ?></p>

<?php foreach($sondages as $sondage): ?>

<h2>Question : <?= $sondage['question'] ?></h2>

<p>Choix 1 : <?= $sondage['choice1'] ?></p> 

<p>Choix 2 : <?= $sondage['choice2'] ?></p>

<a href="?page=result&id=<?= $sondage['sondage_id'] ?>">Voir les réponses</a>


<?php endforeach ?>