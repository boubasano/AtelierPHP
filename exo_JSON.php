<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div id="genres"></div>
Tu veux ajouter un genre ?
<input id="nouveauGenre">
<input type="button" onclick="clicAjout();" value="Vas-y ajoute">


<?php
/* EXERCICES:
( travailler ds projet PHP )
A. Charger ds une valiable !GLOBALE! 'genres' la liste des genres
B. Trier la liste des genres par nom du genre par ordre alphabétique
C. Une fois la réponse HTTP reçue et convertie en JSON, générer dans un div une liste de div pour afficher les différents genres
D. Créer un formulaire permettant l'ajout d'un nouveau genre dans le tableau des genres ( qui fait l'ajout dans le tableau global 'genres')
E. Un fois que ça marche, réafficher la liste des genres*/

?>


<script>

    // variable globale qui me permet d'acceder à mes données tabgenres
    let tabgenres = [];


    let refraichirAfficageGenres = () => {
        // Vide div
        document.querySelector('#genres').innerHTML = '';

        // Trie genres
        genres = genres.sort((genreA, genreB) => {
            if (genreA.nom < genreB.nom) {
                return -1;
            } else if (genreA.nom > genreB.nom) {
                return 1;
            } else {
                return 0;
            }
        });

        // Génère ds mon div un span / genre
        genres.forEach(genre => {

            let span = document.createElement('span');
            span.style.backgroundColor = 'lightblue';
            span.style.border = '1px solid grey';
            span.style.margin = '3px';
            span.innerHTML = genre.nom;
            document.querySelector('#genres').appendChild(span);
        });
    };

    let clicAjout = () => {

        // Récup nom genre entré par util
        let nomGenre = document.querySelector('#nouveauGenre').value;

        // Ajoute à var glob genre
        let genre = {nom: nomGenre};
        genres.push(genre);

        // Raffraichit affichage
        refraichirAfficageGenres();
    };

    // grace à la fonction fetch('ma page .php ') dans lequel se trouve notre requete on demande au navigateur de nous garder notre requete
    // le navigateur garde donc la requete sous l'objet promise
    let promiseFetch = fetch('BDD_PDO.php');

    promiseFetch.then(rep => {

        let promiseJson = rep.json();

        promiseJson.then(tabGenres => {
            console.log(tabGenres);

            // Init var glob genres
            genres = tabGenres;

            // Rafraichit affichage
            refraichirAfficageGenres();
        });
    });



</script>

</body>
</html>
