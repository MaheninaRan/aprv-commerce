<!--Tato NIOVA  -->
<style>

    .commande{
        background-color: white;
        width: 80%;
        margin: auto;
    }
    .numero{
        border-right: 3px solid;
        background-color: whitesmoke;
    }
    .commande p{
        font-size: 20px;
    }
</style>
<div class="container">
   
    <div class="row"> <h2 class="text-center">Tous les commandes</h2> </div>
    <?php for ($i=0; $i < count($distinctDate); $i++) {        
      $dateCommande=$distinctDate[0]['dateCommande'];
        ?>
        <div class="row commande">
            <div class="row">
                <div class="col-lg-1 numero"><br> <h1 class="text-center"><?= $i+1 ?></h1> </div>
                <div class="col-lg-11">
                    <div class="row" style=" background-color: whitesmoke;"> 
                        <div class="col-lg-10"><h5 class="text-center"><?= $distinctDate[0]['dateCommande'] ?> <?= $distinctDate[0]['nom'] ?> </h5></div>
                        <div class="col-lg-2"><a href="<?= base_url("index.php/Fournisseur/fournir?dateCommande=$dateCommande") ?>"><button><h6>Fournir</h6></button></a></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">  
                            <?php for ($j=0; $j <count($commandes) ; $j++) {  ?>
                                <p><?=$commandes[$j]['article']?> <br></p> 
                            <?php } ?> 
                        </div> 
                        <div class="col-lg-2"></div>
                        <div class="col-lg-3">  
                            <?php for ($j=0; $j <count($commandes) ; $j++) {  ?>
                                <p> <?=$commandes[$j]['quantite'] ?><br></p> 
                            <?php } ?> 
                        </div>
                        <div class="col-lg-1"></div>
                        
                    </div>
                </div>
            </div>  
        </div> <br>
    <?php } ?>
    
</div>