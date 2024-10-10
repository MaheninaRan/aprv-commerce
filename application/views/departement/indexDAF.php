<style>
   
    .titre h4{
        color: white;
        text-align: center;
    }
</style>
<div class="container"> 
    
<form action="<?= base_url("index.php/Chef/envoyerFinance") ?>" method="post">
<div class="row">
    <div class="col-lg-4">
        <div class="row"><h3>Compte</h3></div>
       <div class="row"></div> <h4><?= $compte ?> Ar</h4></div>
</div>
<section id="test">
    <div class="row"> <br>
        <?php 
         for ($i=0; $i < count($proforma); $i++) { ?>
        <div class="row titre <?= strtolower(str_replace(' ', '', $fournisseurSelect[$i][0]['nom'])) ?>"><h4 id="fournisseur"><?= $fournisseurSelect[$i][0]['nom'] ?></h4></div> <br>
        <script>
            var fournisseurs = document.querySelectorAll('.titre');
            fournisseurs.forEach(function (fournisseur){
                if (fournisseur.textContent.trim() === "Leader price") {
                    fournisseur.style.cssText = 'background-color: red; margin-top: 4%';
                } else if (fournisseur.textContent.trim() === "Jumbo score") {
                    fournisseur.style.cssText = 'background-color: #c1c100; margin-top: 4%';
                } else if (fournisseur.textContent.trim() === "Shop U") {
                    fournisseur.style.cssText = 'background-color: blue; margin-top: 4%';
                }
            });
        </script>
    <div class="row">
        <div class="col-lg-6">
            <p style="font-size: 18px;">
                <?= $departement[$i][0]['anarany'] ?><br>
                <?= $departement[$i][0]['nom'] ?> <?= $departement[$i][0]['prenom'] ?><br>
                <?= $departement[$i][0]['contact'] ?><br>
                <?= $departement[$i][0]['email'] ?><br>
            </p>
        </div>
        <div class="col-lg-6">
            <p style="font-size: 18px;  text-align: right;">
                <?= $fournisseurSelect[$i][0]['province'] ?><br>
                <?= $fournisseurSelect[$i][0]['adresse'] ?><br>
                <?= $fournisseurSelect[$i][0]['email'] ?><br>
                <?= $fournisseurSelect[$i][0]['phone'] ?><br>
            </p>
        </div>
       
    </div>
    <div class="row">
        <table class="table table-bordered">
            <th>Article</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>% TVA</th>
            <th>Prix TVA</th>
            <th>Total TTC</th>
                    <tr>
                        <td><?= $proforma[$i][0]['article'] ?> :  <?= $proforma[$i][0]['marque'] ?> </td>
                        <td><?= $proforma[$i][0]['quantite'] ?></td>
                        <td><?= number_format($proforma[$i][0]['prix'], 2, ',', ' ') ?> AR</td>
                        <td><?= $proforma[$i][0]['tva'] ?></td>
                        <td><?= number_format($proforma[$i][0]['prixTva'], 2, ',', ' ') ?> Ar</td>
                        <td><?= number_format($proforma[$i][0]['total'], 2, ',', ' ') ?> Ar</td>
                    </tr>                
        </table>
    </div>
    <?php } ?> <br> 
    <div class="row">
        <div class="col-lg-9"></div>
        <div class="col-lg-3">
            <b>Total HT : <?= number_format($prixHT, 2, ',', ' ')  ?> </b>Ar <br>
            <b>Total Tva : <?= number_format($prixTva, 2, ',', ' ')  ?> </b>Ar <br>
            <b>Total achat : <?= number_format($total, 2, ',', ' ') ?> </b> Ar
        </div>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4"><?= $totalLettre ?> Ariary</div>
            <div class="col-lg-4"></div>

        </div>
    </div>
    <div class="html2pdf__page-break"></div>
    </section>
    <div class="row"> 
        <div class="col-lg-4"></div>
        <div class="col-lg-4 "><button type="submit" style="margin-left: 20%;">Envoyer au fournisseur</button></div>
        <div class="col-lg-4"></div>
    </div>
    </div>
    </form>
</div>
<button onclick="exportp()"> export</button>

<script>
        function exportp(){
            var element= document.getElementById('test');
            html2pdf(element);
        }
    </script>