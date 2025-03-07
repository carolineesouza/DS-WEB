//mudança de cor
const caixa = document.getElementById("caixa");

caixa.addEventListener("mouseenter", function() {
  caixa.style.backgroundColor = "yellow";
  caixa.style.width = "350px";
  caixa.style.height = "350px";
});

caixa.addEventListener("mouseleave", function() {
  caixa.style.backgroundColor = "purple"; 
  caixa.style.width = "300px";
  caixa.style.height = "300px"; 
});

//exibir texto
const campoTexto = document.getElementById("campoTexto");
    const exibicaoTexto = document.getElementById("exibicaoTexto");

   
    campoTexto.addEventListener("input", function() {
      exibicaoTexto.textContent = campoTexto.value; 
    });

//contador de clique e mensagem de boas vindas
var contadorCliques = 0;

function contarCliques() {
    contadorCliques++;
    document.getElementById("contador").textContent = contadorCliques;
}

window.onload = function() {
    const div = document.createElement("div");
    div.innerHTML = "<h1>Bem-vindo à nossa página!</h1>"
    div.style.cssText = "background-color: pink; padding: 5px; text-align: center; font-size: 24px; position: fixed; top: 0; width: 400px";
    document.body.appendChild(div);
};
