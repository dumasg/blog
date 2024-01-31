<?php

//include '../config/database.php';

$routerArray = [
    "home",
    "blogPost",
    "blogPostCreate",
    "blogPostModify",
    "blogPostDelete",
    "blogLogin",
    "blogDisconnect",
    "blogPostCategory",
    "blogComment",
    "fluxRss"
];

$router = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
$router = $router ?? "home";


if(array_search($router, $routerArray) !== false){
    $i = array_search($router, $routerArray);
    require ("../app/controllers/" . $routerArray[$i] . "Controller.php");
}else{
    require ("../ressources/views/errors/" . "404.php");
}