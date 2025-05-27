<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_GET["num1"] > $_GET["num2"]){
        $mayor = "El nuemro ".$_GET["num1"]." es mayor";
            echo $mayor;
        }else{
            $mayor = "El nuemro ".$_GET["num2"]." es mayor";
            echo $mayor;
        }
    ?>
</body>
</html>