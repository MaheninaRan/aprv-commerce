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
    .leader{
        background-color: white;
    }
    .leaderPrice{
        background-color: red;
        text-align: center;
    }
    .leaderPrice h4{
        color: white;
    }
    .jumbo{
        background-color: white;
    }
    .jumboScore{
        background-color: #c1c100;
        text-align: center;
    }
    .jumboScore h4{
        color: white;
    }
    .shop{
        background-color: white;
    }
    .shopU{
        background-color: blue;
        text-align: center;
    }
    .shopU h4{
        color: white;
    }
    .commande{
        background-color: white;
        width: 30%;
        margin: auto;
        box-shadow: 2px 2px 2px 2px;
        border-radius: 15px 0px 15px 0px;
    }
    .commande h5{
        text-align: center;
    }
</style>
    <script src="<?= base_url("asset/html2pdf.bundle.js") ?>"></script>
<section id="test">
<div class="container">
<?php $verifyNull=0; ?>
    <div class="row"><h2 class="titre">Proforma</h2>  </div> <br><br>
    <form action="<?= base_url("index.php/Chef/getCommande") ?>" method="post">
    <div class="row leader">
        <div class="row leaderPrice"><h4>Leader Price</h4></div> <br>
        <div class="row">
            <?php for ($i=0; $i < count($leader); $i++) { ?>  <br>   
                <?= $leader[$i]['province'] ?> <br>
                <?= $leader[$i]['adresse'] ?> <br>
                <?= $leader[$i]['email'] ?> <br>
                <?= $leader[$i]['phone'] ?> <br>
            <?php } ?> <br>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <th>Article</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>% TVA</th>
                <th>Prix TVA</th>
                <th>Total TTC</th>
                <?php for ($i=0; $i < count($leaderPrice); $i++) { ?>
                    <tr>
                        <td><?= $leaderPrice[$i]['article'] ?> : <?= $leaderPrice[$i]['marque'] ?></td>
                        <td><?= $leaderPrice[$i]['quantite'] ?></td>
                        <td><?= number_format($leaderPrice[$i]['total'], 2, ',', ' ') ?> AR</td>
                        <td><?= $leaderPrice[$i]['tva'] ?></td>
                        <td><?= number_format($leaderPrice[$i]['prixTva'], 2, ',', ' ') ?> Ar</td>
                        <td><?= number_format($leaderPrice[$i]['total'], 2, ',', ' ') ?> Ar</td>
                        <?php if($leaderPrice[$i]['article']!="null") { $verifyNull=1; ?>
                            <input type="hidden" name="article[]" value="<?= $leaderPrice[$i]['article'] ?>">
                        <?php } ?>

                    </tr>
                <?php } ?>
                
            </table>
        </div>
    </div> <br>
    <div class="html2pdf__page-break"></div>
    <div class="row jumbo">
        <div class="row jumboScore"><h4>Jumbo Score</h4></div> <br>
        <div class="row">
            <?php for ($i=0; $i < count($jumbo); $i++) { ?> <br>   
                <?= $jumbo[$i]['province'] ?> <br>
                <?= $jumbo[$i]['adresse'] ?> <br>
                <?= $jumbo[$i]['email'] ?> <br>
                <?= $jumbo[$i]['phone'] ?> <br>
            <?php } ?> <br>
        </div> 
        <div class="row">
            <table class="table table-bordered">
                <th>Article</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>% TVA</th>
                <th>Prix TVA</th>
                <th>Total TTC</th>
                <?php for ($i=0; $i < count($jumboScore); $i++) { ?> 
                    <tr>
                        <td><?= $jumboScore[$i]['article'] ?> : <?= $jumboScore[$i]['marque'] ?></td>
                        <td><?= $jumboScore[$i]['quantite'] ?></td>
                        <td><?= number_format($jumboScore[$i]['prix'], 2, ',', ' ') ?> AR</td>
                        <td><?= $jumboScore[$i]['tva'] ?></td>
                        <td><?= number_format($jumboScore[$i]['prixTva'], 2, ',', ' ') ?> Ar</td>
                        <td><?= number_format($jumboScore[$i]['total'], 2, ',', ' ') ?> Ar</td>
                        <?php if($verifyNull!=1) { $verifyNull=2; ?>
                            <input type="hidden" name="article[]" value="<?= $jumboScore[$i]['article'] ?>">
                        <?php } ?>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div> <br>
    <div class="html2pdf__page-break"></div>
    <div class="row shop">
        <div class="row shopU"><h4>Shop U</h4></div> 
        <div class="row">
            <?php for ($i=0; $i < count($shop); $i++) { ?> <br>  
                <?= $shop[$i]['province'] ?> <br>
                <?= $shop[$i]['adresse'] ?> <br>
                <?= $shop[$i]['email'] ?> <br>
                <?= $shop[$i]['phone'] ?> <br>
            <?php } ?> <br>
        </div> 
        <div class="row">
            <table class="table table-bordered">
                <th>Article</th>
                <th>Quantité</th>
                <th>Prix unitaire</th>
                <th>% TVA</th>
                <th>Prix TVA</th>
                <th>Total TTC</th>
                <?php for ($i=0; $i < count($shopU); $i++) { ?>
                    <tr>
                        <td><?= $shopU[$i]['article'] ?> : <?= $shopU[$i]['marque'] ?></td>
                        <td><?= $shopU[$i]['quantite'] ?></td>
                        <td><?= number_format($shopU[$i]['prix'], 2, ',', ' ') ?> AR</td>
                        <td><?= $shopU[$i]['tva'] ?></td>
                        <td><?= number_format($shopU[$i]['prixTva'], 2, ',', ' ') ?> Ar</td>
                        <td><?= number_format($shopU[$i]['total'], 2, ',', ' ') ?> Ar</td>
                        <?php if($verifyNull==0 ){ $verifyNull=3; ?>
                            <input type="hidden" name="article[]" value="<?= $shopU[$i]['article'] ?>">
                        <?php } ?>  

                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <div class="html2pdf__page-break"></div>

    <br>
    <div class="row commande"><h5><button type="submit"> Generer une commande </button></h5></div> <br>
</form>
</div>
</section>
<button onclick="exportp()"> export</button>
<script>
        function exportp(){
            var element= document.getElementById('test');
            html2pdf(element);
        }
    </script>