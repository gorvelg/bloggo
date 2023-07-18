<?php 
    
    foreach($db->query('SELECT * FROM articles', 'App\Table\Article') as $post): 
    ?>

            <h2><a href="<?php $post->url ?>"><?= $post->article_titre; ?></a></h2>

            <p><?= $post->extrait; ?></p>

    <?php endforeach ?>

