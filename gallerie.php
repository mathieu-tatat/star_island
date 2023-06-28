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
    <div class="bgc" >

<div id="boxSize" class="gallery-slider_wrapper">
  <div class="single-gallery-carousel-content-box owl-carousel owl-theme">
      <a class="item" href="<?=  BASE_PATH; ?>assets/upload/wallpaper3.png">
          <img id="imageSize" src="<?=  BASE_PATH; ?>assets/upload/wallpaper3.png" alt="Awesome Image"/>
      </a>
      <a class="item" href="<?=  BASE_PATH; ?>assets/upload/gta_decors5.png">
          <img id="imageSize" src="<?=  BASE_PATH; ?>assets/upload/gta_decors5.png" alt="Awesome Image"/>
      </a>
      <a class="item" href="<?=  BASE_PATH; ?>assets/upload/gta_decors2.png">
          <img id="imageSize" src="<?=  BASE_PATH; ?>assets/upload/gta_decors2.png" alt="Awesome Image"/>
      </a>
      <a class="item" href="<?=  BASE_PATH; ?>assets/upload/Loading1.png">
          <img id="imageSize" src="<?=  BASE_PATH; ?>assets/upload/Loading1.png" alt="Awesome Image"/>
      </a>
      <a class="item" href="<?=  BASE_PATH; ?>assets/upload/Loading4.png">
          <img id="imageSize" src="<?=  BASE_PATH; ?>assets/upload/Loading4.png" alt="Awesome Image"/>
      </a>
      <a class="item" href="<?=  BASE_PATH; ?>assets/upload/wallpaper2.png">
          <img id="imageSize" src="<?=  BASE_PATH; ?>assets/upload/wallpaper2.png" alt="Awesome Image"/>
      </a>
      <a class="item" href="<?=  BASE_PATH; ?>assets/upload/Perso1.png">
          <img id="imageSize" src="<?=  BASE_PATH; ?>assets/upload/Perso1.png" alt="Awesome Image"/>
      </a>
      <a class="item" href="<?=  BASE_PATH; ?>assets/upload/predation.png">
          <img id="imageSize" src="<?=  BASE_PATH; ?>assets/upload/predation.png" alt="Awesome Image"/>
      </a>
      <a class="item" href="https://images.pexels.com/photos/631986/pexels-photo-631986.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
          <img id="imageSize" src="https://images.pexels.com/photos/631986/pexels-photo-631986.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Awesome Image"/>
      </a>
  </div>
  <div style="margin:10px 25px 0 25px;">
      <div class="single-gallery-carousel-thumbnail-box owl-carousel owl-theme">
          <div class="item" href="<?=  BASE_PATH; ?>assets/upload/wallpaper3.png">
              <img id="mIniImg" src="<?=  BASE_PATH; ?>assets/upload/wallpaper3.png" alt="Awesome Image"/>
          </div>
          <div class="item" href="<?=  BASE_PATH; ?>assets/upload/gta_decors5.png">
              <img id="mIniImg" src="<?=  BASE_PATH; ?>assets/upload/gta_decors5.png" alt="Awesome Image"/>
          </div>
          <div class="item" href="<?=  BASE_PATH; ?>assets/upload/gta_decors2.png">
              <img id="mIniImg" src="<?=  BASE_PATH; ?>assets/upload/gta_decors2.png" alt="Awesome Image"/>
          </div>
          <div class="item" href="<?=  BASE_PATH; ?>assets/upload/Loading1.png">
              <img id="mIniImg" src="<?=  BASE_PATH; ?>assets/upload/Loading1.png" alt="Awesome Image"/>
          </div>
          <div class="item" href="<?=  BASE_PATH; ?>assets/upload/Loading4.png">
              <img id="mIniImg" src="<?=  BASE_PATH; ?>assets/upload/Loading4.png" alt="Awesome Image"/>
          </div>
          <div class="item" href="<?=  BASE_PATH; ?>assets/upload/wallpaper2.png">
              <img id="mIniImg" src="<?=  BASE_PATH; ?>assets/upload/wallpaper2.png" alt="Awesome Image"/>
          </div>
          <div class="item" href="<?=  BASE_PATH; ?>assets/upload/Perso1.png">
              <img id="mIniImg" src="<?=  BASE_PATH; ?>assets/upload/Perso1.png" alt="Awesome Image"/>
          </div>
          <div class="item" href="<?=  BASE_PATH; ?>assets/upload/predation.png">
              <img id="mIniImg"src="<?=  BASE_PATH; ?>assets/upload/predation.png" alt="Awesome Image"/>
          </div>
          <div class="item" href="https://images.pexels.com/photos/631986/pexels-photo-631986.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
              <img id="mIniImg"src="https://images.pexels.com/photos/631986/pexels-photo-631986.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Awesome Image"/>
          </div>
      </div>
  </div>
</div>
</div>
<script src="<?=  BASE_PATH; ?>assets/js/jquery.min.js"></script>
<script src="<?=  BASE_PATH; ?>assets/js/owl.carousel.js"></script>
<script src="<?=  BASE_PATH; ?>assets/js/jquery.magnific-popup.js"></script>

    </main>
<script src="<?=  BASE_PATH; ?>assets/js/gallerie.js"></script>
<?php     require_once 'inc/footer.inc.php';          ?>
