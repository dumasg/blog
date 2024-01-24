<?php require "../ressources/views/layouts/header.tpl.php";

//var_dump($result);
?>

<div class="container-articles">
    <?php foreach ($result as $key => $value){ ?>
        <a class="card-article" style="text-decoration: none" href="/?action=blogPost&id=<?= $value['id'] ?>">
            <div style="border: 1px solid black; margin-top: 20px">
                <h1>Title : <?= $value['title'] ?></h1>
                <p><?= $value['content'] ?></p>
                <h4>Auteur : <?= $value['name'] ?></h4>
            </div>
        </a>
    <?php } ?>
</div>

<?php require "../ressources/views/layouts/footer.tpl.php"; ?>
