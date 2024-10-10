
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
        <form class="col-lg-6" action="<?= base_url("index.php/Materiel/insertM") ?>" method="post" > <br> <br> <br>
            <legend class="text-center">Enregistrement maintenance d'un matériel</legend> <br>
            <div class="row"> 
                <div class="col-lg-4">Categorie : </div> 
                <select class="col-lg-6" name="materiel" id="">
                    <?php for($i=0; $i< count($marchandises); $i++) { ?>
                            <option value="<?= $marchandises[$i]['idgenre'] ?>">
                                <?= $marchandises[$i]['genre'] ?> 
                            </option>
                    <?php } ?>
                </select>
            </div>
            <div class="row"> 
                <div class="col-lg-4">Materiel : </div> 
                <select class="col-lg-6" name="idreception" id="">
                    <?php for($i=0; $i< count($marchandises); $i++) { ?>
                            <option value="<?= $marchandises[$i]['id'] ?>">
                                <?= $marchandises[$i]['genre'] ?> <?= $marchandises[$i]['article'] ?>
                            </option>
                    <?php } ?>
                </select>
            </div>
            <div class="row"> <div class="col-lg-4">Date : </div><input class="col-lg-6" name="dates" type="date"></div> <br>
            
               
            
            <div class="row valider">
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>
</div>