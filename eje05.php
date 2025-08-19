<?php
require_once "./vendor/autoload.php";

$loader = new \Twig\Loader\FilesystemLoader("./template");
$twig = new Twig\Environment($loader);
echo $twig->render('eje05.html.twig', ['encabezado' => $_GET['encabezado'], "nombre" => $_GET["nombre"]]);
?>