<?php

/**
 * a. Avec une boucle while, vous allez générer un nombre aléat entre 1 et 9999.
 * Vous sortez lorsque le nombre aléat est égal au code secret.
 * ( random_int )
 * Afficher nombre d'essais
 * b. Optimiser en enregistrant dans un tableau les codes incorrects déjà testés,
 *    histoire de ne pas le retester.
 */

$codeSecret = 1234;
$count = 0;
$codeTeste=-1;
$tab = [];
do {
    $codeTeste = random_int(1, 9999);
    $tab[]= $codeTeste;

    $count++;

}
while( $codeTeste != $codeSecret);
echo "Nombre de tests: $count";
implode(', ', $tab);
var_dump($tab);


