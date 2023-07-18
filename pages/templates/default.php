<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggo</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <nav class="navbar-header">
        <div class="container">
            <a href="?p=home">Accueil</a>
            <a href="?p=single">Articles</a>
            <a href="?p=login">Connexion</a>
            <a href="?p=register">Inscription</a>
        </div>
    </nav>
    <div class="container">
        <?= $content; ?>
    </div>
    
</body>
</html>