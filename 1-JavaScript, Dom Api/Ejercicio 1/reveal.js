document.addEventListener("DOMContentLoaded", function () {

const texto = document.getElementById("oculto");

function mostrartexto() { 
    texto.removeAttribute("hidden");
    texto.style.opacity = '1';
} 

setTimeout(mostrartexto, 1000);
})


//funcion para realizar el fade in