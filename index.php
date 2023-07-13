<?php       require_once 'config/function.php';
           
            require_once 'navDis.php';
            if (isset($_GET['a']) && $_GET['a']=='dis'){

                unset($_SESSION['user']);
                $_SESSION['messages']['info'][]='A bientôt !!';
                header('location:./');
                exit();


                
            }  

            $joinComment_Medias=execute(
                "SELECT c.*, m.* FROM comment c
                INNER JOIN media m
                on c.id_media = m.id_media ORDER BY id_comment DESC")->fetchAll(PDO::FETCH_ASSOC);
            $comments = execute("SELECT * FROM comment")->fetchAll(PDO::FETCH_ASSOC);
            $medias = execute("SELECT * FROM media")->fetchAll(PDO::FETCH_ASSOC);
           
            if (!empty($_POST)) {  

            $joinComment_Medias=execute(
               "SELECT c.*, m.* FROM comment c
               INNER JOIN media m
               on c.id_media = m.id_media ORDER BY id_comment DESC")->fetchAll(PDO::FETCH_ASSOC);
           
            
               // Récupération des valeurs du formulaire
               $pseudo = $_POST['user_pseudo'];
               $commentaire = $_POST['user_avis'];
               $rate=(int)$_POST['rating'];

               $avatars=execute("SELECT m.* FROM media m 
               INNER JOIN  media_type mt 
               ON m.id_media_type=mt.id_media_type 
               WHERE mt.title_media_type='avatar'")->fetchAll(PDO::FETCH_ASSOC);
               $choice=array_rand($avatars, 1);
               $avatarIdMedia = $avatars[$choice]['id_media'];
                

                   if ( empty($pseudo) || empty($commentaire || empty($_POST['avisEtoile'])) ) {  
                      
                       $error = 'Ces champs sont obligatoire';
                  
                   }else{
                      
                   // Insertion des données dans la base de données (utilisez la méthode appropriée pour votre base de données)
                   // Exemple avec MySQLi :
                   execute("INSERT INTO comment (rating_comment, comment_text, publish_date_comment, nickname_comment, activated, id_media) 
                   VALUES (:rating_comment, :comment_text, (NOW()), :nickname_comment, 0, :id_media)",array(
                       ':rating_comment' => $rate,
                       ':comment_text'=> $commentaire,
                       ':nickname_comment'=> $pseudo,
                       ':id_media'=> $avatarIdMedia
                       
           
                   ));
                   
           
                   // Réponse réussie ou redirection vers une autre page
                   // Exemple de redirection :
                   header("Location:  #"); 
                    exit();
                   }
                
               }







           
            require_once 'inc/header.inc.php';
             require_once 'comments.php';
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
                    
                    <form method="post" >
                        <input type="radio" name="note"> <span class="etoile">★</span>
                        <input type="radio" name="note"> <span class="etoile">★</span>
                        <input type="radio" name="note"> <span class="etoile">★</span>
                        <input type="radio" name="note"> <span class="etoile">★</span>
                        <input type="radio" name="note"> <span class="etoile">★</span>
                    </form> 

                    <form  class="formCom" method="post">
                        <div class="formCom">
                            <textarea id="msg" name="user_message" placeholder="Écrire votre commentaire"></textarea>
                            <button type="submit" class="validerCom">Publier</button>
                        </div>
                        
                    </form>

                </div>

            </div>
                
            
        </div>

    </div>  
    
<!-- seconde partie page index tchat -->

               

    <div class=fondIndexBas>
                <div class="displayComments">
                    <?php $isLeftCom = true; // Variable de contrôle initialisée à true
                    foreach($joinComment_Medias as $comment_media):?>
                    <?php if($comment_media['activated'] == 1 || $comment_media['activated'] == 0 ){ ?>
                        <div class="<?php echo $isLeftCom ? 'leftCom' : 'rightCom'; ?>">                       
                           

                            <div>  
                                <img class="imgComAvatarLeft" src="<?=  BASE_PATH.'assets/'.$comment_media['title_media']; ?>" alt="photo avatar">
                            </div>

                            <div class="formPostedLeft">
                                <form method="post" >
                                    <?php if($comment_media['rating_comment'] == 1):?>
                                            <span class="jour">★</span><span class="nuit">★★★★</span>
                                    <?php endif;
                                        if($comment_media['rating_comment'] == 2):?>
                                            <span class="jour">★★</span><span class="nuit">★★★</span>
                                    <?php endif;
                                        if($comment_media['rating_comment'] == 3):?>
                                            <span class="jour">★★★</span><span class="nuit">★★</span>
                                    <?php endif;
                                        if($comment_media['rating_comment'] == 4):?>
                                            <span class="jour">★★★★</span><span class="nuit">★</span>
                                    <?php endif;
                                       if($comment_media['rating_comment'] == 5):?>
                                            <span class="jour">★★★★★</span>
                                    <?php endif; ?>
                                    
                                     
                                </form> 
                                    <div class="box_pseudo_date">
                                        <p class="policePostLeft"><?= "de :".$comment_media['nickname_comment']; ?></p>
                                        <p class="policecomPostLeft"><?= $comment_media['comment_text']; ?> </p>
                                    </div>
                                <p class="datePostLeft">Posté le : <?= $comment_media['publish_date_comment']; ?></p>
                               
                            </div>
                           
                        </div> 
                    
                        <?php }; 
                         $isLeftCom = !$isLeftCom; // Inversion de la variable de contrôle à chaque itération
                        endforeach ; ?> 

                </div> 


                <div class="containCommentaires">
                    <div class="headFormCommentaires">                   
                        <h4 class="commentTitle">Votre avis nous intéresse.</h4>

                    </div>
                    
                    <form method="post" class="formAvisCommentaires" >
                        <input type="radio" name="avisEtoile"> <span class="avis">★</span>
                        <input type="radio" name="avisEtoile"> <span class="avis">★</span>
                        <input type="radio" name="avisEtoile"> <span class="avis">★</span>
                        <input type="radio" name="avisEtoile"> <span class="avis">★</span>
                        <input type="radio" name="avisEtoile"> <span class="avis">★</span>
                    </form> 

                    <form  class="formComment" method="post">
                        <div class="divPseudo">
                            <label for="user_pseudo" class="form-label">Pseudo:</label>
                            <input type="text" id="user_pseudo" name="user_pseudo" placeholder="entrer votre pseudo">
                        </div>
                        <div class="formComment">
                            <input type="hidden" id="rating" value="1" name="rating">
                            <label for="com" class="form-label">Commentaire:</label>
                            <textarea id="com" style="display:flex; " name="user_avis" placeholder="Écrire votre commentaire"></textarea>
                            <button type="submit" name="publish"class="validerAvis">Publier</button>
                        </div>
                        <div class="text-center">
                        <small class="text-danger"><?= $error ?? ''; ?></small>
                        </div>
                    </form>

                </div>

            <script>
   
</script>


    </div>

    <script src="assets/js/index.js" defer ></script>

</main>

<?php     require_once 'inc/footer.inc.php';          ?>
