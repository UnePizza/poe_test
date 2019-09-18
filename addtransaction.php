<?php
include parametre.php

    echo $_POST['idcompte']."<br>";
    echo $_POST['date']."<br>";
    echo $_POST['montant']."<br>";

$req = $dbname->prepare('INSERT INTO transaction (date, montant, idcompte) VALUES(:date, :montant, :idcompte)');
$req->execute(array(
    'date' => $date,
    'montant' => $montant,
    'idcompte' => $idcompte
));

echo "la transaction a bien été enregistrée"."<br>";

echo "<a href= ajouttransaction.php> ajouter une autre transaction </a>"."<br>";
echo "<a href= index.php> retour à l'index </a>"."<br>";
?>