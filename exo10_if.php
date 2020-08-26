<?php

/*
 * Exercice:
 * Générer 2 nombre aléat entre 1 et 10 ds des variables
 * Si $a < $b afficher 'plus petit', si >, afficher 'plus grand' si égal afficher 'égaux'
 */

$a=random_int(1, 100);
$b=random_int(1, 100);

if ($a<$b){
    echo $a. " est plus petit que ".$b;
}elseif ($a>$b){
    echo $a." est plus grand que ".$b;
}else echo "Bingo ".$a." est égal à ".$b ;
