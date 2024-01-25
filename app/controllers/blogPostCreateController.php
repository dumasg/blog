<?php

require ("../app/persistances/blogPostData.php");
require ("../config/database.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //var_dump($_POST);
    $date = date("Y-m-d");
    $args = array (
        "title" => FILTER_SANITIZE_SPECIAL_CHARS,
        "content" => FILTER_SANITIZE_SPECIAL_CHARS,
        "name" => FILTER_SANITIZE_SPECIAL_CHARS,
        "end_publication_date" => FILTER_SANITIZE_SPECIAL_CHARS,
        "rating" => FILTER_SANITIZE_NUMBER_INT
    );

    $data = filter_input_array(INPUT_POST, $args);
    $data['publication_date'] = $date;


    foreach ($data as $key => $value){
        if($key == "name" && $value == null){
            $data['name'] = "Anonyme";
        }
    }
    blogPostCreate($pdo, $data);
}


include "../ressources/views/blogPostCreate.tpl.php";
