<?php 
    abstract class Animal{
        abstract function fazerSom();
        public function mover(){
            return "anda";
        }
    }
    class Cachorro extends Animal{
        public function fazerSom(){
            return "Late";
        }
    }
    class Gato extends Animal{
        public function fazerSom(){
            return "Mia";
        }
    }
    class Passaro extends Animal{
        public function fazerSom(){
            return "Canta";
        }
        public function mover(){
            return "Voa e " . parent::mover();
        }
    }

    $dog = new Cachorro();
    echo "Cachorro faz: " . $dog->fazerSom() . " e " . $dog->mover();
    echo "<br>";
    $cat = new Gato();
    echo "Gato faz: " . $cat->fazerSom() . " e " . $cat->mover();
    $passaro = new Passaro();
    echo "<br>";
    echo "Passáro faz: " . $passaro->fazerSom() . " e " . $passaro->mover();
   
?>