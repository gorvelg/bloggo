<?php
require '../app/Autoloader.php';
App\Autoloader::register();


if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

// Connexion à la base de données
$db = new App\Database('bloggo','bloggoUser','Afturgurgluk77');

ob_start();
if($p === 'home') {
    require '../pages/home.php';
} elseif ($p == 'single'){
    require '../pages/single.php';
} elseif ($p == 'register') {
    require '../pages/register.php';
}

$content = ob_get_clean();

require '../pages/templates/default.php';



