<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    class Tabla{
        private  $celdas = [];

        public function __construct(){
        }

        public function agregarCelda(Celda $c){$this->celdas[] = $c;}

        public function mostrarTabla(){
            for ($i = 0; $i < 10; $i++){ echo $this->celdas[$i]-> getTexto().$i."|"."El número de celda es: ".$this->celdas[$i]->getNroCelda()."<br>";}
            }
        }

    class Celda{
        private $texto;
        private $nroCelda;
        
        public function __construct($texto, $nrocelda){$this->texto = $texto; $this->nroCelda = $nrocelda;}
        
        public function setTexto($texto){$this->texto = $texto;}
        public function getTexto(){return $this->texto;}

        public function setNroCelda($numero){$this->nroCelda = $numero;}
        public function getNroCelda(){return $this->nroCelda;}
    }
    ?>
<table border = "1">
<?php    
    $tabla = new Tabla();
    for ($i = 0; $i < 10; $i++){
        $celda = New Celda("Texto de celda", $i);
        $tabla->agregarCelda($celda);
    }
        $tabla->mostrarTabla();
    ?>
    </table>
</body>
</html>