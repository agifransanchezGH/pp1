<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Cine{
        private $salas = [];
        private $contador = 0;

        public function __construct() {}

        public function agregarSalas(Sala $sala){$this->salas[] = $sala; $this->contador++;}

        public function vender($nroSala, $cantidad){$this-> salas[$nroSala] ->ocuparButacas($cantidad);}

        public function mostrarOcupación(){
            echo "<table border = '1'>";
            for ($i = 0; $i < $this -> contador; $i++){
                echo "<tr>";
                echo "<td>"."Sala Nro: ".$this -> salas[$i]-> getNumero()."</td>";
                echo "<td>"."Cantidad de butacas ocupadas: ".$this -> salas[$i]-> getCantidadButacasOcupadas()."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }

    class Sala{
        private int $numero;
        private int $cantidadButacas;
        private int $butacasOcupadas; 
        
        public function getNumero(): int {return $this -> numero;}

        public function getCantidadButacasOcupadas(): int {return $this -> butacasOcupadas;}
        
        public function __construct($num, $canButacas) {
            $this-> numero = $num;
            $this-> cantidadButacas = $canButacas;
            $this-> butacasOcupadas = 0;
        }

        public function ocuparButacas($cantidad){
            try{$this-> validarButacas($cantidad);
            }catch (Exception $e){
            echo $e->getMessage();} finally{echo "Proceso de venta finalizado"."<br>";}
        }
        
        private function validarButacas($cantidad){
            if($this -> butacasOcupadas < $this-> cantidadButacas){
                $this->butacasOcupadas += $cantidad;
                echo "Se han ocupado ".$cantidad." butacas de la sala ".$this->numero."<br>";
        }else{ 
            
            $this-> butacasOcupadas = $this-> cantidadButacas;
            throw new Exception("Butacas de la sala comlpletas <br>");
        }
        }
    }
    
    
    $cine = new Cine();
    for ($i = 0; $i <= 3; $i++){
        switch ($i){
            case 0:
                $s1= new Sala(1, 20);
                $cine-> agregarSalas($s1);
                echo "sala agreagda correctamente <br>";
                break;
            case 1:
                $s2 = new Sala(2, 30);
                $cine->agregarSalas($s2);
                echo "sala agreagda correctamente <br>";
                break;
            case 2:
                $s3 = new Sala(3, 40);
                $cine->agregarSalas($s3);
                echo "sala agreagda correctamente <br>";
                break;
        }
    }
    $contador = 0;
    while($contador < 100){
        $salaRandom = mt_rand(0, 2);
        $cantidadButacas = mt_rand(1,2);
        $cine -> vender($salaRandom, $cantidadButacas);
        $contador++;
    }

    $cine -> mostrarOcupación();
    ?>
</body>
</html>