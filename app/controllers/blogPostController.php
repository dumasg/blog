<?php

require ("../app/persistances/blogPostData.php");
require ("../config/database.php");

$idPost = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);
$idComment = filter_input(INPUT_GET, 'comment', FILTER_SANITIZE_URL);

try{
    $article = blogPostById($pdo, $idPost);
    //var_dump($article);
}catch (Exception $e){
    echo ("Nous avons eu une exception : " . $e->getMessage() . "\n");
}

try{
    $comments = commentsByBlogPost($pdo, $idPost);
    //var_dump($comments);
}catch (Exception $e){
    echo ("Nous avons eu une exception : " . $e->getMessage() . "\n");
}

include "../ressources/views/article.tpl.php";