<?php

//include '../config/database.php';

$routerArray = [
    "homeController"
];

$router = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
$router = $router ?? "homeController";


if(array_search($router, $routerArray) !== false){
    $i = array_search($router, $routerArray);
    require "../app/controllers/" . $routerArray[$i] . ".php";
}else{
    require "./" . "notfound.php";
}