<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<span>
<button class="favorite styled"
        type="button"
        onclick="fonctionAsync(1);">
    Les dernières 24h
</button>
</span>

<span>
<button class="favorite styled"
        type="button"
        onclick="fonctionAsync(3);">
    Les 3 derniers jours
</button>
</span>

<span>
<button class="favorite styled"
        type="button"
        onclick="fonctionAsync(7);">
    les 7 derniers jours
</button>
</span>

<span>
<button class="favorite styled"
        type="button"
        onclick="fonctionAsync(31);">
    Le mois entier
</button>
</span>

<canvas id="myChart" width="400" height="400"></canvas>


<script>
    // variable globale qui me permet d'acceder à mes données cryptos
    let liste = [];



    let fonctionAsync = async (nombreJours) => {

        let reponseHttp = await fetch('travail_crypto.php?periode='+nombreJours);
        liste = await reponseHttp.json();

        // Une fois la réponse reçue, tu construis le graphe
        // Map JSON values back to label array

        liste = liste.sort((elementA, elementB) => {
            let varA = parseFloat(elementA.variation_moyenne);
            let varB = parseFloat(elementB.variation_moyenne);
            if (varA > varB) {
                return -1;
            } else if (varA < varB) {
                return 1;
            } else {
                return 0;
            }
        });
        let labels = liste.map(liste => {
            return liste.nom;
        });
        console.log(labels); //

        // Map JSON values back to values array
        let values = liste.map(liste => {
            return parseFloat(liste.variation_moyenne);
        });
        console.log(values); //


        buildChart(labels, values);
    };

    function buildChart(labels, values) {
        let backgroundColors = liste.map( elem => genereCouleur() );
        let content = document.querySelector("#myChart").getContext('2d');
        let myChart = new Chart(content, {

            type: 'bar',
            data: {
                labels: labels, // Our labels
                datasets: [{
                    label: 'Variation',
                    backgroundColor: backgroundColors,
                    borderColor: 'rgb(255, 99, 132)',
                    data: values
                }]
            },
            options: {
                responsive: true, // Instruct chart js to respond nicely.
                maintainAspectRatio: false, // Add to prevent default behavior of full-width/height
            }
        });
        return myChart;
    }



    let genereCouleur = () => {

        let rouge = Math.round(Math.random() * 255);
        let vert = Math.round(Math.random() * 255);
        let bleu = Math.round(Math.random() * 255);

        return `rgb(${rouge},${vert},${bleu})`;
    };


    fonctionAsync(7);


</script>

</body>
</html>