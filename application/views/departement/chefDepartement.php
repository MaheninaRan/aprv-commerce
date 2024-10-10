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
    .valider{
        text-align: center;
        background-color: blue;
        color: white;
        font-weight: bolder;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        border-radius: 5px;
    }
    .refuser{
        text-align: center;
        background-color: red;
        color: white;
        font-weight: bolder;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        border-radius: 5px;
    }
</style>
<div class="container">
    <div class="row"><h2 class="titre">Demande</h2>  </div> <br><br>

    <?php for ($i=0; $i < count($resultats); $i++) { 
        $row=$resultats[$i];
        ?>
        <div class="row demande">
            <div class="col-lg-3"><p><?= $row['anarany'] ?></p></div>
            <div class="col-lg-9 "> 
                <div class="row date"><b><?= $row['dateEnvoie'] ?></b></div> <br>
                <div class="row">
                <?php  if ($i == 0 || $resultats[$i]['num'] !== $resultats[$i - 1]['num']) { 
                    echo '<h2>Numéro ' . $row['num'] . '</h2>';
                     ?>
                    <?php } ?>
                    <div class="col-lg-8"> 
                        <div class="row">
                            <div class="col-lg-2"><?= $row['article'] ?></div> 
                            <div class="col-lg-6"><?= $row['quantite'] ?></div>
                            <div class="col-lg-4"><?= $row['dateBesoin'] ?></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <?php $idBesoin=$row['id'] ?>
                        <div class="row">
                            <div class="col-lg-5 valider"><a href="<?= base_url("index.php/Chef/approuver?idBesoin=$idBesoin") ?>"> Approuver </a></div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-5 refuser"><a href="<?= base_url("index.php/Chef/rejeter?idBesoin=$idBesoin") ?>">Refuser </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <br>
    <?php } ?>
</div>