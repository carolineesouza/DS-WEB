console.log("Bom dia, mundo!!");
alert("Bom dia, mundo!!")

    var nome = prompt("Digite o seu nome")
    var sobrenome = prompt("Digite o seu sobrenome")
    
    alert(nome + sobrenome)

    var numero1 = Number.parseFloat(prompt("Digite o primeiro numero"))
    var numero2 = Number.parseFloat(prompt("Digite o segundo numero"))
    //Verificando o tipo de variavel
    console.log(typeof(numero1))
    alert(numero1 + numero2)

    var numero1 = Number.parseFloat(prompt("Digite o primeiro numero"))
    var numero2 = Number.parseFloat(prompt("Digite o segundo numero"))
    //Verificando o tipo de variavel
    console.log(typeof(numero1))
    alert(numero1 - numero2)

    var numero1 = Number.parseFloat(prompt("Digite o primeiro numero"))
    var numero2 = Number.parseFloat(prompt("Digite o segundo numero"))
    //Verificando o tipo de variavel
    console.log(typeof(numero1))
    alert(numero1 * numero2)

    var numero1 = Number.parseFloat(prompt("Digite o primeiro numero"))
    var numero2 = Number.parseFloat(prompt("Digite o segundo numero"))
    //Verificando o tipo de variavel
    console.log(typeof(numero1))
    alert(numero1 / numero2)

    var numero1 = Number.parseFloat(prompt("Digite um numero"))
    //Verificando o tipo de variavel
    console.log(typeof(numero1))
    alert(numero1 **3)

    var numero = Number.parseInt(prompt("Digite a temperatura em F"));
alert((numero - 32) * (5/9));

    var C = parseFloat(prompt("Capital inicial (R$):"));
    var i = parseFloat(prompt("Taxa de juros mensal (%):")) / 100;
    var t = parseInt(prompt("Tempo do investimento (meses):"), 10);

    var M = C * (1 + i) ** t;

    alert("Montante acumulado: R$ " + M.toFixed(2));