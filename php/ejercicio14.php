<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio14</title>
</head>
<body>
<?php
    function validar(String $i): bool{
        if ($i){return true;}else{return false;}
    }   
        function validarNombre(String $nombre){
            if(!validar($nombre)){
                throw new Exception("El nombre no puede estar vacío");
            }else {echo "Nombre validado correctamente: ". $nombre."<br>";}
            }
        
        try{validarNombre($_POST["Nombre"]);
        }catch (Exception $e){echo "Error: ".$e->getMessage()."<br>"; echo "<a href='../html/eje11 copy.html'>Volver al formulario</a>"."<br>";
        }finally{echo "Validación finalizada"."<br>";}

        function validarApellido(String $apellido){
            if(!validar($apellido)){
                throw new Exception("El apellido no  puede estar vacío");
            }else {echo "Apellido validado correctamente: ". $apellido."<br>";}
            }
        
        try{validarApellido($_POST["Apellido"]);
        }catch(Exception $ex){echo "Error: ".$ex->getMessage()."<br>"; echo "<a href='../html/eje11 copy.html'>Volver al formulaio</a>"."<br>";
        }finally{echo "Validación finalizada"."<br>";}
        

    ?>
</body>
</html>