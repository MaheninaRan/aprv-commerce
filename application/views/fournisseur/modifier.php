<style>

    form{
        margin-top: 10%;
        margin: auto;
    
    }
    .titre h2{
        font-family: 'Times New Roman', Times, serif;
        color: white;
        text-align: center;
    }
    th{
        <?php if ($nom[0]['nom']=="Leader price") { ?>color: red;<?php } ?>
        <?php if ($nom[0]['nom']=="Jumbo score") { ?>color: #c1c100;<?php } ?>
        <?php if ($nom[0]['nom']=="Shop U") { ?>color: blue;<?php } ?>
        background-color: white;
    }
    td{
        background-color: white;
    }
    legend{
        text-align: center;
    }
    .option{
        font-size: 20px;
        text-align: center;
        <?php if ($nom[0]['nom']=="Leader price") { ?>color: red;<?php } ?>
        <?php if ($nom[0]['nom']=="Jumbo score") { ?>color: #c1c100;<?php } ?>
        <?php if ($nom[0]['nom']=="Shop U") { ?>color: blue;<?php } ?>
    }
</style>
<div class="container">
    <div class="row">
        <form class="col-lg-6" action="<?= base_url("index.php/Fournisseur/updateArticle")?>" method="post">
            <legend>Modifier l'article n° <?= $produit[0]['id'] ?></legend> <hr>
            <input type="hidden" name="idProduit" value="<?= $produit[0]['id'] ?>">
            <div class="row"> <div class="col-lg-4">Article : </div><input class="col-lg-6" type="text" name="article" value="<?= $produit[0]['nom'] ?>" id=""></div> <br>
            <div class="row"> <div class="col-lg-4">Prix : </div><input class="col-lg-6" type="number" name="article" value="<?= $produit[0]['prix'] ?>" id=""></div> <br>
            <div class="row"> <div class="col-lg-4">Tva : </div><input class="col-lg-6" type="number" name="article" value="<?= $produit[0]['tva'] ?>" id=""></div> <br>
            <div class="row"> <div class="col-lg-4">Quantité : </div><input class="col-lg-6" name="quantite" type="number" value="<?= $produit[0]['quantite'] ?>"></div> <br>
            <button type="submit">Valider</button>
        </form>    
    </div>
</div>