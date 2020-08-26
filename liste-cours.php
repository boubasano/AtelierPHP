<?php

// renvoyer en json le resultat de la requete 'select * from cours"

$pdo = new PDO("sqlite:cryptos.db");
$stm = $pdo->query("SELECT * FROM cours");
$series = $stm->fetchAll();

echo json_encode($series);
