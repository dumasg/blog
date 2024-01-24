<?php
// Permet de récupérer des articles avec comment paramètres :
    // le titre
    // le contenu
    // l'auteur
function lastBlogPosts($pdo){
    $querySelectArticlesAndAuthors = "SELECT articles.id, title, content, name FROM articles JOIN authors ON articles.authors_id = authors.id ORDER BY publication_date DESC LIMIT 10;";
    $arrayArticles = array();
    foreach ($pdo->query($querySelectArticlesAndAuthors) as $row ){
        $arrayArticles[] = array(
            "id" => $row["id"],
            "title" => $row['title'],
            "content" => $row['content'],
            "name" => $row['name']
        );
    }
    return $arrayArticles;
}

function blogPostById($pdo,$idArticle){
    $queryArticle = "SELECT title, content, name FROM articles JOIN authors ON articles.authors_id = authors.id AND articles.id = $idArticle";
    $statement = $pdo->query($queryArticle);
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    // return l'article avec l'auteur de ce dernier
    return $result;
}


function commentsByBlogPost($pdo, $idArticle){
    $data = $idArticle;
    echo "id ds comments : " . $data;
    //return commentaire de l'article avec leur auteur associé
    return $data;
}