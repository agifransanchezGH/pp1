<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Persona{
            private $nombre;
            private $edad;

            public function __construct($nombre, $edad){
                $this->nombre = $nombre;
                $this->edad = $edad; 
            }
            
            public function setNombre($nombre){$this->nombre = $nombre;}
            public function getNombre(){return  $this-> nombre;}

            public function setEdad($edad){$this ->edad = $edad;}
            public function getEdad(){return $this->edad;}
        }

        class Empleado extends Persona{
            private $sueldo;

            public function __construct($nombre, $edad, $sueldo){
                parent::__construct($nombre, $edad);
                $this -> sueldo = $sueldo;
            }
            public function getSueldo(){return $this->sueldo;}
        }

        $persona = new Persona("Juan", 20);
        echo "El nombre de la persona es: ".$persona->getNombre()."<br>";
        echo "El nombre de la persona es: ".$persona->getEdad()."<br>";

        $empleado = new Empleado("Lucas", 25, 20000);
        echo "El nombre de la persona es: ".$empleado->getNombre()."<br>";
        echo "El nombre de la persona es: ".$empleado->getEdad()."<br>";
        echo "El sueldo del empleado es: $".$empleado->getSueldo()."<br>";
    ?>
</body>
</html>