<?php
    require_once '../Twig/vendor/autoload.php';
    $loader = new \Twig\Loader\FilesystemLoader('../Twig/templates');
    $twig = new \Twig\Environment($loader);
    $num = $_GET['num'] ?? 0;
    echo $twig->render('ej01.html.twig', ['name' => 'Agustin']);
    echo $twig->render('ej05.html.twig', ['num' => $num]);
    
?>