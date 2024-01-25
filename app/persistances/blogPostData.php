<?php
// Permet de récupérer des articles avec comment paramètres :
    // le titre
    // le contenu
    // l'auteur
function lastBlogPosts(PDO $pdo){
    $querySelectArticlesAndAuthors = "SELECT articles.id AS id,  title, content, name FROM articles JOIN authors ON articles.authors_id = authors.id ORDER BY publication_date DESC LIMIT 10;";
    $arrayArticles = $pdo->query($querySelectArticlesAndAuthors);
//    $arrayArticles = array();
//    foreach ($pdo->query($querySelectArticlesAndAuthors) as $row ){
//        $arrayArticles[] = array(
//            "id" => $row["id"],
//            "title" => $row['title'],
//            "content" => $row['content'],
//            "name" => $row['name']
//        );
//    }
    return $arrayArticles;
}

function blogPostById(PDO $pdo,$idArticle){
    $query = "SELECT title, content, name FROM articles JOIN authors ON articles.authors_id = authors.id AND articles.id = ?";
    PDOStatement: $stmt = $pdo->prepare($query);
    $stmt -> execute([$idArticle]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // return l'article avec l'auteur de ce dernier
    return $result;
}


function commentsByBlogPost(PDO $pdo, $idArticle){

    //$queryComments = "SELECT comments.content, authors.name FROM comments JOIN articles ON comments.articles_id = articles.id JOIN authors ON comments.authors_id = authors.id AND articles.id = $idArticle";
    $query = "SELECT comments.content, authors.name FROM comments JOIN articles ON comments.articles_id = articles.id JOIN authors ON comments.authors_id = authors.id AND articles.id = ?";
    PDOStatement : $stmt = $pdo -> prepare($query);
    $stmt -> execute([$idArticle]);
    $arrayComments = array();
    foreach ($stmt as $row){
        $arrayComments[] = array(
            "name" => $row['name'],
            "content" => $row['content']
        );
    }

    //var_dump($arrayComments);
    //return commentaire de l'article avec leur auteur associé
    return $arrayComments;
}

function blogPostCreate(PDO $pdo, $data){
    var_dump($data);
    $queryCreate = "INSERT INTO articles ( title, content, publication_date, end_publication_date, rating, authors_id ) VALUES (?, ?, ?, ?, ?, (SELECT id FROM authors WHERE name = ?) )";
    PDOStatement : $stmt = $pdo -> prepare($queryCreate);
    $stmt -> execute([$data['title'], $data['content'], $data['publication_date'], $data['end_publication_date'], $data['rating'], $data['name']]);
}