<?php

require ("../app/persistances/blogPostData.php");
require ("../config/database.php");

$idCategory = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_URL);

$value = selectAllCategories($pdo);

$articleByCategory = blogPostsByCategory($pdo, $idCategory);
//var_dump($articleByCategory);


require("../ressources/views/category.tpl.php");

