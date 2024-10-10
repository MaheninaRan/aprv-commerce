<style>
    .facture{
        background-color: white;
        width: 57%;
        margin: auto;
    }
    #total{
        width: 40%;
        margin-left: 60%;
    }
</style>
<script src="<?= base_url("asset/html2pdf.bundle.js") ?>"></script>
<form action="<?= base_url("index.php/Fournisseur/livraison") ?>" method="post">
<div class="container">
    <div class="row facture">
    <section id="facture">
    
        <h4 class="text-center">Facture achat</h4>
        <div class="row">
            <div class="col-lg-5">
                <p><?= $nom[0]['nom'] ?> <br>
                    <?= $nom[0]['province'] ?> <br>
                    <?= $nom[0]['adresse'] ?> <br>
                    <?= $nom[0]['phone'] ?> <br>
                    <?= $nom[0]['email'] ?> <br>
                </p>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5"> 
                <div class="row">
                    <b style="text-align: center;"><i>Livraison</i></b>
                </div>  
                    Date : <?= $dateLivraison ?> à <?= $heureLivraison ?><br>
                    Livreur : <?= $livreur[0]['email'] ?> <br>
                    <?= $livreur[0]['contact'] ?>
            </div>
        </div>
        
        <hr style="width: 50%; margin:auto"> <br>
        <div class="row">
            <h6 class="col-lg-1">Client  </h6>
            <div class="col-lg-4">
                <p><?= $societe[0]['nom'] ?> <br>
                    <?= $societe[0]['lieu'] ?> <br>
                    <?= $societe[0]['adresse'] ?> <br>
                    <?= $societe[0]['contact'] ?> <br>
                </p>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <p>Num facture : <?= $numFacture ?> <br>
                   Date facturation : 11-12-2023 à 10h:30
                </p>
            </div>
        </div> <br>
        <div class="row">
       
            <table class="table table-border">
                <th>Article</th>
                <th>Quantité</th>
                <th>Prix Unitaire</th>
                <th>%TVA</th>
                <th>Prix TVA</th>
                <th>Prix avec TVA</th>
                <th>Total TTC</th>
                
                <?php $totalGeneral=0;
                      $totalPrixHT=0;
                 for ($i=0;$i<count($dataArticle);$i++){       
                    $nomArticle = $detailArticle[$i][0]['genre'];
                    $quantite = $dataArticle[$i]['quantite'];
                    $prixUnitaire = $detailArticle[$i][0]['prix'];
                    $tva = $detailArticle[$i][0]['tva'];
                    $montantTva = $prixUnitaire * ($tva / 100);
                    $prixTtc = $montantTva + $prixUnitaire;
                    $montantTotal = $prixTtc * $quantite;
                    $totalGeneral += $montantTotal;
                    $prixHT=$prixUnitaire*$quantite;
                    $totalPrixHT += $prixHT;
                    ?>
                    <tr>
                        <td><?= $nomArticle ?> <?= $detailArticle[$i][0]['article'] ?>  </td>
                        <td><?= $quantite ?></td>
                        <td><?= number_format($prixUnitaire) ?> Ar</td>
                        <td><?= $tva ?></td>
                        <td><?= number_format($montantTva) ?> Ar</td>
                        <td><?= number_format($prixTtc) ?> Ar</td>
                        <td style="background-color: whitesmoke;"><?= number_format($montantTotal) ?> Ar</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="row">
            <?php 
                $totalFinale=$totalGeneral+$fraisLivraison;
            ?>
            <table class="table table-bordered" id="total">
                 <tr>
                    <td><b>Frais livraison</b></td>
                    <td><?=number_format($fraisLivraison)?> Ar</td>
                 </tr>
                 <tr>
                    <td><b>Total HT</b></td>
                    <td><?= number_format($totalPrixHT) ?> Ar</td>
                 </tr>
                 <tr>
                    <td><b>Total général</b></td>
                    <td><?= number_format($totalFinale) ?>Ar </td>
                 </tr>
            </table>
        </div>
        <div class="row">
            <b>Arrêté la présente facture à la somme total : <i><?= $lettre->Conversion($totalFinale) ?> Ariary</i> <br>
               Si vous avez une question ou une remarque contacter nous avec l'adresse ci-dessus 
            </b> 
        </div> <br>
        <div class="row">
            <div class="col-lg-8"></div>
            <div class="col-lg-2"><b> <u>Signiature</u> </b></div>
        </div> <br> <br> <br> <br>
    </div> <br>
    </section>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-3"> 
                <button onclick="exportp()" type="button"> Exporter</button>
        </div>
        <div class="col-lg-4">
                <input type="hidden" name="idLivreur" value="<?= $livreur[0]['id'] ?>">
                <input type="hidden" name="nomLivraison" value="<?= $livreur[0]['nom'] ?>">
                <input type="hidden" name="numFacture" value=" <?= $numFacture ?>">
                <input type="hidden" name="dateLivraison" value="<?= $dateLivraison ?>">
                <input type="hidden" name="heureLivraison" value="<?= $heureLivraison ?>">
                <input type="hidden" name="fraisLivraison" value="<?= $fraisLivraison ?>">
                <button type="submit">Faire livrer</button>
        </div>
        
    </div>
</div>
</form>

<script>
        function exportp(){
            var element= document.getElementById('facture');
            html2pdf(element);
        }
    </script>