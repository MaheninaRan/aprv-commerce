<style>
   .titre{
        color: #00B074;
        font-size: 20px;
        font-style: italic;
        text-align: center;
    }
  .service{
      background-color: white;
      border-radius: 20px;
      margin-top: 10%;
      cursor: pointer;
  }
  .service h2{
    color: #00B074;
    font-size: 20px;
    font-style: italic;
  }
  .service b{
    font-size: 16px;
    font-weight: bold;
  }
  .service button{
    background-color: #00B074;
    border: none;
    border-radius:0px 0px 10px 10px;
    color: white;
    font-size: 20px;
    font-weight: bold;
  }
  .login{
    background-color: green;
    margin-top: -6%;
    width: 112%;
    margin-left: -6%;
  }
  #close{
    color: white;
    background-color: red;
    text-align: center;
    font-weight: bold;
    font-size: 30px;
    cursor: pointer;
  }
  #password,#email{
    height: 40px;
  }
  .valide{
    width: 50%;
    margin: auto;
  }
  #anarana{
    text-align: center;
    font-size: 25px;
    color: white;
  }
  .valide input{
    background-color: green;
    color: white;
    border: none;
    margin-top: 6%;
    border-radius: 50% 0% 50% 0%;
  }
  .popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: none;
    justify-content: center;
    align-items: center;
  }
  .popup-content {
    background-color: #fff;
    padding: 20px;
    width: 30%;
    border-radius: 10px;
  }
</style>
<div class="container">
<div class="row"><h2 class="titre">Département</h2>  </div>

  <div class="row">
    <?php for ($i=0; $i < count($departement); $i++) {  ?>
        <div class="col-lg-3 service" onclick="loginAdmin(<?= $departement[$i]['id'] ?>)">
          <h2><?= $departement[$i]['anarany'] ?> <i class="fa fa-arrow-right ms-3"></i></h2>
          <p><b>Chef : </b> <?=$departement[$i]['nom'] ?> <?=$departement[$i]['prenom'] ?>  <br>
          <b>Contact : </b> <?=$departement[$i]['contact'] ?> <br>
          <b>Email : </b> <?=$departement[$i]['email'] ?> </p>
          <div class="row"><Button>Login</Button></div>
        </div>
        <div class="col-lg-1"></div>
      <?php } ?> 
      <div class="col-lg-3 service" onclick="loginAdmin(6)">
          <h2>Personnelle <i class="fa fa-arrow-right ms-3"></i></h2>
              Connexion pour personnelle <br>
              Demande utilisation materiel <br>
          </p>
          <div class="row"><Button>Login</Button></div>
        </div>
  </div>

<div id="popup" class="popup">
  <div class="popup-content">
    <div class="row login">
        <div class="col-lg-2"></div>
      <div class="col-lg-7" id="anarana">Votre mot de passe</div>
      <div class="col-lg-1"></div>
      <div class="col-lg-2 close" id="close" onclick="manidy()">X</div>
    </div> <br> 
    <form action="<?= base_url("index.php/Departement/connexionDepartement")?>" method="post">
      <div class="row">
          <div class="col-lg-1"></div>
          <input class="col-lg-10 password" type="password" id="password" placeholder="password" name="mdp"> <br>
      </div> 
      <input type="hidden" name="id" id="idDepartement">
      <div class="row valide">
        <input type="submit" value="connecter">
      </div>
    </form>
  </div>
</div>

<script>
   function loginAdmin(data){
      const connexionAdmin=document.getElementById('popup');
      connexionAdmin.style.cssText="display:flex";
      const idDepartement=document.getElementById('idDepartement');
      idDepartement.value=data;
   }
   function manidy(){
        const connexionAdmin=document.getElementById('popup');
        connexionAdmin.style.cssText="display:none";
    }

</script>	