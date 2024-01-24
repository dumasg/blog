<?php

require 'const.php';
try {
    $pdo = new PDO('mysql:host=localhost;dbname=blog_main', USER, MDP);
    $statement = $pdo->query("SELECT * FROM articles");
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    echo htmlentities($row['title']);
} catch (Eception $e) {
    die('Erreur : ' . $e->getMessage());
}