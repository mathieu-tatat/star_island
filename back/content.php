
<?php require_once '../config/function.php';
$pages = execute("SELECT * FROM page")->fetchAll(PDO::FETCH_ASSOC);

$joins = execute("SELECT c.*, p.title_page
FROM content c
INNER JOIN page p ON c.id_page = p.id_page")->fetchAll(PDO::FETCH_ASSOC);


if (!empty($_POST)) {


    if (empty($_POST['title_content']) || empty($_POST['description_content']) || empty($_POST['id_page'])) {

        $error = 'Ces champs sont obligatoire';

    }

    if (!isset($error)) {

        if (empty($_POST['id_content'])) {

           execute("INSERT INTO content (title_content, description_content, id_page) 
            VALUES (:title_content, :description_content,:id_page)"
            , array(
                ':title_content' => $_POST['title_content'],
                ':description_content' => $_POST['description_content'],
                ':id_page' => $_POST['id_page']
            ));

            $_SESSION['messages']['success'][] = 'Content ajouté';
            header('location:./content.php');
            exit();
        }else{
            
                execute("UPDATE content SET title_content=:title, description_content=:description_content, id_page=:id_page WHERE id_content=:id", array(
                    ':id' => $_POST['id_content'],
                    ':title' => $_POST['title_content'],
                    ':description_content' => $_POST['description_content'],
                    ':id_page' => $_POST['id_page']
                ));
        
                $_SESSION['messages']['success'][] = 'Content a bien été modifié';
                header('location: ./page.php');
                exit();
            
        }// fin soumission modification
    }// fin si pas d'erreur

}// fin !empty $_POST
$content = execute("SELECT * FROM content")->fetchAll(PDO::FETCH_ASSOC);

//debug($content);

if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'edit') {

    $content = execute("SELECT * FROM content WHERE id_content=:id", array(
        ':id' => $_GET['id']
    ))->fetch(PDO::FETCH_ASSOC);
    //debug($content);

}


if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'del') {

    $success = execute("DELETE FROM content WHERE id_content=:id", array(
        ':id' => $_GET['id']
    ));

    if ($success) {
        $_SESSION['messages']['success'][] = 'content supprimé';
        header('location:./content.php');
        exit;

    } else {
        $_SESSION['messages']['danger'][] = 'Problème de traitement, veuillez réitérer';
        header('location:./content.php');
        exit;


    }

}

require_once '../inc/backheader.inc.php';
?>
<!-- <pre>
<?= var_dump($joins);?>
</pre> -->
<form action="" method="post" class="w-75 mx-auto mt-5 mb-5">
    <div class="form-group">

        <small class="text-danger">*</small>
        <label for="content_title" class="form-label">Titre de Content</label>
        <input name="title_content" id="id_title_content" placeholder="Titre du content" type="text"
            value="<?= $content['title_content'] ?? ''; ?>" class="form-control">

        <small class="text-danger">*</small>
        <label for="description_content" class="form-label">descritption du content </label>       
        <input name="description_content" id="id_description_content" placeholder="description du content" type="text"
                value="<?= $content['description_content'] ?? ''; ?>" class="form-control">

        <small class="text-danger">*</small>
        <label for="title_page" class="form-label">titre de la page  </label>       
        <select name="id_page" id="id_title_page"  class="form-control" >
            <?php  
                foreach ($pages as $page) { ?>
                <option 
                <?php
                            if(isset($content['id_page']) && $page['id_page'] == $content['id_page']):
                                echo "selected"; 
                            endif;?> 
                            value="<?= $page['id_page'] ?? ''; ?>"> 
                            <?= $page['title_page'] ; ?>  
                </option>
                <?php } ;
            ?>  
        </select>

        <td class="text-center">
        <small class="text-danger"><?= $error ?? ''; ?></small>
    </div>

    <input type="hidden" name="id_content" value="<?= $content['id_content'] ?? ''; ?>">
    <button type="submit" class="btn btn-primary mt-2">Valider</button>
</form>

<table class="table table-dark table-striped w-75 mx-auto">
<thead>    

<tr>
    <th>Titre content</th>
    <th>Description content</th>
    <th>Titre de la page</th>
    <th class="text-center">Actions</th>
</tr>
</thead>
<tbody>
<?php foreach ($joins as $join): ?>
    <tr>
        <td><?= $join['title_content']; ?></td>
        <td id="descr"><?= $join['description_content']; ?></td>
        <td><?= 
                 $join['title_page'] ;            
        ?>
        <td class="text-center">
            <a href="?id=<?= $join['id_content']; ?>&a=edit" class="btn btn-outline-info">Modifier</a>
            <a href="?id=<?= $join['id_content']; ?>&a=del" onclick="return confirm('Etes-vous sûr?')"
               class="btn btn-outline-danger">Supprimer</a>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>



<?php require_once '../inc/backfooter.inc.php'; ?>