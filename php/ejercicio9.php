<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Nombre: ".$_POST["Nombre"]."<br>";

        echo "Apellido: ".$_POST["Apellido"]."<br>";

        echo "Sexo: ".$_POST["sexo"]."<br>";

        echo "Estado civil: ".$_POST["ecivil"]."<br>";

        if(isset($_POST["acepto"])){
        echo "Recibir información: SI"."<br>";}else{ echo " Revibir Información: NO "."<br>";};

        if(isset($_POST["acepto1"])){
            echo " Termios y condiciones: SI "."<br>";}else{echo " Termios y condiciones: NO "."<br>";};
    ?>
</body>
</html>