
<style>
    .container{
        width: 95%;
    }
    .valider{
        margin: auto;
        width: 150px;
    }
    [class*="col"]{ 
        margin-bottom: 20px ; 
    }
    img{width : 100%;}
    .titre{
        color: #00B074;
        font-size: 20px;
        font-style: italic;
        text-align: center;
        margin-top: 2%;
    }
</style>
<div class="container">
    <div class="row"> 
    <div class="row"><h2 class="titre">Utilisation du matériel</h2>  </div>

        <div class="col-lg-3"></div>
        <form class="col-lg-6" action="<?= base_url("index.php/Materiel/insertM1") ?>" method="post" > <br> <br> <br>
            <legend class="text-center">Enregistrement maintenance d'un matériel</legend> <br>
            <div class="row"> 
                <div class="col-lg-4">Materiel : </div> 
                <select class="col-lg-6" name="idmaintenance" id="">
                    <?php for($i=0; $i< count($maintenance_materielByCategorie); $i++) { ?>
                            <option value="<?= $maintenance_materielByCategorie[$i]['id'] ?>">
                            <?= $maintenance_materielByCategorie[$i]['nom'] ?>
                            </option>
                    <?php } ?>
                </select>
         
            </div>
            <div class="row"> <div class="col-lg-4">Prix : </div><input class="col-lg-6" name="prix" type="number"></div> <br>
            
               
            
            <div class="row valider">
                <input type="hidden" name="idmarchandises" value="<?= $idmarchandise ?>">
                <input type="hidden" name="idreception" value="<?= $idreception ?>">
                <input type="hidden" name="dates" value="<?= $dates ?>">
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>
</div>