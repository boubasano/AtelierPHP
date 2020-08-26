<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header>
    <h1>
        Liste des genres
    </h1>
    <br>
    <div id="listeGenres">

    </div>

</header>

<?php
?>

<script>
    let tabSeries = [];
    let connexion = fetch('BDD_PDO.php');
    connexion.then(rep => {
        let promiseJson = rep.json();
        promiseJson.then(series => {
            tabSeries = series;
            console.log(tabSeries);

            tabSeries.forEach(element => {
                // je vais créer un élement div qui va stocker les élements que je souhaite afficher
                let madiv = document.createElement("div");

                //je vais injecter mes données stockées dans ma nouvelle div grace à innerHTML
                madiv.innerHTML = element.nom;

                // je vais cibler l'id de mon élement HTML dans lequel je souhaite que l'affichage se passe
                let divGenres = document.querySelector('#listeGenres');

                // a ce niveau je vais mettre mes élements l'un à la suite de l'autre par rapport au parent
                divGenres.appendChild(madiv);
            });
        });
    });


</script>


