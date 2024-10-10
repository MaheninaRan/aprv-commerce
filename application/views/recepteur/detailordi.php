
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

        <legend class="text-center">Detail de la moto</legend >

        <form action="<?= base_url("index.php/Recepteur/insertDetailOrdi") ?>" method="post">


            <div class="row">
                <div class="col-lg-4">
                    Couleur : 
                </div>
                <input class="col-lg-6" type="text" name="couleur" id="">
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-4">
                    Graphe : 
                </div>
                <input class="col-lg-6" type="text" name="graphe" id="">
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-4">
                    RAM : 
                </div>
                <input class="col-lg-6" type="text" name="ram" id="">
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-4">
                    Système d'exploitation : 
                </div>
                <input class="col-lg-6" type="text" name="systemeexploitation" id="">
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-4">
                    Processeur : 
                </div>
                <input class="col-lg-6" type="text" name="processeur" id="">
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-4">
                    Mémoire : 
                </div>
                <input class="col-lg-6" type="text" name="memoire" id="">
            </div>
            <br/>

            <div class="row">
                <div class="col-lg-4">
                    Ecran : 
                </div>
                <input class="col-lg-6" type="text" name="ecran" id="">
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
