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

    #choixAmortissement{
            width: 550px;
            background-color: rgb(216, 255, 194);
            border: 1px solid;
            margin: auto;
            padding: 10px;
            margin-top: 10px;
            display: none;
          
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
        
        .choix{
            background-color: rgb(70, 134, 27);
            text-align: center;
            color: white;
            padding: 10px;
        }
        .choix a{
            color: white;
        }

</style>

<div class="container">
    <div class="row" >
        <div class="col-lg-2"></div>
        <div class="col-lg-3 log" id="amorti"> Amortissement</div>
        <div class="col-lg-2"></div>
        <div class="col-lg-3 log"> <a href="<?= base_url("index.php/Responsable/utilisation") ?>"> Historique </a> </div> 
    </div>

    <div class="row" id="choixAmortissement">
        <legend class="text-center">Choix amortissement</legend>
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-4 choix" > <button onclick="clickMatiere()">Par object</button></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4 choix"><a href="AmortiLineaireDate.html"> Par date </a></div> 
        </div>
    </div>

    <div class="row" id="choixObjet">
        <form class="col-lg-12" action="<?= base_url("index.php/Amortissement/amortiObject") ?>" method="post">
            <legend class="text-center">Choix object </legend> <hr>
            <div class="row"> <div class="col-lg-4">Materiel : </div> 
            <select class="col-lg-6" name="idmarchandises" id="">
                <?php for ($i=0; $i < count($marchandises); $i++) { ?>   
                      <option value="<?= $marchandises[$i]['id'] ?>"><?= $marchandises[$i]['genre'] ?> <?= $marchandises[$i]['article'] ?></option>
                <?php } ?>
            </select>  <br>
            
            <div class="row valider">
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var choixAmortissementDiv = document.getElementById("choixAmortissement");
            var amorti=document.getElementById("amorti");
            amorti.addEventListener('click',function(){
                if(choixAmortissementDiv.style.display=="block"){
                    choixAmortissementDiv.style.display = "none";
                }else{
                    choixAmortissementDiv.style.display = "block";
                }
            });
        });

      
       function clickMatiere(){
            var choixObject = document.getElementById("choixObjet");
            choixObject.style.cssText="display:block";
            var choixAmortissementDiv = document.getElementById("choixAmortissement");
            choixAmortissementDiv.style.display = "none";

       }
       
    </script>

</div>
