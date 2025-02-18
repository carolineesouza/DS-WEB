<?php

class Documento {
    private string $numero;

    public function getNumero(): string {
        return $this->numero;
    }

    public function setNumero(string $numero): void {
        $this->numero = $numero;
    }
}

class CPF extends Documento {
    public function validar(): bool {
        $cpf = preg_replace('/[^0-9]/', '', $this->getNumero());
        
        if (strlen($cpf) != 11 || preg_match('/^(\d)\1{10}$/', $cpf)) {
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            $d = 0;
            for ($c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$t] != $d) {
                return false;
            }
        }

        return true;
    }
}

$cpfValido = "123.456.789-09";
$cpfInvalido = "111.111.111-11";

$meuCPF = new CPF();
$meuCPF->setNumero($cpfValido);
$validacao = $meuCPF->validar() ? "Válido" : "Inválido";

?>
