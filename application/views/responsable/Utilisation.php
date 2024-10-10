
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
        <form class="col-lg-6" action="<?= base_url("index.php/Materiel/insertData") ?>" method="post" > <br> <br> <br>
            <legend class="text-center">Utilisation d'un matériel</legend> <br>
            <div class="row"> 
                <div class="col-lg-4">Materiel : </div> 
                <select class="col-lg-6" name="materiel" id="">
                    <?php for($i=0; $i< count($marchandises); $i++) { ?>
                            <option value="<?= $marchandises[$i]['id'] ?>">
                                <?= $marchandises[$i]['genre'] ?> <?= $marchandises[$i]['article'] ?>
                            </option>
                    <?php } ?>
                </select>
         
            </div>
            <div class="row"> <div class="col-lg-4">Date utilisation : </div><input class="col-lg-6" name="dates" type="date"></div> <br>
            <div class="row"> 
                <div class="col-lg-4">Lieu : </div> 
                <select class="col-lg-6" name="lieu" id="">
                    <?php for($i=0; $i< count($lieu); $i++) { ?>
                        <option value="<?= $lieu[$i]['lieu'] ?>">
                            <?= $lieu[$i]['lieu'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="row"> 
                <div class="col-lg-4">Etat : </div> 
                <select class="col-lg-6" name="etat" id="">
                        <option value="Neuf">Neuf</option>
                        <option value="Ancien">Ancien</option>
                        <option value="Amoche">Amoche</option>
                </select>
            </div>

            <div class="row"> <div class="col-lg-4">Duree de vie : </div><input class="col-lg-6" name="dure" type="number"></div> <br>
            <div class="row"> <div class="col-lg-4">Description : </div><input class="col-lg-6" name="descri" type="text"></div> <br>
            
                <div class="row"> 
                    <div class="col-lg-4">Personnelle : </div> 
                    <select class="col-lg-6" name="personnelle" id="">
                        <?php for($i=0; $i< count($personnelle); $i++) { ?>
                            <option value="<?= $personnelle[$i]['id'] ?>">
                                <?= $personnelle[$i]['nom'] ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            
            <div class="row valider">
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>
</div>