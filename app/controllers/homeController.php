<?php

require ("../app/persistances/blogPostData.php");
require ("../config/database.php");


try{
    $result = lastBlogPosts($pdo);
}catch (Exception $e){
    echo ("Nous avons eu une exception : " . $e->getMessage() . "\n");
}

include "../ressources/views/home.tpl.php";
