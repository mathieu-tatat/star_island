<?php require_once '../config/function.php';
$pages = execute("SELECT * FROM page")->fetchAll(PDO::FETCH_ASSOC);
$content = execute("SELECT * FROM content")->fetchAll(PDO::FETCH_ASSOC);
$mediaTypes=execute("SELECT m.*, t.*
                     FROM media m
                     INNER JOIN media_type t
                     on m.id_media_type = t.id_media_type")->fetchAll(PDO::FETCH_ASSOC);



$joins = execute("SELECT m.*, t.*, p.title_page FROM media m
INNER JOIN media_type t ON m.id_media_type = t.id_media_type
INNER JOIN page p ON m.id_page = p.id_page")->fetchAll(PDO::FETCH_ASSOC);




if (!empty($_POST)) {


    if (empty($_POST['title_media']) || empty($_POST['name_media']) || empty($_POST['id_page']) || empty($_POST['id_media_type'])) {

        $error = 'Ces champs sont obligatoire';

    }

    if (!isset($error)) {

        if (empty($_POST['id_media'])) {

           execute("INSERT INTO media (title_media, name_media, id_page, id_media_type) 
            VALUES (:title_content, :description_content,:id_page, :id_media_type)"
            , array(
                ':title_content' => $_POST['title_content'],
                ':description_content' => $_POST['description_content'],
                ':id_page' => $_POST['id_page'],
                ':id_media_type'=> $_POST['id_media_type']
            ));

            $_SESSION['messages']['success'][] = 'media ajouté';
            header('location:./media.php');
            exit();
        }else{
            
                execute("UPDATE content SET title_content=:title, description_content=:description_content, id_page=:id_page WHERE id_content=:id", array(
                    ':id' => $_POST['id_content'],
                    ':title' => $_POST['title_content'],
                    ':description_content' => $_POST['description_content'],
                    ':id_page' => $_POST['id_page']
                ));
        
                $_SESSION['messages']['success'][] = 'Content a bien été modifié';
                header('location: ./media.php');
                exit();
            
        }// fin soumission modification
    }// fin si pas d'erreur

}// fin !empty $_POST
$mediaTypes = execute("SELECT * FROM media_type")->fetchAll(PDO::FETCH_ASSOC);

//debug($content);

if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'edit') {

    $media = execute("SELECT * FROM media WHERE id_media=:id", array(
        ':id' => $_GET['id']
    ))->fetch(PDO::FETCH_ASSOC);
    //debug($content);

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
<!--<pre>
<?= var_dump($mediaTypes);?>
</pre> -->
<form action="" method="post" class="w-75 mx-auto mt-5 mb-5">
    <div class="form-group">

        <small class="text-danger">*</small>
        <label for="media_title" class="form-label">Titre du media</label>
        <input name="title_media" id="id_title_media" placeholder="Titre du Media" type="text"
            value="<?= $media['title_media'] ?? ''; ?>" class="form-control">

        <small class="text-danger">*</small>
        <label for="name_media" class="form-label">Nom du media </label>       
        <input name="name_media" id="id_name_media" placeholder="Nom du media" type="text"
                value="<?= $media['name_media'] ?? ''; ?>" class="form-control">

        <small class="text-danger">*</small>
        <label for="id_page" class="form-label">titre de la page  </label>       
        <select name="id_page" id="id_title_page"  class="form-control" >
            <?php  
                foreach ($pages as $page) { ?>
                <option 
                <?php
                            if(isset($media['id_page']) && $page['id_page'] == $media['id_page']):
                                echo "selected"; 
                            endif;?> 
                            value="<?= $page['id_page'] ?? ''; ?>"> 
                            <?= $page['title_page'] ; ?>  
                </option>
                <?php } ;
            ?>  
        </select>

        <small class="text-danger">*</small>
        <label for="id_media_type" class="form-label">type du media </label>       
        <select name="id_media_type" id="id_type_media"  class="form-control" >
            <?php  
                foreach ($mediaTypes as $type) { ?>
                <option 
                <?php
                            if(isset($media['id_media_type']) && $type['id_media_type'] == $media['id_media_type']):
                                echo "selected"; 
                            endif;?> 
                            value="<?= $type['id_media_type'] ?? ''; ?>"> 
                            <?= $type['title_media_type'] ; ?>  
                </option>
                <?php } ;
            ?>  
        </select>


        <td class="text-center">
        <small class="text-danger"><?= $error ?? ''; ?></small>
    </div>

    <input type="hidden" name="id_media" value="<?= $media['id_content'] ?? ''; ?>">
    <button type="submit" class="btn btn-primary mt-2">Valider</button>
</form>

<table class="table table-dark table-striped w-75 mx-auto">
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
        <td><?= $join['title_media']; ?></td>
        <td id="descr"><?= $join['name_media']; ?></td>
        <td><?= $join['title_page'] ;?></td>
        <td><?= $join['title_media_type'] ;?></td>

        <td class="text-center">
            <a href="?id=<?= $join['id_media']; ?>&a=edit" class="btn btn-outline-info">Modifier</a>
            <a href="?id=<?= $join['id_media']; ?>&a=del" onclick="return confirm('Etes-vous sûr?')"
               class="btn btn-outline-danger">Supprimer</a>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>



<?php require_once '../inc/backfooter.inc.php'; ?>