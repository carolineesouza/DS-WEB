<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Pessoa {
    protected string $nome;
    protected int $idade;
    
    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    public function getNome(): string {
        return $this->nome;
    }
    
    public function getIdade(): int {
        return $this->idade;
    }
}

class Funcionario extends Pessoa {
    protected float $salario;
    
    public function __construct(string $nome, int $idade, float $salario) {
        parent::__construct($nome, $idade);
        $this->salario = $salario;
    }
    
    public function getSalario(): float {
        return $this->salario;
    }
    
    public function calcularBonus(): float {
        return 0; // Método genérico a ser sobrescrito
    }
}

class Gerente extends Funcionario {
    public function calcularBonus(): float {
        return $this->salario * 0.2;
    }
}

class Desenvolvedor extends Funcionario {
    public function calcularBonus(): float {
        return $this->salario * 0.1;
    }
}

// Exemplo de uso
$gerente = new Gerente("Carlos", 40, 10000);
$desenvolvedor = new Desenvolvedor("Ana", 30, 8000);

echo "Gerente: " . $gerente->getNome() . " - Bônus: R$ " . $gerente->calcularBonus() . "\n";
echo "Desenvolvedor: " . $desenvolvedor->getNome() . " - Bônus: R$ " . $desenvolvedor->calcularBonus() . "\n";

?>

</body>
</html>