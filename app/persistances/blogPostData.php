<?php
function lastBlogPosts(PDO $pdo){
    $querySelectArticlesAndAuthors = "SELECT articles.id AS id,  title, content, name FROM articles JOIN authors ON articles.authors_id = authors.id ORDER BY publication_date DESC LIMIT 10;";
    $arrayArticles = $pdo->query($querySelectArticlesAndAuthors);
    return $arrayArticles;
}

function blogPostById(PDO $pdo,$idArticle){
    $query = "SELECT articles.id AS id,title, content, name FROM articles JOIN authors ON articles.authors_id = authors.id AND articles.id = ?";
    PDOStatement: $stmt = $pdo->prepare($query);
    $stmt -> execute([$idArticle]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // return l'article avec l'auteur de ce dernier
    return $result;
}


function commentsByBlogPost(PDO $pdo, $idArticle){

    //$queryComments = "SELECT comments.content, authors.name FROM comments JOIN articles ON comments.articles_id = articles.id JOIN authors ON comments.authors_id = authors.id AND articles.id = $idArticle";
    $query = "SELECT comments.content, authors.name, comments.id AS id
        FROM comments 
        JOIN articles ON comments.articles_id = articles.id 
        JOIN authors ON comments.authors_id = authors.id AND articles.id = ?";
    PDOStatement : $stmt = $pdo -> prepare($query);
    $stmt -> execute([$idArticle]);
    $arrayComments = array();
    foreach ($stmt as $row){
        $arrayComments[] = array(
            "id" => $row['id'],
            "name" => $row['name'],
            "content" => $row['content']
        );
    }

    //var_dump($arrayComments);
    //return commentaire de l'article avec leur auteur associé
    return $arrayComments;
}

function blogPostCreate(PDO $pdo, $data){
    $queryCreate = "INSERT INTO articles ( title, content, publication_date, end_publication_date, rating, authors_id ) VALUES (?, ?, ?, ?, ?, (SELECT id FROM authors WHERE name = ?) )";
    PDOStatement : $stmt = $pdo -> prepare($queryCreate);
    $stmt -> execute([$data['title'], $data['content'], $data['publication_date'], $data['end_publication_date'], $data['rating'], $data['name']]);
}

function blogPostByIDForModification(PDO $pdo, $idArticle){
    $queryCallForModification = "SELECT articles.id AS id, title, content, end_publication_date, rating, name FROM articles JOIN authors ON articles.authors_id = authors.id AND articles.id = ?";
    PDOStatement : $stmt = $pdo -> prepare($queryCallForModification);
    $stmt -> execute([$idArticle]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function blogPostUpdate(PDO $pdo, $data, $idPost){
    $queryUpdate = "UPDATE articles
        SET id = :id, title = :title, content = :content, end_publication_date = :end_publication_date, rating = :rating
        WHERE id = :id
    ";
    PDOStatement : $stmt = $pdo->prepare($queryUpdate);
    $stmt -> execute(["id"=>$idPost, "title"=>$data['title'], "content"=>$data['content'], "end_publication_date"=>$data['end_publication_date'], "rating"=>$data['rating']]);
}

function blogPostDelete(PDO $pdo, $idArticle){
    $queryDelete = "DELETE FROM articles WHERE id = :id";
    PDOStatement : $stmt = $pdo->prepare($queryDelete);
    $stmt -> execute(["id"=>$idArticle]);
}

function blogLogin(PDO $pdo, $dataUser){
    $queryLogin = "SELECT pseudo, role, password, email FROM authors WHERE email= :email";
    PDOStatement : $stmt = $pdo->prepare($queryLogin);
    $stmt -> execute(["email" => $dataUser['email']]);
    foreach ($stmt as $row){
        $arrayUser = [
            "email" => $row['email'],
            "pwd" => $row['password'],
            "pseudo" => $row['pseudo'],
            "role" => $row['role']
        ];
    }
    if ($arrayUser['pwd'] === $dataUser['pwd']){
        return $arrayUser;
    }else{
        return false;
    }
}

function verificationConnection (PDO $pdo, $cookieEmail){
    $queryVerification = "SELECT password, role FROM authors WHERE email = :email";
    PDOStatement : $stmt = $pdo-> prepare($queryVerification);
    $stmt -> execute(['email' => $cookieEmail]);
    //$result = $stmt->fetch(PDO::FETCH_ASSOC);
    foreach ($stmt as $row){
        $result = [
            "password" => $row['password'],
            "role" => $row['role']
        ];
    }
    return $result;
}

function selectAllCategories(PDO $pdo){
    $querySelectAllCategories = "SELECT id, name FROM categories";
    $stmt = $pdo->query($querySelectAllCategories);
    foreach ($stmt->fetchAll() as $row){
        $categories[] = array(
            "id" => $row['id'],
            "name" => $row['name'],
        );
    }
    return $categories;
}

function blogPostsByCategory(PDO $pdo, $idCategory){
    $queryPostByCategoriy = "
        SELECT articles.id, articles.title, articles.content, authors.name AS author, categories.name AS category
        FROM articles
        INNER JOIN authors ON articles.authors_id = authors.id
        INNER JOIN articles_categories AS a_c ON a_c.articles_id = articles.id
        INNER JOIN categories ON a_c.categories_id = categories.id
        WHERE categories.id = :id;
    ";
    PDOStatement : $stmt = $pdo->prepare($queryPostByCategoriy);
    $stmt -> execute(["id" => $idCategory]);
    $arrayArticlesByCatgegory = array();
    foreach ($stmt->fetchAll() as $row){
        $arrayArticlesByCatgegory[] = [
            "id" => $row['id'],
            "title" => $row['title'],
            "content" => $row['content'],
            "name" => $row['author'],
            "category" => $row['category']
        ];
    }

    return $arrayArticlesByCatgegory;

}

function modifyComment (PDO $pdo, $arrayModifyComment){
    $queryModifyComment = "UPDATE comments
    SET content = :content
    WHERE id = :id
    ";
    PDOStatement : $stmt = $pdo->prepare($queryModifyComment);
    $stmt -> execute(["id"=>$arrayModifyComment['id'], "content"=>$arrayModifyComment['content']]);
}

