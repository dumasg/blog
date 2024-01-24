<?php

$routerArray = [
    "accueil"
];

$router = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
$router = $router ?? "accueil";


if(array_search($router, $routerArray) !== false){
    $i = array_search($router, $routerArray);
    require "./" . $routerArray[$i] . ".php";
}else{
    require "./" . "notfound.php";
}