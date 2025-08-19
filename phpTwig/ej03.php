<?php
require_once '../Twig/vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('../Twig/templates');
$twig = new \Twig\Environment($loader);

$paises = [
    'España' =>[
            'nombre' => 'España',
            'lengua' => 'Castellano',
            'moneda' => 'Euro'
        ],
    "USA" =>[
            "nombre" => "USA",
            "lengua" => "Inglés",
            "moneda" => "Dolar"
        ]
];

echo $twig->render('ej03.html.twig', ['paises' => $paises]);
?>