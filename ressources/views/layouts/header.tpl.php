<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>blog</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="/">Mon Blog</a></li>
                <li><a href="/?action=blogPostCreate">Créer un article</a></li>
            </ul>
            <ul>
                <button onclick="window.location.href='/?action=blogLogin'" class="btn-primary">Connexion</button>
                <?php if (isset($_COOKIE['autoConnection'])): ?>
                    <button class="btn-alerte" onclick="window.location.href='?action=blogDisconnect'">Déconnexion</button>
                <?php else : ?>
                    <button class="btn-secondary" disabled>Inscription</button>
                <?php endif; ?>
            </ul>
        </nav>
    </header>