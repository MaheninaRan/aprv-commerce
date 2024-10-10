<div class="container">
    <div class="row"> 

            <div class="col-lg-2"></div>
            <div class="col-lg-8 centre">
                <h2 class="text-center"><?= $nonlivre[0]['genre'] ?> : <?= $nonlivre[0]['article'] ?> </h2>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <p>
                            <b>Destinataire : </b> <?= $societe[0]['nom'] ?> <br>
                            <b>Lieu : </b> <?= $societe[0]['lieu'] ?>, <?= $societe[0]['adresse'] ?>  <br>
                            <b>Contact : </b> <?= $societe[0]['contact'] ?> <br> 
                            <b>Responsable : </b> <?= $societe[0]['nomdg'] ?>
                        </p>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4">
                        <p>
                            <b>Founisseur : </b> <?= $nonlivre[0]['fournisseur'] ?> <br>
                            <b>Livreur : </b> <?= $nonlivre[0]['nomlivreur'] ?> <?= $nonlivre[0]['prenomlivreur'] ?> <br>
                            <b>Contact : </b> <?= $nonlivre[0]['contact'] ?>
                        </p>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <table class="table table-bordered">
                            <th>Num compte</th>
                            <th>Compte</th>
                            <th>Prix</th>
                            <th>Date</th>
                            <tr>
                                <td><?= $nonlivre[0]['code'] ?> </td>
                                <td> <?= $nonlivre[0]['compte'] ?></td>
                                <td><?= $nonlivre[0]['prixu'] ?> Ar</td>
                                <td><?= $nonlivre[0]['dateLivraison'] ?></td>
                            </tr>
                        </table>                       
                    </div>
                </div>
                
               
            </div>   


        <br><br>
        <legend class="text-center" style="margin-top: 50px;">Historique suivie </legend> <br>
        <table class="table table-bordered">
            <th>Nom Marchandise</th>
            <th>Nom Personnelle</th>
            <th>Etat</th>
            <th>Description</th>
            <th>Date Suivie</th>
            <th>Lieu</th>
            <?php for($i = 0; $i < count($suivie_v); $i++) { ?>
                <tr>
                    <td><?= $nonlivre[0]['genre']?> <?= $nonlivre[0]['article']?></td>
                    <td><?= $suivie_v[$i]['persnom']?></td>
                    <td><?= $suivie_v[$i]['etat']?></td>
                    <td><?= $suivie_v[$i]['descript']?></td>
                    <td><?= $suivie_v[$i]['datesuivie']?></td>
                    <td><?= $suivie_v[$i]['lieu']?></td>
                </tr>
            <?php } ?>
        </table>

        <legend class="text-center" style="margin-top: 50px;">Historique Maintenance </legend> <br>
        <table class="table table-bordered">
            <th>Date</th>
            <th>Maintenance</th>
            <th>Prix</th>
            <?php for($i = 0; $i < count($v_maintenance); $i++) { ?>
                <tr>
                    <td><?= $v_maintenance[$i]['genre']?><?= $v_maintenance[$i]['article']?></td>
                    <td><?= $v_maintenance[$i]['maintenance']?></td>
                    <td><?= $v_maintenance[$i]['prix']?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>