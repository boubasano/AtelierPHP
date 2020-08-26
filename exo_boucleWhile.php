<?php

/**
 * Grace à une boucle while, rechercher les 10 premiers nombres premiers.
 */




$n = 1;
$count = 0;
$continuer = true;
while($count<10000)
{
    $premier = true;
    for($i=2;$i<$n;$i++){
    if( $n % $i   ==   0 ){# Divisible
        $premier=false;
    }
}if( $premier==true )
{
    echo $n. " ";
    $count += $premier;
    }
    $n++;
}

