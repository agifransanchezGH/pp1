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

            public function mostrar(){
                echo "El nombre de la persona es: ". $this ->nombre;
                echo "<br>";
                echo "Edad de la persona:".$this->edad;
            }
        }

        class Empleado extends Persona{
            private $sueldo;

            public function __construct($nombre, $edad, $sueldo){
                parent::__construct($nombre, $edad);
                $this -> sueldo = $sueldo;
            }
            public function getSueldo(){return $this->sueldo;}

            public function mostrar(){
                echo parent::mostrar()."<br>";
                echo "El sueldo es: $".$this->sueldo;
                
            }
        }

        $persona = new Persona("Juan", 20);
        echo $persona->mostrar()."<br>";

        echo "<br>";
        $empleado = new Empleado("Lucas", 25, 20000);
        echo $empleado->mostrar()."<br>";
    ?>
</body>
</html>