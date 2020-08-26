<?php
// afficher le titre de toutes les series
$pdo = new PDO("sqlite:allocinetv.db");
$stm = $pdo->query("SELECT * FROM genre");
$series = $stm->fetchAll();

echo json_encode($series);
