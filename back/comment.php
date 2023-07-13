<?php require_once '../config/function.php';


$joinComment_Medias=execute(
    "SELECT c.*, m.* FROM comment c
    INNER JOIN media m
    on c.id_media = m.id_media ORDER BY id_comment DESC")->fetchAll(PDO::FETCH_ASSOC);
$comments = execute("SELECT * FROM comment")->fetchAll(PDO::FETCH_ASSOC);
$medias = execute("SELECT * FROM media")->fetchAll(PDO::FETCH_ASSOC);

if(!empty($_POST)){
    if(isset($_POST['publi'])){

    execute("UPDATE comment SET rating_comment=:rating_comment WHERE id_comment=:id", array(
        ':rating_comment'=> $_POST['publiInput'],
        ':id' => $_POST['id_comment']
    ));}
    $_SESSION['messages']['success'][] = 'Le Commentaire a bien été publié';
    header('location:./comment.php');
    exit();
    }
    if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'del') {

        $success = execute("DELETE FROM comment WHERE id_comment = :id", array(
            ':id' => $_GET['id']
        ));
    
        if ($success) {
            $_SESSION['messages']['success'][] = 'Le Commentaire a bien été supprimé';
            header('location:./comment.php');
            exit;
    
        } else {
            $_SESSION['messages']['danger'][] = 'Problème de traitement, veuillez réitérer';
            header('location:./comment.php');
            exit;
    
    
        }
    
    }
require_once '../inc/backheader.inc.php';
?>

<div class=containBackComment>
<h1 class="text-center"> Moderation commentaires </h1>
<table class="tableau table table-dark table-striped mx-auto mt-3">
<thead>    

<tr>
    <th>pseudo</th>
    <th>commentaire</th>
    <th>état</th>
    <th class="text-center">Actions</th>
</tr>
</thead>
<tbody>
<?php foreach ($joinComment_Medias as $comment): 
    if($comment['activated'] == 0){
    ?>
    
    <tr>
        <td> <?= $comment['nickname_comment']; ?> </td>
        <td> <?= $comment['comment_text']; ?></td>
        
        <td><?php if(isset($_GET['id']) == "publi"){ ?>
            <select class="btn btn-primary mt-2 m-3"  name="etatValue"id="etat_select">
            <option value="<?= $comment['activated'] ;?>"><?= $comment['activated'] ;?></option>
            <option value="<?= 1; ?>">Poster</option>
            </select>
            <button type="submit" name="publi" class="btn btn-warning mt-2 m-3">Valider</button>
            <?php  }  ; ?>
        </td>
        <input type="hidden" name="publiInput" value= "<?= $_POST['etatValue'] ?? '';?>">
        <td class="text-center">
            <a name="btnPubli" href="?id=<?= $comment['id_comment']; ?>&a=publi" class="btn btn-outline-info">Publier</a>
            
            <a  href="?id=<?= $comment['id_comment']; ?>&a=del" onclick="return confirm('Etes-vous sûr?')"
               class="btn btn-outline-danger">Supprimer</a>
        </td>
    </tr>
<?php }; endforeach; ?>
</tbody>
</table>


</div>


<?php require_once '../inc/backfooter.inc.php'; ?>