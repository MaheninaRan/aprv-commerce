<style>
    .row{
        background-color: white;
        width: 50%;
        margin: auto;
    }
    .button{
        width: 30%;
        margin: auto;
    }
</style>
<div class="container">
    <div class="row">
        <form action="<?= base_url("index.php/Fournisseur/ajouterproduit") ?>" method="post">
                <legend class="text-center">Nouvelle Article</legend> <hr>
                <div class="row"> <div class="col-lg-4">Article : </div>
                    <input type="text" name="nom" class="col-lg-6">
                </div> <br>
                <div class="row"> <div class="col-lg-4">Prix : </div>
                    <input type="number" name="prix" class="col-lg-6">
                </div> <br>
                <div class="row"> <div class="col-lg-4">TVA : </div>
                    <input type="number" name="tva" class="col-lg-6">
                </div> <br>
                <div class="row"> <div class="col-lg-4">Quantite : </div>
                    <input type="number" name="tva" class="col-lg-6">
                </div> <br>
           <div class="row button">
                <button type="submit">Envoyer</button>
           </div> 
        </form>
    </div>
</div>