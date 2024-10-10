<style>
    th{
        <?php if ($nom[0]['nom']=="Leader price") { ?>color: red;<?php } ?>
        <?php if ($nom[0]['nom']=="Jumbo score") { ?>color: #c1c100;<?php } ?>
        <?php if ($nom[0]['nom']=="Shop U") { ?>color: blue;<?php } ?>
        background-color: white;
    }
    td{
        background-color: white;
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
        <table class="table table-bordered">
            <th>Article</th>
            <th>Prix</th>
            <th>TVA</th>
            <th>Quantité</th>
            <th>Otpion</th>
            <?php for ($i=0; $i < count($produit); $i++) { 
                $id=$produit[$i]['id'];    
            ?>
            <tr>
                    <td><?= $produit[$i]['genre'] ?> <?= $produit[$i]['article'] ?></td>
                    <td><?= number_format($produit[$i]['prix'], 2, ',', ' ') ?> </td>
                    <td><?= $produit[$i]['tva'] ?>%</td>
                    <td><?=  number_format($produit[$i]['quantite']) ?></td>
                    <td class="option"><a href="<?= basename("index.php/Fournisseur/updateView?id=$id") ?>"><i class="fas fa-cog option"></i></a></td>
                </tr>
            <?php } ?>
            
        </table>
    </div>
</div>