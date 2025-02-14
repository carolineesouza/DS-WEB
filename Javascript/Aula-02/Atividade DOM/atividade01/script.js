function Ola(){
    var nome = document.getElementById("nome").value;
    var mensagem = " Olá, " + nome + " Seja bem-vindo!";
    document.getElementById("mensagem").innerHTML = mensagem;
}

function validarParOuImpar() {
    var numero = document.getElementById("numero").value;
    var resultado = (numero % 2 === 0) ? "Par" : "Ímpar";
    document.getElementById("resultado").innerText = "O número é " + resultado;
}

function converterCaixaAlta() {
    var texto = document.getElementById("texto").value;
    document.getElementById("textoResultado").innerText = texto.toUpperCase();
}

function calcularPorcentagem() {
    var valor = parseFloat(document.getElementById("valor").value);
    var porcentagem = parseFloat(document.getElementById("porcentagem").value);
    var resultado =  (valor * (porcentagem / 100));
    document.getElementById("resultadoPorcentagem").innerText = "Valor final: " + resultado;
}

function mudarCor() {
    var div = document.getElementById("minhaDiv");
    div.className = "corNova";
}