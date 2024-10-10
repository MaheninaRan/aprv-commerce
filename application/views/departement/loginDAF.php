
<style>
    .titre{
        color: #00B074;
        font-size: 20px;
        font-style: italic;
        text-align: center;
        margin-top: 2%;
    }
    legend{
       text-align: center; 
       font-family: 'Times New Roman', Times, serif;
    }
    form{
        margin-top: 10%;
        margin: auto;
        border-radius: 0px 0px 100px 0px;
    }
    button{
        margin-left: 30%;
        width: 200px;
        border: none;
        background-color: white;
        box-shadow: 2px 2px 8px 0px;
        border-radius: 30% 5px 30% 5px;
    }
</style>
<div class="container">
    <div class="row"><h2 class="titre">Chef financier</h2>  </div> <br><br>
    <div class="row"> 
        <form class="col-lg-6" action="<?= base_url("index.php/Chef/loginDAF") ?>" method="post">
            <legend>Login</legend> <hr>
            <div class="row"> <div class="col-lg-4">Email : </div> <input class="col-lg-6" type="email" name="email" value="Mahenina@gmail.com" id=""></div> <br>
            <div class="row"> <div class="col-lg-4">Password : </div><input class="col-lg-6" name="password" type="password" value="123456"></div> <br>
            <button type="submit">Connecter</button>
        </form>
    </div>
</div>