
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
        <legend class="text-center">Immobilisation par objet <br> Amortissement linéaire</legend>
        <p>
            <b><?= $marchandises[0]['genre'] ?> : <?= $marchandises[0]['article'] ?></b> <br>
            <b>Compte : </b> <?= $marchandises[0]['code'] ?>-<?= $marchandises[0]['compte'] ?> <br>
            <b>Date arrivé : </b> <?= $marchandises[0]['dateLivraison'] ?> <br>
            <b>Date utilisation : </b> <?= $utilisation[0]['date'] ?> <br>  
            <b>Durée de vie : </b> <?= $utilisation[0]['dureedevie'] ?> ans  <br>
            <b>Valeur brut : </b> <?= $marchandises[0]['prixu'] ?> Ar <br> 
            <b>Taux amortissement : </b> <?= $utilisation[0]['tauxAmorti'] ?> % <br> 
            <?php
                $calculAmorti=($marchandises[0]['prixu'] )* ( $diffDate->days  /365)  * ( ($utilisation[0]['tauxAmorti']/100 ) );
                $calculAmortiFormate = number_format($calculAmorti, 2);
                $annee = date("Y", strtotime($utilisation[0]['date']));
                $calculLineaire =  ($marchandises[0]['prixu']  * $utilisation[0]['tauxAmorti']/100) ;
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
                <td><?= ($marchandises[0]['prixu']) ?> * (<?= $diffDate->days ?> /365)  * <?= $utilisation[0]['tauxAmorti'] ?> % </td>
                <td><?= $calculAmortiFormate  ?> </td>
                <td><?= $calculAmortiFormate ?> Ar </td>
                <td><?= ($marchandises[0]['prixu'] -$calculAmortiFormate) ?> Ar</td>
                
            </tr>
            <?php  $valeurFinPeriodePrecedente = ($marchandises[0]['prixu']);
                $calAncient=($marchandises[0]['prixu']  * $utilisation[0]['tauxAmorti']/100);
             for ($i=0; $i < $utilisation[0]['dureedevie']; $i++) {  ?>
            <tr>
            
                <td><?= $annee+1 + $i ?></td>
                <td><?= ($marchandises[0]['prixu']) ?> * <?= $utilisation[0]['tauxAmorti'] ?> % </td>
                <td><?= $calculLineaire ?></td>
                <td><?= $calAncient += $calculLineaire ?> Ar </td>
                <td><?= ($valeurFinPeriodePrecedente -= $calculLineaire) ?> Ar</td>
               
            </tr>
            <?php } ?>

        </table>
 <br> <br> <br> <br>
        <legend class="text-center">Amortissement dégressive</legend>
        <?php
        $coeff=0;
            if (3<=$utilisation[0]['dureedevie'] & $utilisation[0]['dureedevie']<=4) {
                $coeff=1.25;
            }if (5<=$utilisation[0]['dureedevie'] & $utilisation[0]['dureedevie']<=6) {
                $coeff=1.75;
            }if (6<=$utilisation[0]['dureedevie']) {
                $coeff=2.25;
            }
        $tauxAmortiDegressif=$utilisation[0]['tauxAmorti']*$coeff;
        $annuitéDegressif=$tauxAmortiDegressif*$marchandises[0]['prixu'];  
        $amortissementDegressif=($tauxAmortiDegressif/100) *$marchandises[0]['prixu']* ($diffDate->m/12);
        $calAmortiDegressif=$marchandises[0]['prixu']-$amortissementDegressif;
        $valeurTab1=$marchandises[0]['prixu']-$amortissementDegressif;
        $prix = $marchandises[0]['prixu'];
       
        ?>
        <p>
            <b>Coefficient : </b> <?= $coeff ?> <br> 
            <b>Taux amortissement : </b> <?= $tauxAmortiDegressif ?> % <br> 
        </p>
        <table class="table table-bordered">
            
            <th>Année</th>
            <th>Valeur</th>
            <th>Amortissement degressive</th>
            <tr>
                <td>Debut</td>
                <td><?= number_format($marchandises[0]['prixu']) ?></td>
                <td>0</td>
            </tr>
           <?php 
                            
            for ($i = 0; $i < $utilisation[0]['dureedevie']; $i++) {
                $calcul = ($tauxAmortiDegressif/100) *$marchandises[0]['prixu']* ($diffDate->m/12);
                $newValeur = $prix - $calcul;
                $calculHafa = $newValeur * ($tauxAmortiDegressif/100);
                if ($newValeur < 0) {
                    // Si $newValeur devient négatif, sortir de la boucle
                    break;
                }
           ?>
           <tr>

                <td><?= $annee+$i ?></td>
                <td><?= number_format($newValeur)  ?></td>
                <td><?= number_format($i === 0 ? $calcul : $calculHafa) ?></td>
           </tr>
           <?php  
                $prix = $newValeur;
            }
           ?> 
        </table>

        



    </div>
</div>
