<?php require "../ressources/views/layouts/header.tpl.php";

//var_dump($result);
?>

<?php foreach ($result as $key => $value){ ?>
    <div style="border: 1px solid black; margin-top: 20px">
        <h1>Title : <?= $value['title'] ?></h1>
        <p><?= $value['content'] ?></p>
        <h4>Auteur : <?= $value['name'] ?></h4>
    </div>
<?php } ?>

<?php require "../ressources/views/layouts/footer.tpl.php"; ?>
