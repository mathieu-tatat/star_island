
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/navDis.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/bootstrap/scss/bootstrap.css">
    <link rel="icon" href="assets/upload/starisland.png" type="icon star'island">
    <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceland&display=swap" rel="stylesheet">
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script> 
   
</head>
<body>

<header>
<nav class=" navbar navbar-expand-lg mb-5"id="colorNav">
    <div class="container-fluid">
    <a href="<?=  BASE_PATH; ?>"><img id="logoIsland" src="assets/upload/starisland.png" alt=""></a>           
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span id="buttonBurger" class="navbar-toggler-icon">
                <img id="burger" src="assets/upload/noun-menu.png" alt="">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto"id="ulNav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?=  BASE_PATH; ?>">
                        <img src="assets/upload/Vector.png" alt="">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">GALLERIE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">DEVENIR VIP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="">SERVEUR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?=  BASE_PATH.'back/'; ?>">Accès Back-office</a>
                </li>
                <?php     if (admin()):           ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ADMIN</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?=  BASE_PATH.'back/userList.php'; ?>">Gestion utilisateur</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>                        
                      

                        <div class="dropdown-divider"></div>
                    </div>
                </li>
                <?php     endif;           ?> 

            </ul>
            <?php     if (connect()):           ?>
            <a href="<?=  BASE_PATH.'?a=dis'; ?>" class="btn btn-primary">Déconnexion</a>
            <?php     else:           ?>
                <div id="outLink">
            <a href="<?=  BASE_PATH.'security/login.php'; ?>"><img src="assets/upload/Bouton tuto.png" alt="logo tutoriel "></a>
            <a href="<?=  BASE_PATH.'security/register.php'; ?>"><img src="assets/upload/Bouton avis.png" alt="image logo avis "></a>
            </div>
            <?php        endif;        ?>

        </div>
    </div>
</nav>
</header>
