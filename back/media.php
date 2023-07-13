<?php require_once '../config/function.php';
$pages = execute("SELECT * FROM page")->fetchAll(PDO::FETCH_ASSOC);
$content = execute("SELECT * FROM content")->fetchAll(PDO::FETCH_ASSOC);

$mediaTypes=execute(
                    "SELECT m.*, t.* FROM media m
                    INNER JOIN media_type t
                        on m.id_media_type = t.id_media_type")->fetchAll(PDO::FETCH_ASSOC);



$joins = execute(
                "SELECT m.*, t.*, p.title_page FROM media m
                INNER JOIN media_type t 
                    ON m.id_media_type = t.id_media_type
                INNER JOIN page p 
                    ON m.id_page = p.id_page WHERE t.title_media_type = 'lien' ")->fetchAll(PDO::FETCH_ASSOC);

$joinsImg = execute(
    "SELECT m.*, t.*, p.title_page FROM media m
    INNER JOIN media_type t 
        ON m.id_media_type = t.id_media_type
    INNER JOIN page p 
        ON m.id_page = p.id_page WHERE t.title_media_type != 'lien' ")->fetchAll(PDO::FETCH_ASSOC);






if (!empty($_POST)) {

    if(isset($_POST['choice_type'])){
       $id_type=$_POST['id_media_type'];
       $title_type=execute("SELECT title_media_type FROM media_type WHERE id_media_type=:id",array(
        ':id'=>$id_type
       ))->fetch(PDO::FETCH_ASSOC);
  //var_dump($title_type); die;
    }else{
     
         if ( empty($_POST['name_media']) || empty($_POST['id_page']) ) {  
        $id_type=$_POST['media_type_id'];
        $error = 'Ces champs sont obligatoire';
        $title_type['title_media_type']= $_POST['title_type'];

    }



    if (!isset($error)) {

        if (empty($_POST['id_media'])) {
          //  var_dump($_FILES); die;
            if (!empty($_FILES['title_media']['name'])){
                
       $picture="";
              $formats=['image/png', 'image/jpg', 'image/jpeg', 'image/gif', 'image/webp','image/svg'];
              if (!in_array($_FILES['title_media']['type'],$formats )){
                  $picture.="Les formats autorisés sont: 'image/png', 'image/jpg', 'image/jpeg', 'image/gif', 'image/webp' 'image/svg' <br>";
                  $error=true;
      
              }
              if ($_FILES['title_media']['size'] > 5000000){
                  $picture.="Taille maximale autorisée de 5M";
                  $error=true;
              }
                if($_POST['title_type'] !== 'avatar'){
                    $picture_bdd='upload/'.uniqid().date_format(new DateTime(),'d_m_Y_H_i_s').$_FILES['title_media']['name'];
                    
                    copy($_FILES['title_media']['tmp_name'],'../assets/'.$picture_bdd);
                } else{
                
                    $picture_bdd='avatar/'.uniqid().date_format(new DateTime(),'d_m_Y_H_i_s').$_FILES['title_media']['name'];
                    
                    copy($_FILES['title_media']['tmp_name'],'../assets/'.$picture_bdd); }
                }else{
             
          $picture_bdd=$_POST['title_media'];
          }  // fin contrôle de formulaire
      
              
           execute("INSERT INTO media (title_media, name_media, id_page, id_media_type) 
            VALUES (:title_media, :name_media,:id_page, :id_media_type)"
            , array(
                ':title_media' => $picture_bdd,
                ':name_media' => $_POST['name_media'],
                ':id_page' => $_POST['id_page'],
                ':id_media_type'=> $_POST['media_type_id']
            ));

            $_SESSION['messages']['success'][] = 'Le média a bien était ajouté';
            header('location:#');
            exit();
        }else{
            
                execute("UPDATE media SET title_media=:title, name_media=:name_media, id_page=:id_page , id_media_type=:id_media_type WHERE id_media=:id", array(
                    ':id' => $_POST['id_media'],
                    ':title' => $_POST['title_media'],
                    ':name_media' => $_POST['name_media'],
                    ':id_page' => $_POST['id_page'],
                    ':id_media_type' => $_POST['media_type_id']
                ));
        
                $_SESSION['messages']['success'][] = 'Le Média a bien été modifié';
                header('location:#');
                exit();
            
        }// fin soumission modification
    }// fin si pas d'erreur
    }


   

}// fin !empty $_POST
$mediaTypes = execute("SELECT * FROM media_type")->fetchAll(PDO::FETCH_ASSOC);

//debug($media);

if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'edit') {

    $media = execute("SELECT m.*, mt.* FROM media m INNER JOIN media_type mt ON m.id_media_type=mt.id_media_type WHERE m.id_media=:id", array(
        ':id' => $_GET['id']
    ))->fetch(PDO::FETCH_ASSOC);
    $title_type['title_media_type']=$media['title_media_type'];

}


if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'del') {

    $success = execute("DELETE FROM media WHERE id_media=:id", array(
        ':id' => $_GET['id']
    ));

    if ($success) {
        $_SESSION['messages']['success'][] = 'Le Media a bien été supprimé';
        header('location:./media.php');
        exit;

    } else {
        $_SESSION['messages']['danger'][] = 'Problème de traitement, veuillez réitérer';
        header('location:./media.php');
        exit;


    }

}

require_once '../inc/backheader.inc.php';
?>


<?php if(!isset($id_type) && !isset($_GET['id']) ): ?>
          
<form action="" method="post"  class="w-90 mx-auto mt-5 mb-5">
    <div class="form-group">
        <input type="hidden" name="choice_type" value="1">
        <small class="text-danger">*</small>
        <label for="id_media_type" class="form-label">Type du media</label>
        <select name="id_media_type" id="id_type_media" class="form-control">

            <?php  
            foreach ($mediaTypes as $type) { ?>
              <option <?php if (isset($_POST['id_media_type']) && $type['id_media_type'] == $_POST['id_media_type']) echo "selected"; ?> value="<?= $type['id_media_type'] ?? ''; ?>">
                    <?= $type['title_media_type']; ?>  
                </option>
            <?php } ?>

        </select>
        <button type="submit" class="btn btn-primary mt-2">Select</button>
</form>

<?php else: ?>

    
<form action="" enctype="multipart/form-data" id="votre_element" method="post" class="w-50  mt-5 mb-5">


        <?php if ( $title_type['title_media_type']=='lien') { ?>
            
            <div>
                <small class="text-danger">*</small>
                <label for="title_media" class="form-label">Titre du media</label>
                <input name="title_media" id="id_title_media" placeholder="Titre du Media" type="text" value="<?= $media['title_media'] ?? ''; ?>" class="form-control">
            </div>
        <?php } else { ?>
            
                <small class="text-danger">*</small>
                <label for="files" class="form-label">Fichier à uploader</label>
                <input onchange="loadFile()" value="<?= $media['title_media'] ?? ''; ?>" name="title_media" type="file" class="form-control" id="file_upload">
                <small class="text-danger"><?= $picture ?? ""; ?></small>
                <div class="text-center">
                    <img id="image" class="w-25 rounded mt-3 rounded-circle" alt="">
                </div>
            
        <?php } ?>

        <div>
            <small class="text-danger">*</small>
            <label for="name_media" class="form-label">Nom du media</label>
            <input name="name_media" id="id_name_media" placeholder="Nom du media" type="text" value="<?= $media['name_media'] ?? ''; ?>" class="form-control">
        </div>

        <?php if(!isset($_GET['id'])) {?>
        <div>
            <small class="text-danger">*</small>
            <label for="id_page" class="form-label">Titre de la page</label>
            <select name="id_page" id="id_title_page" class="form-control">
                <?php  
                foreach ($pages as $page) { ?>
                    <option <?php if (isset($media['id_page']) && $page['id_page'] == $media['id_page']) echo "selected"; ?> value="<?= $page['id_page'] ?? ''; ?>">
                        <?= $page['title_page']; ?>  
                    </option>
                <?php } ?>
            </select>
        </div>
        <?php } ?>

        <div class="text-center">
            <small class="text-danger"><?= $error ?? ''; ?></small>
        </div>
    </div>
    <input type="hidden" name="media_type_id" value="<?= $id_type ?? 0; ?>">
    <input type="hidden" name="title_type" value="<?= $title_type['title_media_type']; ?>">
    <input type="hidden" name="id_media" value="<?= $media['id_media'] ?? ''; ?>">
    <button type="submit" class="btn btn-primary mt-2 m-3">Valider</button>

</form>
<?php endif; ?>


<table class="tableau table table-dark table-striped mx-auto mt-3">
<thead>    

<tr>
    <th>Titre Media</th>
    <th>Nom du media</th>
    <th>Titre de la page</th>
    <th>Type de Media</th>
    <th class="text-center">Actions</th>
</tr>
</thead>
<tbody>
<?php foreach ($joins as $join): ?>
    <tr>
        <td><?= $join['title_media']; ?> </td>
        <td id="descr"><?= substr($join['name_media'], 0, 40).' ...'; ?></td>
        <td><?= $join['title_page'] ;?></td>
        <td><?= $join['title_media_type'] ;?></td>

        <td class="text-center">
            <a href="?id=<?= $join['id_media']; ?>&a=edit" class="btn btn-outline-info">Modifier</a>
            <a  href="?id=<?= $join['id_media']; ?>&a=del" onclick="return confirm('Etes-vous sûr?')"
               class="btn btn-outline-danger">Supprimer</a>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>

<button type="submit" id="monBouton" class="btn btn-primary mt-2 ">gestion images</button>
<div id="imgTable">

<?php foreach ($joinsImg as $joinImg): ?>
   
       <a  class="cardDel" href="?id=<?= $joinImg['id_media']; ?>&a=del" onclick="return confirm('voulez vous vraiment supprimer ce media ?')"class="btn btn-outline-danger"> <p style="text-align: center;color: black;"><?='Média: '.$joinImg['title_media_type'] ; ?></p> <img class="gestionImg" src="../assets/<?=$joinImg['title_media'] ?? ""; ?>" alt="<?= $joinImg['name_media']; ?>" srcset=""> <p class="xdel">X</p> </a>
     
<?php endforeach; ?>

</div>

    <script>
        let loadFile = function()
        {
            let image = document.getElementById('image');

            image.src = URL.createObjectURL(event.target.files[0]);
        }


        var boutonImg = document.getElementById("monBouton");
        var element = document.getElementById("imgTable");

    // Ajouter un écouteur d'événement pour le clic sur le bouton
        boutonImg.addEventListener("click", function() {
            var style = window.getComputedStyle(element);
            var display = style.getPropertyValue("display");

        if (display === "none") {
            element.style.display = "flex";

        } else {
            element.style.display = "none";
        }
        });

    </script>

<style> 

</style>
<?php require_once '../inc/backfooter.inc.php'; ?>