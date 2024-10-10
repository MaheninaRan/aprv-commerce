<style>
    a{
        color: inherit;
    }
    a:hover{
        color: white;
    }
    .barre{
        margin-top: 2%;
        background-color: white;
        color: green;
        font-size: 20px;
        text-align: center;
    }
    .barre .col-lg-4:hover{
        background-color: #00B074;
        color: white;
    }
    .col-lg-3 p{
        margin-top: 7%;
    }
    .titre{
        color: #00B074;
        font-size: 20px;
        font-style: italic;
        text-align: center;
        margin-top: 2%;
    }
    .demande{
        background-color: white;
    }
    .demande .col-lg-3{
        text-align: center;
        border-right: 1px solid green;
        font-family: 'Times New Roman', Times, serif;
        font-size: 20px;
        font-weight: bold;
    }
    .departement{
        text-align: center;
    }
    .date{
        text-align: center;
    }

    .voir{
        color: #00B074;
        text-align: center;
    }
    .voir:hover{
        font-size: 20px;
        color: #00B074;
        margin-top: -4%;
    }
</style>
<div class="container">
    <div class="row"><h2 class="titre">Liste commande a faire</h2>  </div> <br><br>
   <?php
$currentNum = null;

for ($i = 0; $i < count($resultats); $i++) {
    $row = $resultats[$i];

    // Vérifier si le numéro a changé
    echo '<div class="row demande">';
        if ($i == 0 || $resultats[$i]['num'] !== $resultats[$i - 1]['num']) {
            // Ouvrir une nouvelle balise h2 avec le nouveau numéro
            echo '<h2>Numéro ' . $row['num'] . '</h2>';
            // Afficher la partie commune à tous les articles d'un même numéro
            echo '<div class="col-lg-3"><p>' . $row['anarany'] . '</p></div>';
            echo '<div class="col-lg-9">';
            echo '<div class="row date"><b>' . $row['dateEnvoie'] . '</b></div><br>';
        }

        // Afficher les articles
        echo '<div class="row">';
        echo '<div class="col-lg-8">' . $row['article'] . ' : ' . $row['quantite'] . '..................................................' . $row['dateBesoin'] . '</div>';
        echo '</div>';

        // Vérifier si c'est le dernier article du numéro
        $isLastArticle = ($i == count($resultats) - 1 || $resultats[$i]['num'] !== $resultats[$i + 1]['num']);

        if ($isLastArticle) {
            // Afficher le lien "Voir le proforma"
            echo '<div class="col-lg-4">';
            $idNum=$row['num'];
            echo '<h6 class="voir"><a class="voir" href="' . base_url("index.php/Chef/proformaDetail?num=$idNum") . '"> Voir le proforma</a></h6>';
            echo '</div>';
            echo '</div>'; // Fermer la dernière div de la row
            echo '</div>'; // Fermer la div col-lg-9
            echo '</div>'; // Fermer la div demande
        echo '<br>';
    }
}
?>

</div>