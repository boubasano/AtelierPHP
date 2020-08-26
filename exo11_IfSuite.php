<?php

/* Avec boucle for et des if, vérifier si un nombre n est premier.
modulo*/


$n= random_int(1, 100);
$premier = true;
$mot1 = ["hey ! c'est bien un nombre premier", "ce doit être un coup de chance", "tente maintenant un nombre pas premier", "On est bien sur un nombre premier là"];
$mot2 = ["A mon avis on n'est pas bon du tout ", "ce sera pour la prochaine fois", "tente maintenant un nombre  premier", "Hum! pas sûr que ce soit un nombre premier"];
$num = rand(0, 3);
for($i=2;$i<$n;$i++){
    if( $n % $i   ==   0 ){# Divisible
        $premier=false;
    }
}

if( $premier==false ){
    foreach ($mot2 as $alea2)
    {
        $alea2 = $num;
    }
    echo $n." : ".$mot2[$num];

}else{
    foreach ($mot1 as $alea1)
    {
        $alea1 = $num;
    }
    echo $n." : " . $mot1[$num];
}


