<?php

$entier=123;
$decimal=12.34;

$total= $entier + $decimal;

echo $total . "\n" . gettype($total) ;
echo "\n";

// operateurs mathématiques

$a=2; $b=3; $c=4; $x=10;

$y= ($a*$a) + ($b*$x) + $c;

echo $y;

echo "\n";

$nom="Sano";
$prenom="Aboubacar";
$age=36;

echo "Bonjour tout le monde, je m'appelle " . $nom . " " . $prenom. ", et j'ai ". $age ." ans";

echo "\n";

$a = 123;
$b = "coucou";
$c = $a;
$a = $b;


echo $a. " " . $b;


