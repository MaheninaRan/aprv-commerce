<style>
    .titre{
        color: #00B074;
        font-size: 20px;
        font-style: italic;
        text-align: center;
        margin-top: 2%;
    }
    form{
        margin-top: 10%;
        margin: auto;
        border-right: 5px solid #00B074;
        border-radius: 0px 0px 100px 0px;
    }
    legend{
        text-align: center;
    }
    form .col-lg-4{
        font-size: 20px;
        font-family: 'Times New Roman', Times, serif;
    }
    button{
        border: none;
        background-color: white;
        box-shadow: 2px 2px 8px 0px;
        border-radius: 30% 5px 30% 5px;
    }
    th{
        background-color: white;
        color: #00B074;
    }
    tr{
        background-color: white;
    }
</style>

<div class="container" id="container-tout">
    <div class="row">
        <h2 class="titre">Service </h2>
    </div>
    <br><br>
    <div class="row" id="boiteBesoin">
        <form class="col-lg-6" id="form-Besoin" action="<?= base_url("index.php/Chef/demandeUtil") ?>" method="post">
            <legend>Demande d'utilisation </legend>
            <hr>
            <div class="row">
                <div class="col-lg-4">Materiel : </div>
                <select class="col-lg-6" name="marchandise" id="">
                    <?php for ($i=0; $i < count($marchandises); $i++) { ?>
                        <option value="<?= $marchandises[$i]['id'] ?>"> <?= $marchandises[$i]['genre'] ?>  : <?= $marchandises[$i]['article']  ?></option>
                    <?php } ?>
                </select>
            </div> <br>
            <div class="row">
                <div class="col-lg-4">Debut : </div>
                <input class="col-lg-3" name="dateDebut" type="date" id=""> <div class="col-lg-1"></div> <input type="time" class="col-lg-2" name="heureDebut" id="">
            </div> <br>
            <div class="row">
                <div class="col-lg-4">Fin : </div>
                <input class="col-lg-3" name="dateFin" type="date" id=""><div class="col-lg-1"></div> <input class="col-lg-2" type="time" name="heureFin" id="">
            </div> <br>
            <div class="row">
                <div class="col-lg-4">Lieu : </div>
                <input class="col-lg-6" name="lieu" id="">
            </div>
            <div class="row">
                <button>Valider</button>
            </div>
        </form>
    </div>
    <br>
    <br>
</div>

