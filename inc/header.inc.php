<?php 
require_once "config/init.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Star'Island</title>
    <link rel="stylesheet" href="<?=  BASE_PATH; ?>assets/css/faq.css">
    <link rel="stylesheet" href="<?=  BASE_PATH; ?>assets/css/event.css">
    <link rel="stylesheet" href=" <?=  BASE_PATH; ?>assets/css/vip.css">
    <link rel="stylesheet" href=" <?=  BASE_PATH; ?>assets/css/header.css">
    <link rel="stylesheet" href="<?=  BASE_PATH; ?>assets/css/gallerie.css">
    <link rel="stylesheet" href="<?=  BASE_PATH; ?>assets/css/navDis.css">
    <link rel="stylesheet" href="<?=  BASE_PATH; ?>assets/css/index.css">
    <link rel="stylesheet" href="<?=  BASE_PATH; ?>assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?=  BASE_PATH; ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=  BASE_PATH; ?>assets/css/owl.theme.default.css">
    <link rel="stylesheet" href="<?=  BASE_PATH; ?>assets/css/magnific-popup.css">
    <link href="<?=  BASE_PATH; ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


    <link type="text/css" rel="stylesheet" href="<?=  BASE_PATH; ?>assets/bootstrap/scss/bootstrap.css">
    <link type="text/css" rel="icon" href="<?=  BASE_PATH; ?>assets/upload/starisland.png" type="icon star'island">
    <link rel="stylesheet" type="text/css" href="<?=  BASE_PATH; ?>assets/css/icelandTypo.css">    <script src="<?=  BASE_PATH; ?>assets/js/jqueryPack.js"></script>
    <script type="text/css" src="<?=  BASE_PATH; ?>assets/jquery/jquery.min.js"></script>
    <script type="text/css" src="<?=  BASE_PATH; ?>assets/bootstrap/js/bootstrap.min.js"></script> 
</head>
<body>

<header>
<nav class=" navbar navbar-expand-lg "id="colorNav">
    <div class="container-fluid">
    <a href="<?=  BASE_PATH; ?>"><img id="logoIsland" src="<?=  BASE_PATH; ?>assets/upload/starisland.png" alt=""></a>           
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span id="buttonBurger" class="navbar-toggler-icon">
                <img id="burger" src="<?=  BASE_PATH; ?>assets/upload/noun-menu.png" alt="">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto"id="ulNav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?=  BASE_PATH; ?>">
                        <img src="<?=  BASE_PATH; ?>assets/upload/Vector.png" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?=  BASE_PATH.'gallerie.php/'; ?>">GALLERIE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?=  BASE_PATH.'vip.php/'; ?>">DEVENIR VIP</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link " href="<?=  BASE_PATH.'serveur.php/'; ?>">SERVEUR</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link " href="<?=  BASE_PATH.'event.php/'; ?>">EVENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?=  BASE_PATH.'faq.php/'; ?>">F.A.Q</a>
                </li>
                <?php     if (admin()):           ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ADMIN</a>
                    <div class="dropdown-menu">
                        <a class="nav-link text-dark" href="<?=  BASE_PATH.'back/'; ?>">Back-o</a>
                        <a class="nav-link text-dark" href="<?=  BASE_PATH.'security/register.php'; ?>">register</a>
                        <a class="nav-link text-dark" href="<?=  BASE_PATH.'security/login.php'; ?>">login</a>
                        <a class="nav-link text-dark" href="<?=  BASE_PATH.'back/userList.php'; ?>">Gestion utilisateur</a>
                        <a class="nav-link text-dark" href="#">Another action</a>
                        <a class="nav-link text-dark" href="#">Something else here</a> 
                        
                       
                      

                        <div class="dropdown-divider"></div>
                    </div>
                </li>
                <?php     endif;           ?> 

            </ul>
            <?php     if (connect()):           ?>
            <a href="<?=  BASE_PATH.'?a=dis'; ?>" class="btn btn-primary">Déconnexion</a>
            <?php     else:           ?>
                <div id="outLink">
            <a href="<?=  BASE_PATH.'security/login.php'; ?>"><img src="<?=  BASE_PATH; ?>assets/upload/Bouton tuto.png" alt="logo tutoriel "></a>
            <a href="<?=  BASE_PATH.'security/register.php'; ?>"><img src="<?=  BASE_PATH; ?>assets/upload/Bouton avis.png" alt="image logo avis "></a>
            </div>
            <?php        endif;        ?>

        </div>
    </div>
</nav>
</header>
