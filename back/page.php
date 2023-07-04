<?php require_once '../config/function.php';


if (!empty($_POST)) {


    if (empty($_POST['title_page']) || empty($_POST['page_url'])) {

        $error = 'Ces champs sont obligatoire';

    }

    if (!isset($error)) {

        if (empty($_POST['id_page']) && empty($_POST['id_url'])) {


           execute("INSERT INTO page (title_page, url) VALUES (:title_page, :url)", array(
                ':title_page' => $_POST['title_page'],
                ':url' => $_POST['page_url']

            ));

            $_SESSION['messages']['success'][] = 'Page ajouté';
            header('location:./page.php');
            exit();
        }// fin soumission en insert
        else {
            
            execute("UPDATE page SET title_page=:title, url = :url WHERE id_page=:id", array(
                ':id' => $_POST['id_page'],
                ':title' => $_POST['title_page'],
                ':url' => $_POST['page_url']
            ));

            $_SESSION['messages']['success'][] = 'Page à bien etait modifié';
            header('location:./page.php');
            exit();


        }// fin soumission modification
    }// fin si pas d'erreur

}// fin !empty $_POST

$pages = execute("SELECT * FROM page")->fetchAll(PDO::FETCH_ASSOC);

//debug($pages);

if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'edit') {

    $page = execute("SELECT * FROM page WHERE id_page=:id", array(
        ':id' => $_GET['id']
    ))->fetch(PDO::FETCH_ASSOC);
    //debug($page);


}

if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'del') {

    $success = execute("DELETE FROM page WHERE id_page=:id", array(
        ':id' => $_GET['id']
    ));

    if ($success) {
        $_SESSION['messages']['success'][] = 'page supprimé';
        header('location:./page.php');
        exit;

    } else {
        $_SESSION['messages']['danger'][] = 'Problème de traitement, veuillez réitérer';
        header('location:./page.php');
        exit;


    }

}

require_once '../inc/backheader.inc.php';
?>

<form action="" method="post" class="w-75 mx-auto mt-5 mb-5">
    <div class="form-group">

        <small class="text-danger">*</small>
        <label for="page_title" class="form-label">Titre de la page</label>
        <input name="title_page" id="id_page" placeholder="Titre de la page" type="text"
            value="<?= $page['title_page'] ?? ''; ?>" class="form-control">

        <small class="text-danger">*</small>
        <label for="url_page" class="form-label">URL de la page</label>       
        <input name="page_url" id="id_url" placeholder="Url de la page" type="text"
                value="<?= $page['url'] ?? ''; ?>" class="form-control">

        <small class="text-danger"><?= $error ?? ''; ?></small>
    </div>

    <input type="hidden" name="id_page" value="<?= $page['id_page'] ?? ''; ?>">
    <input type="hidden" name="id_url" value="<?= $page['url'] ?? ''; ?>">
    <button type="submit" class="btn btn-primary mt-2">Valider</button>
</form>

<table class="table table-dark table-striped w-75 mx-auto">
<thead>
<tr>
    <th>Titre</th>
    <th>URL</th>
    <th class="text-center">Actions</th>
</tr>
</thead>
<tbody>
<?php foreach ($pages as $page): ?>
    <tr>
        <td><?= $page['title_page']; ?></td>
        <td><?= $page['url']; ?></td>
        <td class="text-center">
            <a href="?id=<?= $page['id_page']; ?>&a=edit" class="btn btn-outline-info">Modifier</a>
            <a href="?id=<?= $page['id_page']; ?>&a=del" onclick="return confirm('Etes-vous sûr?')"
               class="btn btn-outline-danger">Supprimer</a>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>



<?php require_once '../inc/backfooter.inc.php'; ?>