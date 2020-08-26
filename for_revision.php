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
 * JE VAIS PARTAGER MON TELEPHONE.*/


/**
 * Faire deviner un nombre aléatoire entre 1 et 100 à l'utilisateur.
 *
 * Ex:
 *
 * Entrez un nombre: 40
 * Plus grand !
 * Entrez un nombre: 60
 * Plus petit !
 * Entrez un nombre: 50
 * Plus grand !
 * Entrez un nombre: 57
 * OUI VOUS AVEZ GAGNE, LE NOMBRE RECHERCHE ETAIT BIEN 57.
 * Voulez-vous recommencer la partie ? ( O / N )
 * O
 *
 * ... On recommence
 */




//Pour le premier niveau nombres allant de 1 à 50

do {
    $test = 1;
    $nombreAleatoire = random_int(1, 50);
    echo "Entrez un nombre entre 1 et 50";
    echo "\n";
    $choix = readline();
    do{// appeler la fonction boucle de jeu ici
        boucleDeJeu1();
        boucleDeJeu2();

    }while($nombreAleatoire != $choix);
    echo "Bingo, vous avez gagné \n";

    // je demande à l'utilisateur de recommencer la partie s'il le souhaite
    echo "Voulez-vous recommencer la partie ? ( O / N )";
    echo "\n";
    $recommencer = readline();
} while ($recommencer == "O");

//fonction de connexion

function boucleDeJeu1 ()
{
    $choix = readline();
    //je fais la verification du nombre entré par l'utilisateur cas du choix inférieur
    if ($choix < $nombreAleatoire) {
        echo  "c'est plus grand \n";

    }
}

function boucleDeJeu2 ()
{
    $nombreAleatoire
    $choix = readline();
    //je fais la verification du nombre entré par l'utilisateur cas du choix inférieur
    if ($choix > $nombreAleatoire) {
        echo "c'est plus petit \n";

    }
}


    echo "Bingo, vous avez gagné \n";






