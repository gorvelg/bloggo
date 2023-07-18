<?php

namespace App\Table;

class Article {

    public function __get($key) {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getURL (){
        return '?p=article&id=' . $this->article_id;
    }

    public function getExtrait() {
        $html = '<p>' . substr($this->article_contenu, 0, 100) . '...</p>';
        $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
        return $html;
    }
}