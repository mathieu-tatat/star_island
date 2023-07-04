<?php       require_once 'config/function.php';
           
            require_once 'navDis.php';
            if (isset($_GET['a']) && $_GET['a']=='dis'){

                unset($_SESSION['user']);
                $_SESSION['messages']['info'][]='A bientôt !!';
                header('location:./');
                exit();


            } 
            require_once 'inc/header.inc.php';
         ?>
<main>

<!-- partie haute de la page index -->
    <div class=fondIndex>
    <div class="btnCarousel">

        <div class="point1"></div>
        <div class="point2"></div>
        <div class="point3"></div>

        </div>

        
        <div class="carousel">
            <input type="radio" id="page1cb" class="page1cb" checked name="pages" />
            <input type="radio" id="page2cb" name="pages" />
            <input type="radio" id="page3cb" name="pages" />
            
    <!-- page 1 -->
            <div class="page" id="page1">
                <H3 class= "titleIndex">Bienvenue sur Star'Island</H3>

                <p class="txtIndex">Serveur de jeu de rôle inspiré de GTA V ! Plongez dans un monde ouvert en free to play où vous pouvez créer votre destin dans les rues tumultueuses de la ville. Rejoignez une communauté passionnée, explorez des possibilités infinies et vivez des moments inoubliables dans un univers bienveillant, de glamour et de liberté. La ville vous appelle, êtes-vous prêt à répondre à l'appel de Star'Island ?</p>


            </div>

            <!-- page 2 -->


            <div class="page" id="page2">
                <div id="galCarousel">  

                    <div class="hideLeft">
                    <img src="<?=  BASE_PATH; ?>assets/upload/wallpaper3.png">
                    </div>

                    <div class="hideLeft">
                    <img src="<?=  BASE_PATH; ?>assets/upload/gta_decors5.png">
                    </div>

                    <div class="prevLeftSecond">
                    <img src="<?=  BASE_PATH; ?>assets/upload/gta_decors2.png">
                    </div>

                    <div class="prev">
                    <img src="<?=  BASE_PATH; ?>assets/upload/wallpaper3.png">
                    </div>

                    <div class="selected">
                    <img src="<?=  BASE_PATH; ?>assets/upload/Loading1.png">
                    </div>

                    <div class="next">
                    <img src="<?=  BASE_PATH; ?>assets/upload/Loading4.png">
                    </div>

                    <div class="nextRightSecond">
                    <img src="<?=  BASE_PATH; ?>assets/upload/Wallpaper1.png">
                    </div>

                    <div class="hideRight">
                    <img src="<?=  BASE_PATH; ?>assets/upload/Wallpaper2.png">
                    </div>

                    <div class="hideRight">
                    <img src="<?=  BASE_PATH; ?>assets/upload/Loading4.png">
                    </div>

                </div>

                    <div class="buttons">
                    <button id="prev">➪</button>
                    <button id="next">➪</button>
                    </div>

            </div>


            <!-- page 3 -->

            <div class="page" id="page3">

                <div class="containTopServer">
                    <div class="headFormTopServeur">
                        <img class="logoServeur" src="assets/upload/topServer.png" alt="logo du site top serveur">                    
                        <h4 class="serveurTitle">Star'Island</h4>

                    </div>
                    
                    <form method="post" action="#">
                        <input type="radio" name="note"> <span class="etoile">★</span>
                        <input type="radio" name="note"> <span class="etoile">★</span>
                        <input type="radio" name="note"> <span class="etoile">★</span>
                        <input type="radio" name="note"> <span class="etoile">★</span>
                        <input type="radio" name="note"> <span class="etoile">★</span>
                    </form> 

                    <form action="#" class="formCom" method="post">
                        <div class="formCom">
                            <textarea id="msg" name="user_message" placeholder="Écrire votre commentaire"></textarea>
                            <button type="submit" class="validerCom">Publier</button>
                        </div>
                        
                    </form>

                </div>

            </div>
                
            
        </div>

    </div>  
    
<!-- seconde parie page index tchat -->

               

    <div class=fondIndexBas>

                <div class="displayComments">

                        <div class="leftCom">
                            <div>
                                <img class="imgComAvatarLeft" src="assets/upload/avatar4.png" alt="photo avatar" >
                            </div>

                            <div class="formPostedLeft"  >
                                <form method="post" action="#">
                                    <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                    <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                    <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                    <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                    <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                </form> 
                                <p class="policePostLeft">super serveur gta rp </p>
                                <p class="datePostLeft">Posté le 18/06/2023</p>

                            </div>

                        </div>

                        <div class="rightCom">
                               
                                <div class="formPostedRight"  >
                                    <form method="post" action="#">
                                        <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                        <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                        <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                        <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                        <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                    </form> 
                                    <p class="policePostRight">super serveur gta rp </p>
                                    <p class="datePostRight">Posté le 18/06/2023</p>

                                </div>

                                <div>
                                    <img class="imgComAvatarRight" src="assets/upload/avatar3.png" alt="photo avatar" >
                                </div>

                        </div>

                        <div class="leftCom">
                            <div>
                                <img class="imgComAvatarLeft" src="assets/upload/avatar2.png" alt="photo avatar" >
                            </div>

                            <div class="formPostedLeft"  >
                                <form method="post" action="#">
                                    <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                    <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                    <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                    <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                    <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                </form> 
                                <p class="policePostLeft">super serveur gta rp </p>
                                <p class="datePostLeft">Posté le 18/06/2023</p>

                            </div>
                        
                        </div>

                        <div class="rightCom">

                                <div class="formPostedRight"  >
                                    <form method="post" action="#">
                                        <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                        <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                        <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                        <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                        <input type="radio" name="avisEtoile"> <span class="avis1">★</span>
                                    </form> 
                                    <p class="policePostRight">super serveur gta rp </p>
                                    <p class="datePostRight">Posté le 18/06/2023</p>

                                </div>
        
                                <div>
                                    <img class="imgComAvatarRight" src="assets/upload/avatar1.png" alt="photo avatar" >
                                </div>

                         </div>
                
                    </div>


                <div class="containCommentaires">
                    <div class="headFormCommentaires">                   
                        <h4 class="commentTitle">Votre avis nous intéresse.</h4>

                    </div>
                    
                    <form method="post" class="formAvisCommentaires" action="#">
                        <input type="radio" name="avisEtoile"> <span class="avis">★</span>
                        <input type="radio" name="avisEtoile"> <span class="avis">★</span>
                        <input type="radio" name="avisEtoile"> <span class="avis">★</span>
                        <input type="radio" name="avisEtoile"> <span class="avis">★</span>
                        <input type="radio" name="avisEtoile"> <span class="avis">★</span>
                    </form> 

                    <form action="#" class="formComment" method="post">
                        <div class="formComment">
                            <textarea id="com" name="user_avis" placeholder="Écrire votre commentaire"></textarea>
                            <button type="submit" class="validerAvis">Publier</button>
                        </div>
                        
                    </form>

                </div>

            


    </div>

    <script src="assets/js/index.js" defer ></script>

</main>

<?php     require_once 'inc/footer.inc.php';          ?>
