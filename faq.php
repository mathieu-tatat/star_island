<?php       

    require_once 'config/function.php';
    require_once 'inc/header.inc.php';
    require_once 'navDis.php';
    if (isset($_GET['a']) && $_GET['a']=='dis'){

        unset($_SESSION['user']);
        $_SESSION['messages']['info'][]='A bientôt !!';
        header('location:./');
        exit();


    }
?>
<h1>page equipes</h1>

<?php     require_once 'inc/footer.inc.php';          ?>
