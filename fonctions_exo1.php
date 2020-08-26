<?php

function cube ($n){
    $resultat=$n*$n*$n;
    return $resultat;
}




function total (){
    $a = cube(1);
    $b = cube(1);
    $sum = $a + $b;
    return $sum;
}

for ($i=1; $i<=10; $i++){
    //echo cube($i)."\n";
}
function puissance($nombre,$puiss)
{
    $result=1;
    for ($i=0;$i<$puiss;$i++){
        $result *=  $nombre;}
    return $result;
}

echo puissance (, 3);


