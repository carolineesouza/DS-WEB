function validarnumeroParOuImpar(){
    var numero = document.getElementById("numero").value;
    var resultado = document.getElementById("resultado").value;
    if (numero === ""){
        resultado.innerHTML = "Digite um numero";
        return;
    numero = parseInt(numero)
    
    }
}