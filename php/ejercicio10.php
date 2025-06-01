<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Hombre{
        private $nombre;
        private $sueldo;

        function _construct($nombre , $sueldo){
            
            $this->nombre = $nombre;
            
            $this->sueldo = $sueldo;
        }

        function getNombre(){return $this->nombre;}
        function getSueldo(){return $this->sueldo;}

        function pagarImpuesto(){
            echo "Nombre: ".$this->nombre."<br>";
            if ($this->sueldo > 3000){echo "Debe pagar impuestos";}else{echo "No debe pagar impuestos";}
        }
    }

    $hombre = new Hombre("A",5000);
    $hombre -> pagarImpuesto();
    $hombre ->getNombre();
    $hombre ->getSueldo();
    ?>
</body>
</html>