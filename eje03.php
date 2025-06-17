<?php
    require_once "./vendor/autoload.php";
    $loader = new \Twig\Loader\FilesystemLoader("./template");
    $twig = new Twig\Environment($loader);
    
    
    $paises = [
        "espana" =>
        [
        "nombre" => "España",
        "lengua" => "Castellano",
        "moneda" => "Euro"
        ],
        "usa" =>
        [
        "nombre" => "USA",
        "lengua" => "Inglés",
        "moneda" => "Dolar"
        ]
        ];
        echo $twig->render('eje03.html.twig', ['paises' => $paises]);
?>