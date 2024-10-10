
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
    [class*="col"]{ 
        margin-bottom: 20px ; 
    }
    img{width : 100%;}
    p{
        font-family: monospace;
    }
    b{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 12px;
    }
</style>
<div class="container">
    <div class="row"> 
        <legend class="text-center">Immobilisation par objet</legend>
        <p>
            <b><?= $marchandises[0]['genre'] ?> : <?= $marchandises[0]['article'] ?></b> <br>
            <b>Compte : </b> <?= $marchandises[0]['code'] ?>-<?= $marchandises[0]['compte'] ?> <br>
            <b>Date arrivé : </b> <?= $marchandises[0]['dateLivraison'] ?> <br>
            <b>Date utilisation : </b> <?= $utilisation[0]['date'] ?> <br>  
            <b>Durée de vie : </b> <?= $utilisation[0]['dureedevie'] ?> ans  <br>
            <b>Valeur brut : </b> <?= $marchandises[0]['prixu'] ?> Ar <br> 
            <b>Amortissement : </b> <?= $amortissement ?> <br>
            <b>Taux amortissement : </b> <?= $utilisation[0]['tauxAmorti'] ?> % <br> 
            <?php
                $calculAmorti=($marchandises[0]['prix'] )* ( $diffDate->days  /365)  * ( ($utilisation[0]['tauxAmorti']/100 ) );
                $calculAmortiFormate = number_format($calculAmorti, 2);
                $annee = date("Y", strtotime($utilisation[0]['date']));
                $calculLineaire =  ($marchandises[0]['prix']  * $utilisation[0]['tauxAmorti']/100) ;
            ?>
        </p> <br>
        <table class="table table-bordered">
            <th>Année</th>
            <th>Calcul amortissement</th>
            <th>Dotation</th>
            <th>Montant amortissement</th>
            <th>valeur fin periode</th>
            <tr>
                <td><?= $annee ?></td>
                <td><?= ($marchandises[0]['prix']) ?> * (<?= $diffDate->days ?> /365)  * <?= $utilisation[0]['tauxAmorti'] ?> % </td>
                <td><?= $calculAmortiFormate  ?> </td>
                <td><?= $calculAmortiFormate ?> Ar </td>
                <td><?= ($marchandises[0]['prix'] -$calculAmortiFormate) ?> Ar</td>
                
            </tr>
            <?php  $valeurFinPeriodePrecedente = $marchandises[0]['prix'];
                $calAncient=$calculAmorti+($marchandises[0]['prix']  * $utilisation[0]['tauxAmorti']/100);
             for ($i=0; $i < $utilisation[0]['dureedevie']; $i++) {  ?>
            <tr>
                <td><?= $annee+1 + $i ?></td>
                <td><?= ($marchandises[0]['prix']) ?> * <?= $utilisation[0]['tauxAmorti'] ?> % </td>
                <td><?= $calculLineaire ?></td>
                <td><?= $calAncient += $calculLineaire ?> Ar </td>
                <td><?= ($valeurFinPeriodePrecedente -= $calculLineaire) ?> Ar</td>
            </tr>
            <?php } ?>

        </table>
    </div>
</div>
