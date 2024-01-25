<?php

require ("../app/persistances/blogPostData.php");
require ("../config/database.php");

$idArticle = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);

try{
    blogPostDelete($pdo, $idArticle);
    header("Location: /");
}catch (Exception $e){
    echo ("Nous avons une exception : " . $e->getMessage());
}