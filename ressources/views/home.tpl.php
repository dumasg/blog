<?php require "../ressources/views/layouts/header.tpl.php"; ?>

<div class="container container-articles">
    <h2>Nos articles disponible : </h2>
    <?php foreach ($result as $key => $value) { ?>
        <div class="card-article">
            <div class="content-card-article" onclick="window.location.href=`/?action=blogPost&id=<?= $value['id'] ?>`">
                <h1 class="title-article"><?= $value['title'] ?></h1>
                <p class="content-article"><?= $value['content'] ?></p>
                <div>
                    <h4 class="author-article">Auteur : <?= $value['name'] ?></h4>
                </div>
            </div>
            <div class="img-edit-article" onclick="window.location.href=`/?action=blogPostModify&id=<?= $value['id'] ?>`">
                <img src="../../public/img/icons8-edit.svg" alt="">
            </div>
        </div>

    <?php } ?>
</div>

<?php require "../ressources/views/layouts/footer.tpl.php"; ?>
