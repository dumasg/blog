<?php

require("../app/persistances/blogPostData.php");
require("../config/database.php");

$idPost = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);

try {
    $article = blogPostByIDForModification($pdo, $idPost);
} catch (Exception $e) {
    echo("Nous avons une exception " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
//    echo $idPost;
//    var_dump($_POST);

    $date = date("Y-m-d");
    $args = array(
        "title" => FILTER_SANITIZE_SPECIAL_CHARS,
        "content" => FILTER_SANITIZE_SPECIAL_CHARS,
//        "name" => FILTER_SANITIZE_SPECIAL_CHARS,
        "end_publication_date" => FILTER_SANITIZE_SPECIAL_CHARS,
        "rating" => FILTER_SANITIZE_SPECIAL_CHARS
    );

    $data = filter_input_array(INPUT_POST, $args);
    try{
        blogPostUpdate($pdo, $data, $idPost);
        header("Location: /");
    }catch (Exception $e){
        echo ("Nous avons une exception : " . $e->getMessage());
    }
}

include "../ressources/views/blogPostUpdate.tpl.php";
