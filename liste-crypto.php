<?php

// renvoyer en json le resultat de la requete 'select * from crypto"

$pdo = new PDO("sqlite:cryptos.db");
$stm = $pdo->query("SELECT * FROM crypto");
$series = $stm->fetchAll();

echo json_encode($series);