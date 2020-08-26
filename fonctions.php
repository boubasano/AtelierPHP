<?php
/*function dessineTableau($lignes, $colonnes){
    // Votre code ici
}
dessineTableau(4, 3);*/
/*
 * Résultat:
 * - - -
 * - - -
 * - - -
 * - - -
 */
function dessineTableau($lignes, $colonnes)
{
    for ($k = 1; $k <= 3; $k++) { // cette boucle va boucler sur les lignes et colonnes selon
                                  // le nombre d'indentation demandée

        for ($i = 1; $i <= $lignes; $i++) { // cette boucle va afficher le nbre de lignes
            echo "\n";
            for ($j = 1; $j <= $colonnes; $j++) { // cette boucle va afficher le nbre de colonnes
                echo "-";
            }

        }
        echo "\n";
    }
}

$resultat = dessineTableau(7, 7);

