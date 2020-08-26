<?php

/**
 * Afficher un menu et demander à l'utilisateur de faire un choix.
 * Tant que l'utilisateur n'a pas cliquer sur "Q", on réaffiche le menu.
 * A Afficher 2 au carré
 * B Affiche 2 au cube
 * Q Quitte
 * a. Avec un while:
 * b. Avec un do .. while
 */

$choix="Z";
// cas d'un do...while

do{
    echo "A Affiche 2 au carré\n";
    echo "B Affiche 2 au cube\n";
    echo "Q Quitter\n";
    echo "Faites votre choix :\n";
    $choix=readline();

    //en fonction du choix de l'utilisateur

    if ($choix == "A"){
        echo "carré de 2 = 4\n";
    }elseif ($choix == "B") {
        echo "cube de 2 = 8\n";
    }
}while($choix!="Q");
echo "Fin de Programme";

// cas d'un while
while($choix!="Q"){
    echo "A Affiche 2 au carré\n";
    echo "B Affiche 2 au cube\n";
    echo "Q Quitter\n";
    echo "Faites votre choix :\n";
    $choix=readline();

    //en fonction du choix de l'utilisateur

    if ($choix == "A"){
        echo "carré de 2 = 4\n";
    }elseif ($choix == "B") {
        echo "cube de 2 = 8\n";
    }

}
echo "Fin de Programme";


