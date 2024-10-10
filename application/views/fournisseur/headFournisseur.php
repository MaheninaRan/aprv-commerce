<style>

    nav{
        <?php if ($nom[0]['nom']=="Leader price") { ?>background-color: red;<?php } ?>
        <?php if ($nom[0]['nom']=="Jumbo score") { ?>background-color: #c1c100;<?php } ?>
        <?php if ($nom[0]['nom']=="Shop U") { ?>background-color: blue;<?php } ?>
    }
    nav a{
        color: white;
    }
    .nomFournisseur{
        color: white;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Gestion</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('assets/lib/animate/animate.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('css/all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/all.css') ?>">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <script src="<?= base_url("asset/html2pdf.bundle.js") ?>"></script>

</head>
    <?php $fournisseur=$nom[0]['nom']; ?>

<body>
<nav class="navbar navbar-expand-lg navbar-light shadow sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="nomFournisseur"><?= $nom[0]['nom'] ?></h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="<?= base_url("index.php/Fournisseur/article?id=$fournisseur")?>" class="nav-item nav-link" style="color:white">Article</a>
            <a href="<?= base_url("index.php/Fournisseur/commande?id=$fournisseur")?>" class="nav-item nav-link" style="color:white">Commande</a>
            <a href="<?= base_url("index.php/Fournisseur/ajoutArticle?id=$fournisseur") ?>" class="nav-item nav-link" style="color:white">Ajouter article</a>
        </div>
            <a href="<?= base_url("index.php/Welcome/deconnexion") ?>" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block"><div class="logo">Deconnexion</div></a>    
        
    </div>
</nav>
</body> <br> <br>

<style>
    .logo{
        font-size: 25px;
        margin-top: -10px;
        <?php if ($nom[0]['nom']=="Leader price") { ?>color: red;<?php } ?>
        <?php if ($nom[0]['nom']=="Jumbo score") { ?>color: #c1c100;<?php } ?>
        <?php if ($nom[0]['nom']=="Shop U") { ?>color: blue;<?php } ?>
    }
    .btn-primary{
        background-color: white;
        color: red;
    }
    .btn-primary:hover{
        background-color: white;
        
    }
</style>