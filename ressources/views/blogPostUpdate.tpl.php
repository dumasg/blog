<?php
    //require "../ressources/views/layouts/header.tpl.php";
    require "../app/controllers/blogHeaderController.php"
?>

<div class="container container-article">
    <h1>Modification de l'article </h1>
    <form class="formulaire" action="?action=blogPostModify&id=<?= $article['id'] ?>" method="post">
        <div>
            <label for="title">Titre de l'article</label>
            <input id="title" name="title" type="text" value="<?=$article['title']?>">
        </div>
        <div>
            <label for="content">Titre de l'article</label>
            <textarea name="content" id="content" cols="30" rows="10"><?=$article['content']?></textarea>
        </div>
<!--        <div>-->
<!--            <label for="name">Auteur de l'article</label>-->
<!--            <input id="name" name="name" type="text" value="--><?php //=$article['name']?><!--">-->
<!--        </div>-->
        <div>
            <label for="end_publication_date">Date de fin de publication</label>
            <input id="end_publication_date" name="end_publication_date" type="date" value="<?=$article['end_publication_date']?>">
        </div>
        <div>
            <label for="rating">Note d'intérêt : <span id="rating-html"></span> </label>
            <input id="rating" name="rating" type="range" min="0" max="5" value="<?=$article['rating']?>">
        </div>
        <div>
            <button type="submit">Envoyer !</button>
        </div>
    </form>
</div>

<?php require "../ressources/views/layouts/footer.tpl.php"; ?>
