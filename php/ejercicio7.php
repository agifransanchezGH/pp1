<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function volumenCilindro($radio  , $altura){
    $PI = 3.1416;
    $volumen= $PI * $radio * $radio * $altura;
    return $volumen;
    }
    echo volumenCilindro(2 ,4);
    ?>
</body>
</html>