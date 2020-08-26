<?php
/**
 * Créer un tableau contenant des paires de lettres,
 * à partir d'un string: "A,A,B,B,C,C,D,D,E,E,F,F".
 *
 * Mélanger tableau alétoirement: shuffle (cf ma doc)
 *
 * Boucle de jeu:
 * -------------
 * 1. Afficher : 1 2 3 4 5 6 7 8 ( si vous avez 8 cartes ) : longueur tableau: fonction "len($tab)"
 * 2. L'utilisateur va choisir le numéro correspondant à 2 cartes
 * 3. Retourner les 2 cartes pour afficher p ex:  1 2 3 A 5 A 7 8
 * 4. Si les 2 cartes retournées sont les mêmes, vous les enlevez du tableau
 * *** la boucle de jeu se termine qd l'utilisateur a trouvé toutes les cartes.
 *
 * *************
 * E X E M P L E
 * *************
 * B B C C
 * 3 4 5 6
 * Choisissez une carte: 2
 * Choississer autre carte: 5
 * 1 A 3 4 C 6
 *
 * 1 2 3 4 5 6
 * Carte 1: 1
 * Carte 2: 2
 * Ok, paire trouvée
 * 1 2 3 4
 * Choisir une carte:
 * JE VAIS PARTAGER MON TELEPHONE.
 */

//Créer un tableau contenant des paires de lettres

$string = "A,A,B,B,C,C,D,D";
$tab = explode(",",$string);

// je melange mon tableau
shuffle($tab);



while(true){
    // Affiche cartes coté verso
    for($i=1;$i<=count($tab);$i++){
        echo $i . " ";
    }
    echo "\n";

    echo "Choisissez une carte";
    //indice carte choisie 1
    $indice1 =readline()-1;
    echo "Choisissez une autre carte";
    //indice carte choisie 1
    $indice2 =readline()-1;

    //en fonction du choix de l'utilisateur

    for($i=0;$i<=count($tab);$i++){
        if ($i == $indice1 || $i == $indice2){
            echo $tab[$i];
        } else if ($tab[indice1]== $tab[indice2]){
            // pour supprimer les cartes paires trouvées

            unset($tab[$i]);
            echo $tab[$i];
        }
            echo $i+1;
        }

        echo "\n";
    } echo "\n";









