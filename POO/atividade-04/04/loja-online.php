<?php

abstract class Produto {
    protected string $nome;
    protected float $preco;
    protected int $estoque;
    
    public function __construct(string $nome, float $preco, int $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }
    
    abstract public function calcularDesconto(): float;
    
    public function getNome(): string {
        return $this->nome;
    }
}

class Eletronico extends Produto {
    public function calcularDesconto(): float {
        $precoFinal = $this->preco * 0.90;
        if ($this->estoque < 5) {
            $precoFinal *= 0.90;
        }
        return $precoFinal;
    }
}

class Roupa extends Produto {
    public function calcularDesconto(): float {
        $precoFinal = $this->preco * 0.80;
        if ($this->estoque < 5) {
            $precoFinal *= 0.90;
        }
        return $precoFinal;
    }
}

// Instanciando os produtos
$tv = new Eletronico("Smart TV", 2000, 3);
$camisa = new Roupa("Camisa Polo", 150, 10);

// Exibindo os preços com desconto
echo "Produto: " . $tv->getNome() . " - Preço com desconto: R$ " . $tv->calcularDesconto();
echo "<br>";
echo "Produto: " . $camisa->getNome() . " - Preço com desconto: R$ " . $camisa->calcularDesconto();

?>
