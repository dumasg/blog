<?php

var_dump($_POST);

require("../app/persistances/blogPostData.php");
require("../config/database.php");




if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $idSanityze = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);
    $contentSanityze = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
    $idArticle = filter_input(INPUT_GET, 'idArticle', FILTER_SANITIZE_URL);


    $arrayModifyComment = [
        "id" => $idSanityze,
        "content" => $contentSanityze
    ];

    try{
        modifyComment($pdo, $arrayModifyComment);
        header("Location: /?action=blogPost&id=$idArticle");

    }catch (Exception $e){
        echo ("Exception ! : " . $e->getMessage());
    }
}


