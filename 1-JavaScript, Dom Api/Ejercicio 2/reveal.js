document.addEventListener("DOMContentLoaded", function () {

const texto = document.getElementById("oculto");

function mostrartexto() { 
    texto.removeAttribute("hidden");
    texto.style.opacity = '1';
} 

setTimeout(mostrartexto, 1000);
})


function hazclick() {
    alert('Secuencia de Autodestruccion actividad, tiene 5 minutos para evacuar. Buena Suerte :)')
}