<?php

require ("../app/persistances/blogPostData.php");
require ("../config/database.php");

$value = selectAllCategories($pdo);

try{
    $articles = lastBlogPosts($pdo);
}catch (Exception $e){
    echo ("Nous avons eu une exception : " . $e->getMessage() . "\n");
}

require_once "../ressources/views/home.tpl.php";
