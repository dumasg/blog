<?php

require ("../app/persistances/blogPostData.php");
require ("../config/database.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //var_dump($_POST);

    $args = array(
        "email" => FILTER_SANITIZE_EMAIL,
        "pwd" => FILTER_SANITIZE_SPECIAL_CHARS
    );

    $dataUser = filter_input_array(INPUT_POST, $args);
    $dataUser['pwd'] = hash("sha256", $dataUser['pwd']);

    if (blogLogin($pdo, $dataUser)){
        $cookieString = $dataUser['email'] . "//" . $dataUser['pwd'];
        $cookieDuration = 60*60*24*2;
        setcookie('autoConnection', $cookieString, time() + $cookieDuration);
        header("Location: /");
    }

}

require "../ressources/views/blogLogin.tpl.php";