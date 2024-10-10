
<style>
    .container{
        width: 95%;
        margin-top: 5%;
    }
    .centre{
        border:  2px solid;
        border-radius: 10px;    
        margin-left: 200px;
        width: 800px;
    }   
    .centre p{
        font-family: monospace;
        font-size: 16px;
    }
    .centre b{
        font-size: 18px;
    }
    .livraison{
        width: 100px;
        margin: auto;
    }
    hr{
        width: 250px;
        border:1px solid;
        margin-left: 270px;
    }
    .gestion{
        width: 200px;
        margin: auto;
    }
</style>
<div class="container">
    <div class="row"> 
        <form action="<?= base_url("index.php/Recepteur/insertDetailMoto") ?>" method="post">


            <div class="row">
                <div class="col-lg-4">
                    Couleur : 
                </div>
                <input class="col-lg-6" type="text" name="couleur" id="">
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-4">
                    Vinette : 
                </div>
                <input class="col-lg-6" type="date" name="vinette" id="">
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-4">
                    Assurance : 
                </div>
                <input class="col-lg-6" type="date" name="assurance" id="">
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-4">
                    Vidange : 
                </div>
                <input class="col-lg-6" type="date" name="vidange" id="">
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-4">
                    CC : 
                </div>
                <input class="col-lg-6" type="text" name="cc" id="">
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-4">
                    Moteur : 
                </div>
                <input class="col-lg-6" type="text" name="moteur" id="">
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-4">
                    Année de sortie : 
                </div>
                <input class="col-lg-6" type="date" name="anneesortie" id="">
            </div>
            <br/>
            
            <div class="row">
                <input type="hidden" name="idMarchandises" value="<?= $idMarchandise ?>">
                <div class="livraison"><button type="submit">Ajouter</button></div>
            </div>
            <br/>
            
        </form>
    </div>
</div>
