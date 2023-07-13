<?php 
 require_once 'config/function.php';
 $comments = execute("SELECT * FROM comment")->fetchAll(PDO::FETCH_ASSOC);
 $medias = execute("SELECT * FROM media")->fetchAll(PDO::FETCH_ASSOC);

 
 $joinComment_Media=execute(
    "SELECT c.*, m.* FROM comment c
    INNER JOIN media m
    on c.id_media = m.id_media")->fetchAll(PDO::FETCH_ASSOC);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Récupération des valeurs du formulaire
    $pseudo = $_POST['user_pseudo'];
    $commentaire = $_POST['user_avis'];
    $date = date('d-m-Y');
    // Génération d'un nombre aléatoire pour choisir l'avatar
    $nombreAleatoire = rand(1, 9);

    // Chemin de l'image d'avatar
    $cheminAvatar = "assets/avatar/" . $nombreAleatoire.'png'; }
    if (!empty($_POST['publish'])) {
        if ( empty($pseudo) || empty($commentaire || empty($_POST['avosEtoile'])) ) {  
           
            $error = 'Ces champs sont obligatoire';
            $title_type['title_media_type']= $_POST['title_type'];
            die('hey');
        }else{
            die("hello");
        // Insertion des données dans la base de données (utilisez la méthode appropriée pour votre base de données)
        // Exemple avec MySQLi :
        execute("INSERT INTO comment (rating_comment, comment_text, publish_date_comment, nickname_comment, activated, id_media) 
        VALUES (:rating_comment, :comment_text, (NOW()), :nickname_comment, 0, :id_media)",array(
            ':rating_comment' => $rate,
            ':comment_text'=> $commentaire,
            ':publish_date_comment'=> $date,
            ':nickname_comment'=> $pseudo,
            ':id_media'=> $cheminAvatar
            

        ));
        die('ciao');

        // Réponse réussie ou redirection vers une autre page
        // Exemple de redirection :
        header("Location: index.php");
         exit();
        }
   
    }
    

    
 
 
 
 

 
 ?>