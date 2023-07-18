<?php
$post = $db->prepare('SELECT * FROM articles WHERE article_id = ?', [$_GET['id']], 'App\Table\Article', true);
?>

<h1><?= $post->article_titre; ?></h1>

<p><?= $post->article_contenu; ?></p>