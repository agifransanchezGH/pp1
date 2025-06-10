<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio14</title>
</head>
<body>
<?php
    function validar($i){
        if ($i){}else{throw new Exception ("El campo no debe estar vacio");}
}   
        try{validar($_POST["Nombre"]);
        }catch (Exception $i){ echo $i->getMessage();
        }try{validar($_POST["Apellido"]);
        }catch (Exception $i) { $i->getMessage();}
        
    ?>
</body>
</html>