<?php

require ("../app/persistances/blogPostData.php");
require ("../config/database.php");

$idPost = $router = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);
echo $idPost;

try{
    $article = blogPostById($pdo, $idPost);
    var_dump($article);
}catch (Exception $e){
    echo ("Nous avons eu une exception : " . $e->getMessage() . "\n");
}

try{
    $comments = commentsByBlogPost($pdo, $idPost);
    var_dump($comments);
}catch (Exception $e){
    echo ("Nous avons eu une exception : " . $e->getMessage() . "\n");
}