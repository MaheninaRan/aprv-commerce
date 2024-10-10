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
        <h2 class="titre">Service Informatique</h2>
    </div>
    <br><br>
    <div class="row" id="boiteBesoin">
        <form class="col-lg-6" id="form-Besoin" action="" method="post">
            <legend>Formulaire besoin</legend>
            <hr>
            <div class="row">
                <div class="col-lg-4">Compte : </div>
                <select class="col-lg-6" name="compte" id="">
                    <?php for ($i=0; $i < count($compte); $i++) { ?>
                        <option value="<?= $compte[$i]['id'] ?>"> <?= $compte[$i]['code'] ?>  : <?= $compte[$i]['nom']  ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-4"><button type="button" onclick="changerAction('index.php/Departement/nextBesoin')">Next</button></div>
            </div>
            <br>
        </form>
    </div>
    <br>
    <br>
</div>

<script>
    function changerAction(action) {
        document.getElementById('form-Besoin').action = base_url(action);
        document.getElementById('form-Besoin').submit();
    }

    function base_url(path){
        return 'http://localhost/Projet-Commercial-S5/' + path;
    }
</script>
