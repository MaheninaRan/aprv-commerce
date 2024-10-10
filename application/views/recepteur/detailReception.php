
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
    <form action="<?= base_url("index.php/Recepteur/insertReception") ?>" method="post">
            <legend class="text-center">Detail marchandise </legend >
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
                            <th>Quantite</th>
                            <th>Lieu</th>
                            <th>Date</th>
                            <tr>
                                <td><?= $nonlivre[0]['code'] ?> </td>
                                <td> <?= $nonlivre[0]['compte'] ?></td>
                                <td> <?= $nonlivre[0]['quantite'] ?></td>
                                <td><?= $societe[0]['adresse'] ?></td>
                                <td><?= $nonlivre[0]['dateLivraison'] ?></td>
                            </tr>
                        </table>
                       
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-3"></div>
                    <div class="col-lg-5">
                        <table class="table table-bordered">
                            <tr>
                                <td><b>Prix unitaire</b></td>
                                <td><?= number_format( $nonlivre[0]['prixu']) ?> Ar </td>
                            </tr>
                            <tr>
                                <td><b>Prix total quantite</b></td>
                                <td><?= number_format($nonlivre[0]['prixu'] * $nonlivre[0]['quantite']) ?> Ar </td>
                            </tr>
                            <tr>
                                <td><b>Frais livraison</b></td>
                                <td><?= number_format( $nonlivre[0]['fraisLivraison']) ?> Ar</td>

                            </tr>
                            <tr>
                                <td><b>Total final </b></td>
                                <td> <?= number_format( $nonlivre[0]['total']) ?> Ar </td>
                            </tr>
                        </table>
                       
                    </div>
                </div>
                <div class ="row gestion">
                    <p class="text-center">Gestion stock </p>
                                <select name="amortissement" class ="form-control" id="">
                                    <?php for ($i=0; $i < count($amortissement); $i++) { ?>                                    
                                        <option value="<?= $amortissement[$i]['id'] ?>"><?= $amortissement[$i]['nom'] ?></option>
                                    <?php } ?>
                                </select>
                        
                </div>    <br>
                <div class="row">
                    <input type="hidden" name="idlivraison" value="<?= $nonlivre[0]['id'] ?>">
                    <input type="hidden" name="idMarchandises" value="<?= $nonlivre[0]['idarticle'] ?>">
                    <input type="hidden" name="categorie" value="<?= $nonlivre[0]['genre'] ?>">
                    <div class="livraison"><button type="submit">Signer</button></div>
                </div> <br>
            </div>   
        </form>
    </div>
</div>
