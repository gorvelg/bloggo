<?php
require_once '../app/form.php';
$inscription = new Form($_POST);
?>

<form action="#" method="post">
    <?php
    echo $inscription->input('name', 'text');
    echo $inscription->input('surname', 'text');
    echo $inscription->input('username', 'text');
    echo $inscription->input('password', 'password');
    echo $inscription->input('birthday', 'date');
    echo $inscription->submit();
    ?>