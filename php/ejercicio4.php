<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $verdura = "Comer verduras";
    $sano = " es realmente sano.<br>";
    $cadena = $verdura . $sano;
    echo $cadena;
    
    $palabra = strpos($cadena , "verduras");
    echo " La palabra ´verduras´ comienza en la posición: ".$palabra;
    ?> 
</body>
</html>