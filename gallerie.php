<?php   require_once 'config/function.php';
        require_once 'inc/header.inc.php';
        require_once 'navDis.php';
        if (isset($_GET['a']) && $_GET['a']=='dis'){

            unset($_SESSION['user']);
            $_SESSION['messages']['info'][]='A bientôt !!';
            header('location:./');
            exit();


    }
?>
<main>

      <div class="image--container"></div>
      <div class="image--selection"></div>
    


        <h1 style="color:red;">page gallerie</h1>
        <h2>je ne comprends pas</h2>
        <h3>ca rend dingue</h3>
        <h4>c'est pas possible</h4>
    </main>
<script src="<?=  BASE_PATH; ?>assets/js/gallerie.js"></script>
<?php     require_once 'inc/footer.inc.php';          ?>
