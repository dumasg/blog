<?php

try{
    session_destroy();
    setcookie('autoConnection', null, time() -3600 );
    header("Location: /");
}catch (Exception $e){
    echo ("Nous avons une exception : " . $e->getMessage());
}