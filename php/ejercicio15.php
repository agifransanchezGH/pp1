<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Cine(){
        private $salas = [];

        public function __construct() {}

        public function agregarSalas(Sala $sala){$this->sala[] = $sala}

        public function vender($cantidad, $nroSala){$this-> sala[$nroSala] ->ocuparButacas($cantidad);}

        public function mostrarOcupación(){};
    }

    class Sala(){
        private int $numero;
        private int $cantidadButacas;
        private int $butacasOcupadas; 

        public public function __construct($num, $canButacas) {
            $this-> numero = $num;
            $this-> cantidadButacas = $cantButacas;
        }

        public function ocuparButacas($cantidad){
            if ($cantidad > $this-> cantidadButacas){throw new Exception("")}else{}
        };
    

    }
    Cine cine = new Cine();
    for ($i = 0; $i < 3; $i++){
        switch ($i){
            case 1:
                Sala s1 = new Sala(1, 50);
                cine->agergarSala(s1);
                break;
            case 2:
                Sala s2 = new Sala(2, 30);
                cine->agergarSala(s2);
                break;
            case 3:
                Sala s3 = new Sala(3, 40);
                cine->agergarSala(s3);
                break;
        }
    }
    

    ?>
</body>
</html>