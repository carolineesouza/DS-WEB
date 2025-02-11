<?php

class Relógio{
    public $marca;
    public $tipo; 
    public $cor;
    public $modelo;
    public $tamanho_da_tela;

    public function mostrar_a_hora(){
    }
    public function alarme(){
    }
    public function cronometrar(){
        return "você cronometrou o tempo"
    }
}

class Livro{
    public $titulo;
    public $quantidade_de_pagina; 
    public $escritor;
    public $leitor;
    public $genero;

    public function abrir_livro(){
    }
    public function marcar_pagina(){
    }
    public function fechar_livro(){
        return "você fechou o livro"
    }
}

class Bicicleta{
    public $modelo;
    public $cor; 
    public $pedal;
    public $guidao;
    public $numero_de_marchas;

    public function pedalar(){
    }
    public function trocar_de_marcha(){
    }
    public function frear(){
        return "você freiou"
    }
}

class Geladeira{
    public $marca;
    public $Capacidade_de_litros; 
    public $tipo;
    public $cor;
    public $peso;

    public function resfriar(){
    }
    public function controlar_temperatura(){
    }
    public function ascender_luz_interna(){
    }
}

class Cadeira{
    public $material;
    public $cor;
    public $altura;
    public $peso_suportado;
    public $tipo;

    public function sentar(){
    }
    public function girar(){
    }
    public function reclinar(){
        return "você reclinou"
    }
}