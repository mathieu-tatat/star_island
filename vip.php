<title>Star'Island VIP page</title>
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
<main>

<div class="fondVIP">
    <h1 class="titleVIP">DEVENIR VIP</h1>

        <div class="topCard">
            <div class="encarTxt" >
                <h2 class="vipTitle2">VIP</h3>
                <p class="vipTxt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis pariatur optio unde eligendi eveniet enim voluptas voluptatibus laboriosam amet quos vel debitis rem facilis repellendus in explicabo, harum inventore tempora.</p>
            </div>

                <div class="cadrImg">
                    <img class="imgCard"  src="<?=  BASE_PATH; ?>assets/upload/Perso1v2.png" alt="">
                </div>
        </div>

        <div class="bottomCard">
            
            <div class="cadrImg2">
                <img class="imgCard" src="<?=  BASE_PATH; ?>assets/upload/Perso2.png" alt="">
            </div>

            <div class="encarTxt" >
                <div>
                        <h3 class="vipTitle2">VIP +</h3>
                        <p class="vipTxt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis pariatur optio unde eligendi eveniet enim voluptas voluptatibus laboriosam amet quos vel debitis rem facilis repellendus in explicabo, harum inventore tempora.</p>
                </div>
            </div>

        </div>
</div>
</main>
<?php     require_once 'inc/footer.inc.php';          ?>
