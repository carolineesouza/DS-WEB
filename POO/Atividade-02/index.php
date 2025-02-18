<?php
//classe base pessoa
class Pessoa {
    private $Nome = "carol";
    private $Idade = "16";

    public function getNome(){
        return $this->Nome;
    }

    public function getIdade(){
        return $this->Idade;
    }

    private function ExibirDados(){
        return "nome: {$this->nome} <br>".
                "idade: {$this->idade} <br>";
    }   
}
$humano = new Pessoa();
echo $humano->getNome(). "<br/>";
echo $humano->getIdade(); "<br/>";

class Funcionario extends Pessoa {
    protected float $salario;

    public function __construct(string $nome, int $idade, float $salario) {
        parent::__construct($nome, $idade);
        $this->salario = $salario;
    }

    public function getSalario(): float {
        return $this->salario;
    }

    public function setSalario(float $salario): void {
        $this->salario = $salario;
    }

// Método polimórfico que será sobrescrito nas subclasses
    public function calcularBonus(): float {
        return 0;
    }
}

// Subclasse Gerente que herda de Funcionario
class Gerente extends Funcionario {
    public function calcularBonus(): float {
        return $this->salario * 0.2; // 20% de bônus
    }
}

// Subclasse Desenvolvedor que herda de Funcionario
class Desenvolvedor extends Funcionario {
    public function calcularBonus(): float {
        return $this->salario * 0.1; // 10% de bônus
    }
}

// Exemplo de uso
$gerente = new Gerente("Carlos", 45, 8000);
$dev = new Desenvolvedor("Ana", 30, 5000);

echo "Gerente: " . $gerente->getNome() . "<br>";
echo "Idade: " . $gerente->getIdade() . "<br>";
echo "Salário: R$ " . number_format($gerente->getSalario(), 2, ',', '.') . "<br>";
echo "Bônus: R$ " . number_format($gerente->calcularBonus(), 2, ',', '.') . "<br><br>";

echo "Desenvolvedor: " . $dev->getNome() . "<br>";
echo "Idade: " . $dev->getIdade() . "<br>";
echo "Salário: R$ " . number_format($dev->getSalario(), 2, ',', '.') . "<br>";
echo "Bônus: R$ " . number_format($dev->calcularBonus(), 2, ',', '.') . "<br>";
?>