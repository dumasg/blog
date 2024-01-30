<?php
    //require "../ressources/views/layouts/header.tpl.php";
    require "../app/controllers/blogHeaderController.php"
?>

<div class="container container-article">
    <div>
        <h1><?= $article['title'] ?></h1>
        <p><?= $article['content'] ?></p>
        <h4><?= $article['name'] ?></h4>
    </div>
    <div class="container-comments">
        <h3>Commentaire : </h3>
        <?php foreach ($comments as $key => $value):  ?>
            <p><?= $value['content'] ?></p>
            <h4><?= $value['name'] ?></h4>
        <?php endforeach; ?>
    </div>
</div>

<?php require "../ressources/views/layouts/footer.tpl.php"; ?>
