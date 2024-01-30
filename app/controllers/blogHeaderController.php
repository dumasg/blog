<?php

require_once ("../app/persistances/blogPostData.php");
require_once ("../config/database.php");

if (isset($_COOKIE['autoConnection'])){
    $dataUser = explode("//", $_COOKIE['autoConnection']);
    var_dump($dataUser);
    try{
        $result = verificationConnection($pdo, $dataUser[0], $dataUser[2]);
        if (($result['password'] !== $dataUser[1]) || $result['role'] !== $dataUser[2]){
            header("Location: /?action=blogDisconnect");
            exit();
        }
    }catch (Exception $e){
        echo ("Nous avons eu une exception : " . $e->getMessage() . "\n");
    }
}

include ("../ressources/views/layouts/header.tpl.php");
