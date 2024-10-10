<style>
    .container{
        margin-top: 13%;
    }
    .log{
        text-align: center;
        padding: 3%;
        font-size: 30px;
        border-top: 5px solid green;
        border-left: 5px solid green;
        border-right: 5px solid green;
        box-shadow: 2px 2px 2px -5px;
        border-radius: 10px 100px 2px 50%;
        color: green;
        font-weight: bold;
        cursor: pointer;
    }
    
    #choixObjet{
            width: 500px;
            background-color: rgb(216, 255, 194);
            border: 1px solid;
            margin: auto;
            display: none;
        }
        #choixObjet select{
            height: 30px;
        }
        .lab{
            font-size: 17px;
        }
        .valider{
            width: 120px;
            margin: auto;
            margin-top: 40px;
        }
        button{
            background-color: green;
            color: white;
        }
</style>

<div class="container">
    <div class="row" >
        <div class="col-lg-3 log"> <a href="<?= base_url("index.php/Materiel/utilisation") ?>"> Utilisation </a></div>
        <div class="col-lg-3 log"> <a href="<?= base_url("index.php/Materiel/suivie") ?>"> Suivie </a> </div> 
        <div class="col-lg-3 log"><a href="<?= base_url("index.php/Materiel/maintenance") ?>"> Maintenance </a></div>

        <div class="col-lg-3 log"><button onclick="clickMatiere()">Historique</button></div>
    </div>

    <div class="row" id="choixObjet"> 
        <form class="col-lg-12" action="<?= base_url("index.php/Materiel/ListS") ?>" method="post">
            <legend class="text-center">Choix object </legend> <hr>
            <div class="row"> <div class="col-lg-4">Materiel : </div> 
            <select class="col-lg-6" name="materiel" id="">
                <?php for ($i=0; $i < count($marchandises); $i++) { ?>   
                      <option value="<?= $marchandises[$i]['id'] ?>"><?= $marchandises[$i]['genre'] ?><?= $marchandises[$i]['article'] ?></option>
                <?php } ?>
            </select>  <br>
            <div class="row valider">
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>
    <script>
         function clickMatiere(){
            var choixObject = document.getElementById("choixObjet");
            choixObject.style.cssText="display:block";
            var choixAmortissementDiv = document.getElementById("choixAmortissement");
            choixAmortissementDiv.style.display = "none";

       }
    </script>
</div>

