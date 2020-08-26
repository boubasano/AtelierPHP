<?php

//Requête renvoyant la variation moyenne de chaque crypto, depuis 7 jours.

$symbole = $_REQUEST['symbole'];


$pdo = new PDO("sqlite:cryptos.db");
$stm = $pdo->query("SELECT  date(c.datetime_cours) date_jour, avg(c.valeur) valeur
FROM    cours c
        JOIN crypto c2 on c.crypto_id = c2.id
WHERE   c2.symbole='$symbole'
GROUP BY date_jour");

$liste = $stm->fetchAll();

echo json_encode($liste);

;
