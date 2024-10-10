<style>
    .commande{
        background-color: white;
    }
    table{
        width: 100px;
    }
    th{
        background-color: whitesmoke;
    }
    .fournir{
        background-color: white;
    }
</style>
<?php
    $dataArray=array("qskdl","qsdkjl");
?>

<div class="container">
    <div class="row">

                    <!-- Div gauche : detail commande-->
        <div class="col-lg-5 commande">
            <h4 class="text-center"><i >Detail commande</i></h4> 
            <div class="row">
                <div class="col-lg-6">
                   <p>
                        <i class="fas fa-user-tie"> </i> <?= $societe[0]['nom']?><br> 
                        <i class="fas fa-map-marker-alt"> </i> <?= $societe[0]['lieu']?> <br>
                        <i class="fas fa-home"></i> <?= $societe[0]['adresse']?> <br>
                        <i class="fas fa-phone"></i> <?= $societe[0]['contact']?><br>
                        <?= $societe[0]['email']?><br>
                    </p>
                </div>
                <div class="col-lg-6"> <br>
                    <p>
                        Date commande : <?= $commandes[0]['dateBesoin']?> <br>
                        Date expiration : <?= $commandes[0]['daty']?>
                    </p>
                </div>
            </div> <br>
            <div class="row">
                <table class="table table-bordered" style="width: 65%; margin:auto;">
                    <th>Aritcle</th>
                    <th>Quantite</th>
                    <th>Prix total</th>
                    <?php 
                     $total=0;
                    for ($i=0; $i <count($commandes); $i++) {  
                        $total =$total += $commandes[$i]['total'];
                        ?>
                        <tr>
                            <td><?= $commandes[$i]['article']?> <?= $commandes[$i]['marque']?></td>
                            <td><?= $commandes[$i]['quantite']?></td>
                            <td><?=  number_format( $commandes[$i]['total'])?> Ar</td> 
                        </tr>
                        <?php } ?>
                </table>
            </div> <br>
            <div class="row"><b class="text-center">Total : <?= number_format($total) ?> Ar</b> </div>
            <div class="row"><b class="text-center">=> <?= $lettre->Conversion($total) ?> ariary <=</b> </div>
        </div>

        <div class="col-lg-1"></div>

                <!-- Div droite : fournir les besoins-->
        <div class="col-lg-5 fournir">
            <form action="<?= base_url("index.php/Fournisseur/passerfacture") ?>" method="post">
                <h4 class="text-center"><i>Fournir les besoin</i></h4>  <br>
                <input type="hidden" name="idAcheteur" value="<?= 1 ?>">
                <div class="row">
                    <div class="col-lg-3">Date livraison :  </div> <input type="date" class="col-lg-3" name="dateLivraison"><div class="col-lg-1"></div> <input type="time" class="col-lg-3" name="heureLivraison">            
                </div> <br>
                <div class="row">
                    <div class="col-lg-3 col-xs-3">Livreur</div>
                    <select name="livreur" style="height: 25px;" class="col-lg-6 col-xs-6" id="">
                        <?php for ($i=0; $i < count($livreur); $i++) { ?>
                            <option value="<?= $livreur[$i]['id'] ?>" ><?= $livreur[$i]['nom'] ?> <?= $livreur[$i]['prenom'] ?> </option>
                        <?php }?>
                    </select>
                </div> <br>
                <div class="row">
                    <div class="col-lg-3">Frais livraison :  </div> <input type="number" min="0" class="col-lg-6" name="fraisLivraison">            
                </div> <br>
                <div class="row" id="reponse-container">
                    <div class="col-lg-3 col-xs-3">Article</div>
                    <select name="Article1" style="height: 25px;" class="col-lg-6 col-xs-6" id="">
                        <?php for ($i=0; $i < count($produit); $i++) { ?>
                            <option value="<?= $produit[$i]['id'] ?>" ><?= $produit[$i]['genre'] ?> <?= $produit[$i]['article'] ?></option>
                        <?php }?>
                    </select>           
                    <div class="col-lg-1"></div>
                    <input type="number" class="col-lg-2 col-xs-2" name="Quantite1">
                </div> <br>
                <input type="hidden" name="sessionGet" value="<?= $session ?>">
                <div class="row">
                    <div class="col-lg-3 col-xs-3"></div>
                    <div class="col-lg-4 col-xs-4"><Button type="button" onclick="ajouterArticle()">Autre article</Button></div>
                    <div class="col-lg-4 col-xs-4"><Button type="submit">Valider besoin</Button></div>
                </div>
            </form>
        </div>

    </div>
</div>

<?php 
    $teste=array("teste1","teste2");
?>
<script>    
let rps =1;
function ajouterArticle(){
    rps++;
    let testeArray = <?php echo json_encode($produit); ?>;
    const container=document.getElementById('reponse-container');
    const div = document.createElement('div');
    div.style.cssText=container.firstChild;
    div.classList.add('row');
    const selectArticle=document.createElement('select');
    selectArticle.name='Article' + rps;
    selectArticle.style.cssText='margin-left:26%; width:52%; margin-top:2%';
    
    for (let index = 0; index < testeArray.length; index++) {
        const article = document.createElement('option');
        article.textContent = testeArray[index]['nom'];
        article.value = testeArray[index]['id'];
        selectArticle.appendChild(article);
    }
    

    const inputNumber=document.createElement('input');
    inputNumber.type='number';
    inputNumber.name='Quantite' + rps; 
    inputNumber.style.cssText='margin-left:6%;margin-top:2%; width:16%; height :25px';
    inputNumber.placeholder = 'Quantite' + rps;

    div.appendChild(selectArticle);
    div.appendChild(inputNumber);
    container.appendChild(div);
}   
</script>