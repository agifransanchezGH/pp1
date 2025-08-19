<?php
    require_once '../Twig/vendor/autoload.php';
    $loader = new \Twig\Loader\FilesystemLoader('../Twig/templates');
    $twig = new \Twig\Environment($loader);
    echo $twig->render('ej01.html.twig', ['name' => 'Agustin']);
?>