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
    <div class="faqFond">
        
        <div class="menu">                                          
            
            <button class="menu__item active" style="--bgColorItem: #ff8c00;">
                <p class="textCenter">Tous</p>
            </button>

            <button class="menu__item" style="--bgColorItem: #f54888;">
                <p class="textCenter">Admins</p>
            </button>

            <button class="menu__item" style="--bgColorItem: #48f54b;">
            <p class="textCenter">Staff/Modos</p>  
            </button>

            <button class="menu__item" style="--bgColorItem: #4343f5;">
            <p class="textCenter">Developpeurs</p>
            </button>

            <button class="menu__item" style="--bgColorItem: #e0b115;">
                <p class="textCenter">Mappers</p>
            </button>

            <button class="menu__item" style="--bgColorItem: #65ddb7;">
                <p class="textCenter">Helpers</p>
            </button>

                <div class="menu__border">
                </div>

        </div>

        <div class="svg-container">
            <svg viewBox="0 0 202.9 45.5">
                <clipPath id="menu" clipPathUnits="objectBoundingBox" transform="scale(0.0049285362247413 0.021978021978022)">
                <path d="M6.7,45.5c5.7,0.1,14.1-0.4,23.3-4c5.7-2.3,9.9-5,18.1-10.5c10.7-7.1,11.8-9.2,20.6-14.3c5-2.9,9.2-5.2,15.2-7
                    c7.1-2.1,13.3-2.3,17.6-2.1c4.2-0.2,10.5,0.1,17.6,2.1c6.1,1.8,10.2,4.1,15.2,7c8.8,5,9.9,7.1,20.6,14.3c8.3,5.5,12.4,8.2,18.1,10.5
                    c9.2,3.6,17.6,4.2,23.3,4H6.7z" />
                </clipPath>
            </svg>
        </div>
   
          
  

        <div class="containTeam">

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/Souen.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/ellios.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/charmilia.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>


        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/hans.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>
 
        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/Souen.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/ellios.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/charmilia.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>


        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/hans.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>
        
        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/Souen.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/Souen.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/ellios.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>


        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/Souen.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/hans.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/charmilia.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/Souen.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>


        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/ellios.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/charmilia.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/Souen.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/ellios.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>


        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/charmilia.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/hans.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/Souen.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>

        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/ellios.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>


        <div class="staffImg" >
            <img class="avatarFaq" src="<?=  BASE_PATH; ?>assets/upload/hans.png" alt="" srcset="">
            <a href="https://fr-fr.facebook.com/"class="image-text"><img class="socialImg" src="<?=  BASE_PATH; ?>assets/upload/facebook.png" alt="" srcset=""></a>

        </div>
       
        
    </div>

</main>

    <script src="<?=  BASE_PATH; ?>/assets/js/faq.js"  ></script>

<?php     require_once 'inc/footer.inc.php';          ?>
