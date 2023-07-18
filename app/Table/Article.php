<?php

namespace App\Table;

class Article {

    public function getURL (){
        return 'index.php?p=article&id=' . $this->article_id;
    }

    public function getExtrait() {
        return $this->article_contenu;
    }
}