<?php
//require "../ressources/views/layouts/header.tpl.php";
require "../app/controllers/blogHeaderController.php";
?>

<div class="container container-article">
    <div>
        <div>
            <h1 class="title-article"><?= $article['title'] ?></h1>
        </div>
        <div>
            <p><?= $article['content'] ?></p>
        </div>
        <div>
            <h4><?= $article['name'] ?></h4>
        </div>
    </div>
    <div class="container-comments">
        <h3>Commentaire : </h3>
        <?php foreach ($comments as $key => $value): ?>
            <div class="box-commentaire">
                <h4><?= $value['name'] ?></h4>
                <form action="?action=blogComment&id=<?= $value['id'] ?>&idArticle=<?= $article['id'] ?>" method="post">
                    <?php if (isset($idComment) && $idComment == $value['id']): ?>
                        <input type="text" name="content" id="" value="<?= $value['content'] ?>">
                    <?php else: ?>
                        <p><?= $value['content'] ?></p>
                    <?php endif; ?>
                    <div class="call-to-action-comments">
                        <button type="button" onclick="window.location.href='?action=blogPost&id=<?= $article['id'] ?>&comment=<?= $value['id'] ?>'"
                                class="btn-primary">Edit
                        </button>
                        <?php if (isset($idComment) && $idComment == $value['id']): ?>
                            <button type="submit" class="btn-primary">Save</button>
                        <?php endif; ?>
                        <button class="btn-alerte" disabled>Delete</button>
                    </div>
                </form>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<?php require "../ressources/views/layouts/footer.tpl.php"; ?>
