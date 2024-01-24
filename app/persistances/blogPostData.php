<?php
// Permet de récupérer des articles avec comment paramètres :
    // le titre
    // le contenu
    // l'auteur
function lastBlogPosts($pdo){
    $querySelectArticlesAndAuthors = "SELECT title, content, name FROM articles JOIN authors ON articles.authors_id = authors.id ORDER BY publication_date DESC LIMIT 10;";
    $arrayArticles = array();
    foreach ($pdo->query($querySelectArticlesAndAuthors) as $row ){
        $arrayArticles[] = array(
            "title" => $row['title'],
            "content" => $row['content'],
            "name" => $row['name']
        );
    }
    return $arrayArticles;
}
