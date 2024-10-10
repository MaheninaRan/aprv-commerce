
<style>
    .container{
        width: 95%;
        margin-top: 10%;    
    }
    .divInput{
        background-image: url(Teste.jpg);   
        text-align: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-position-x: right;
        background-position-y: bottom;
    }   
    .liste{
        border: 1px solid;
    }
</style>
<div class="container">
    <div class="row"> 
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
        <?php for ($i=0; $i < count($nonlivre); $i++) {  $idSend =$nonlivre[$i]['id']   ?>
          
            <div class="row liste">

                    <a href="<?= base_url("index.php/Recepteur/detailReception?idSend=$idSend") ?>">
                       
                    <div class="col-lg-4"> <h3 class="text-center"><?= $nonlivre[$i]['genre'] ?> : <?= $nonlivre[$i]['article'] ?></h3>  </div>
                    <div class="col-lg-9"> 
                        <b><?= $nonlivre[$i]['compte'] ?></b>
                         <p> <b>Date : </b> <?= $nonlivre[$i]['dateLivraison'] ?> <?= $nonlivre[$i]['heure'] ?> </p>
                         <p><b>Quantite :  <?= $nonlivre[$i]['quantite'] ?></b></p>
                         <p><b>Frais : </b><?= $nonlivre[$i]['fraisLivraison'] ?></p>
                         <p><b>Total : </b> <?= $nonlivre[$i]['total'] ?></p>
                    </div>
            </div>
                    </a>
        <?php } ?>
            

        </div>
    </div>
</div>
