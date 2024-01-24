<?php

require 'const.php';
$queryUser = "SELECT * FROM articles";
$pdo = new PDO('mysql:host=localhost;dbname=blog_main', USER, MDP);
//    $statement = $pdo->query($queryUser);
//    $row = $statement->fetch(PDO::FETCH_ASSOC);
//    echo htmlentities($row['title']);

