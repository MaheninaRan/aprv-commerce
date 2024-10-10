<style>
   
    .titre h4{
        color: white;
        text-align: center;
    }
</style>
<section id="test">
<div class="container"> 
<form action="<?= base_url("index.php/Chef/envoyerFinance") ?>" method="post">
    <div class="row"> <br>
        <?php for ($i=0; $i < count($resultats); $i++) { ?>
        <div class="row titre <?= strtolower(str_replace(' ', '', $datafournisseur[$i][0]['nom'])) ?>"><h4 id="fournisseur"><?= $datafournisseur[$i][0]['nom'] ?></h4></div> <br>
        <script>
            var fournisseurs = document.querySelectorAll('.titre');
            fournisseurs.forEach(function (fournisseur) {
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
                <?= $departementSelect[$i]['anarany'] ?><br>
                <?= $departementSelect[$i]['nom'] ?> <?= $departementSelect[$i]['prenom'] ?><br>
                <?= $departementSelect[$i]['contact'] ?><br>
                <?= $departementSelect[$i]['email'] ?><br>
            </p>
        </div>
        <div class="col-lg-6">
            <p style="font-size: 18px;  text-align: right;">
                <?= $datafournisseur[$i][0]['province'] ?><br>
                <?= $datafournisseur[$i][0]['adresse'] ?><br>
                <?= $datafournisseur[$i][0]['email'] ?><br>
                <?= $datafournisseur[$i][0]['phone'] ?><br>
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
                        <td><?= $resultats[$i]['article'] ?></td>
                        <td><?= $resultats[$i]['quantite'] ?></td>
                        <td><?= $resultats[$i]['prix'] ?> AR</td>
                        <td><?= $resultats[$i]['tva'] ?></td>
                        <td><?= $resultats[$i]['prixTva'] ?> Ar</td>
                        <td><?= $resultats[$i]['total'] ?> Ar</td>
                    </tr>
                    <input type="hidden" name="idProforma[]" value="<?= $resultats[$i]['id'] ?>">
                
        </table>
    </div>
    <?php } ?> <br> 
    <div class="row">
        <div class="col-lg-4"></div>
        <?php $idProf=$resultats[0]['id'] ?>
        <div class="col-lg-4 "><button type="submit" style="margin-left: 20%;">Envoyer au finance</button></div>
        <div class="col-lg-4"></div>
    </div>
    </div>
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