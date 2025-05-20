<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pais = [
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

        echo "La moneda de ".$pais["espana"]["nombre"]." es el ".$pais["espana"]["moneda"]
    ?>
</body>
</html>