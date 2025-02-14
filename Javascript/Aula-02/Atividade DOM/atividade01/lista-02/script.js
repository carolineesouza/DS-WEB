//verificar a idade
function verificarIdade() {
    var idade = document.getElementById("numero").value
    var mensagem = document.getElementById("mensagem")
    if (idade >= 18) {
        mensagem.innerHTML = "você é maior de idade"
    } else {
        mensagem.innerHTML = "você é menor de idade"
    }
}

//verificar numero
function verificarNumero() {
    var numero = parseFloat(document.getElementById("numero2").value);
    var resultado = document.getElementById("resultado");
    
    if (numero > 0) {
        resultado.innerHTML = "O número é positivo.";
    } else if (numero < 0) {
        resultado.innerHTML = "O número é negativo.";
    } else {
        resultado.innerHTML = "O número é zero.";
    }
}

//validar login
function validarLogin() {
    var usuario = document.getElementById("usuario").value;
    var senha = document.getElementById("senha").value;
    var mensagem2 = document.getElementById("mensagem2")
    if (usuario === "admin" && senha === "12345") {
        mensagem2.innerHTML = "Bem-vindo, Admin!"
    } else {
        mensagem2.innerHTML = "Usuário ou senha incorretos!"
    }
}

//calcular
function calcular() {
    var num1 = parseFloat(document.getElementById("num1").value);
    var num2 = parseFloat(document.getElementById("num2").value);
    var operacao = document.getElementById("operacao").value;
    var mensagem3 = document.getElementById("mensagem2")
    var resultado2;

    if (isNaN(num1) || isNaN(num2)) {
        mensagem3.innerHTML("Por favor, insira números válidos.");
        return;
    }

    switch (operacao) {
        case "add":
            resultado2 = num1 + num2;
            break;
        case "sub":
            resultado2 = num1 - num2;
            break;
        case "mul":
            resultado2 = num1 * num2;
            break;
        case "div":
            if (num2 === 0) {
                alert("Divisão por zero não é permitida.");
                return;
            }
            resultado2 = num1 / num2;
            break;
        default:
            alert("Operação inválida.");
            return;
    }

    document.getElementById("resultado2").innerText = "Resultado = " + resultado2;
}

//verificar se e par ou impar
function validar() {
    var numero1 = document.getElementById("numero1").value;
    var resultado3 = (numero1 % 2 === 0) ? "Par" : "Ímpar";
    document.getElementById("resultado3").innerText = "O número é " + resultado3;
}
//qual dos tres numeros e o maior 
function encontre(){
    const number1 = parseFloat(document.getElementById("number1").value);
    const number2 = parseFloat(document.getElementById("number2").value);
    const number3 = parseFloat(document.getElementById("number3").value);

    let maior;
    if (number1 >= number2 && number1 >= number3) {
      maior = number1;
    } else if (number2 >= number1 && number2 >= number3) {
      maior = number2;
    } else {
      maior = number3;
    }
  
    document.getElementById("resultado4").textContent = "O maior número é: " + maior;
}   
//lados do triangulo
function tipo() {
   
    const lado1 = parseFloat(document.getElementById("lado1").value);
    const lado2 = parseFloat(document.getElementById("lado2").value);
    const lado3 = parseFloat(document.getElementById("lado3").value);


    if (isNaN(lado1) || isNaN(lado2) || isNaN(lado3) || lado1 <= 0 || lado2 <= 0 || lado3 <= 0 ||
        lado1 + lado2 <= lado3 || lado1 + lado3 <= lado2 || lado2 + lado3 <= lado1) {
        document.getElementById("triangulo").innerHTML = "Valores inválidos ou não formam um triângulo.";
        return;
  }
  
      if (lado1 === lado2 && lado1 === lado3) {
        document.getElementById("triangulo").innerHTML = "O triangulo é equilatero "; 

      } else if (lado1 === lado2 || lado1 === lado3 || lado2 === lado3) {
        document.getElementById("triangulo").innerHTML = "O trianguo é isoceles ";

      } else {
        document.getElementById("triangulo").innerHTML = "O triangulo é escaleno " ; 
      }
    }
