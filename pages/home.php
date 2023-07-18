<?php 
    
    foreach($db->query('SELECT * FROM articles', 'App\Table\Article') as $post): 
    ?>

            <h2><a href="<?php $post->getUrl() ?>"><?= $post->article_titre; ?></a></h2>

            <p><?= $post->getExtrait(); ?></p>

            <?php var_dump($post); ?>
    <?php endforeach ?>

