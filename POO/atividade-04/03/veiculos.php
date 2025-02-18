<?php 
    class Veiculo {
        public $marca;
        public $modelo;
        private $velocidade;
        public function getVelocidade() {
            return $this->velocidade;
        }
        public function setVelocidade($n) {
            $this->velocidade = $n;
        }
    }
    class Carro extends Veiculo{
        public function acelerar(){
            return "Pedal";
        }
    }
    class Moto extends Veiculo{
        public function acelerar(){
            return "Punho";
        }
    }
    $uno = new Carro();
    $uno->setVelocidade(180);
    echo "Metodo de acelerar: " . $uno->acelerar() . " velocidade máxima: " . $uno->getVelocidade() . "Km/h";
    echo "<br>";
    $honda = new Moto();
    $honda->setVelocidade(230);
    echo "Metodo de acelerar: " . $honda->acelerar() . " velocidade máxima: " . $honda->getVelocidade() . "Km/h";
?>