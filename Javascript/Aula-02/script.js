//window.document.write(window.document.URL);
//primeiro exemplo
var p1 = window.document.getElementsByTagName('p')[0]
document.getElementById("quarto-paragrafo").innerHTML = p1.innerText;

//segundo exemplo
document.getElementById("teste").innerHTML = "Hello Word";

//terceiro exemplo
var classes = document.getElementsByClassName("exemplo");
classes[0].innerHTML = "Hello Word!";

document.querySelector("p").style.backgroundColor = "red"
document.querySelector("p#parágrafo").style.backgroundColor = "blue"

function alertDeClique(){
    alert("Você clicou no botão")
}

function calcular(){
    var numero1 = document.getElementById("numero1").value;
    var numero2 = document.getElementById("numero2").value;

    //Convertendo numeros
    console.log(typeof numero1);
    var numero1 = Number.parseInt(numero1);
    var numero2 = Number.parseInt(numero2);
    console.log(typeof numero1);

    var resultado = numero1+numero2;

    document.getElementById("resultado").innerHTML = "Resultado: "+resultado;
}
