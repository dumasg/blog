<?php require "../ressources/views/layouts/header.tpl.php"; ?>

<div class="container container-articles">
    <h2>Nos articles disponible : </h2>
    <?php foreach ($result as $key => $value){ ?>
        <a class="card-article" style="text-decoration: none" href="/?action=blogPost&id=<?= $value['id'] ?>">
            <div class="content-card-article">
                <h1>Title : <?= $value['title'] ?></h1>
                <p><?= $value['content'] ?></p>
                <div>
                    <h4>Auteur : <?= $value['name'] ?></h4>
                </div>
            </div>
        </a>
    <?php } ?>
</div>

<?php require "../ressources/views/layouts/footer.tpl.php"; ?>
