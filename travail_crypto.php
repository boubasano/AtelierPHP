<?php



//Requête renvoyant la variation moyenne de chaque crypto, depuis 7 jours.
$periode = $_REQUEST['periode'];

$pdo = new PDO("sqlite:cryptos.db");
$stm = $pdo->query("SELECT  c.symbole, c.nom, AVG(co.pct_variation_24_h) variation_moyenne
FROM    cours co
        JOIN crypto c on co.crypto_id = c.id
WHERE   co.datetime_cours>DATE('now', '-$periode days')
GROUP BY c.id");

$liste = $stm->fetchAll();

echo json_encode($liste);


