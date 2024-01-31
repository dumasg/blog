<?php
    //require "../ressources/views/layouts/header.tpl.php";
    require "../app/controllers/blogHeaderController.php";
?>



<div class="container container-articles">
    <h2>Nos articles disponible : </h2>
    <div>
        <?php foreach ($value as $key => $data){ ?>
            <button onclick="window.location.href='?action=blogPostCategory&id=<?= $value[$key]['id'] ?>'" class="btn-primary"><?= $value[$key]['name'] ?></button>
        <?php } ?>
    </div>
    <?php foreach ($articles as $key => $value) { ?>
        <div class="card-article">
            <div class="content-card-article" value="<?=$value['id']?>" onclick="window.location.href=`/?action=blogPost&id=<?= $value['id'] ?>`">
                <h1 class="title-article"><?= $value['title'] ?></h1>
                <p class="content-article"><?= $value['content'] ?></p>
                <div>
                    <h4 class="author-article">Auteur : <?= $value['name'] ?></h4>
                </div>
            </div>
            <?php if (isset($dataUser) && $dataUser[2] == "admin"){ ?>
            <div class="container-call-to-action">
                <div class="call-to-action"
                     onclick="window.location.href=`/?action=blogPostModify&id=<?= $value['id'] ?>`">
                    <img src="../../public/img/icons8-edit.svg" alt="">
                </div>
                <div class="call-to-action"
                     onclick="">
                    <img class="img-delete-article" src="../../public/img/icons8-delete.svg" alt="">
                </div>
            </div>
            <?php } ?>
        </div>

    <?php } ?>
</div>

<?php require "../ressources/views/layouts/footer.tpl.php"; ?>
