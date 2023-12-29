document.addEventListener("DOMContentLoaded", function () {

const texto = document.getElementById("oculto");

function mostrartexto() { 
    texto.removeAttribute("hidden");
    texto.style.opacity = '1';
} 

setTimeout(mostrartexto, 1000);
})

//ejercicio 2
function hazclick() {
    alert('Secuencia de Autodestruccion actividad, tiene 5 minutos para evacuar. Buena Suerte :)').alert
}

//ejercicio 3


function obtenerrespuesta(){
    let apiurl = 'https://api.chucknorris.io/jokes/random'

    fetch(apiurl)
    .then(response => response.json())
    .then(data => {
        let section = document.getElementById('section');
        let nuevochiste = document.createElement('p');
        section.innerHTML += data.value;
        section.appendChild(nuevochiste);
    })
}

//esta es una funcion reutilizable

function realizarllamada() {
    function realizarllamadaAjax(configuracion) {
        return new Promise((resolve, reject) => {
            let xhr = new XMLHttpRequest();
            xhr.open(configuracion.method || 'GET', configuracion.url);

            xhr.onload = function() {
                if(xhr.status >= 200 && xhr.status < 300) {
                    resolve(xhr.responseText)
                } else {
                    reject(new Error('Error: ${xhr.status}'));
                }

            };

            xhr.onerror = function() {
                reject(new Error('HUBO UN ERROR EN LA SOLICITUD'));
            };

            xhr.send(configuracion.data);
                
            });
    }

    realizarllamadaAjax({
        method: 'GET',
        url: 'https://api.chucknorris.io/jokes/random'
    })
    .then(respuesta => {

        let chiste = JSON.parse(respuesta.value)
        let sectionresultado = document.getElementById('section');

        let nuevoparrafo = document.createElement('p');
        nuevoparrafo.textContent = chiste

        sectionresultado.appendChild(nuevoparrafo);
    })
    .catch(error => {
        alert('Error en la llamada Ajax: ' + error.message);

        let sectionresultado = document.getElementById('section');
        section.classlist.add('error');

    });
}

async function respuestagithub(busqueda) {
    try {
        const response = await fetch('https://api.github.com/search/repositories?q=javascript');

        if(!response.ok) {
            throw new Error('no se pudo obtener la lista de repositorios');
        }

        const data = await response.json();
        return data.items;
    } catch (error) {
        alert('No se pudo obtener los repositorios:', error);
        return [];
    }
}

async function mostrarrepositorios(busqueda) {
    const repos = await respuestagithub(busqueda);
    const listarepos = document.getElementById('repositorios');

    listarepos.innerHTML = '';

    if(repos.length > 0) {
        repos.foreach(repo => {
            const itemli = document.createElement('ul');
            itenli.textContent = repo.full_name;
            listarepos.appendChild(itemli);
        }); }
        else {
            const noResultsitem = document.createElement('li');
            noResultsitem.textContent = 'no se encontro repositorio.';
            listarepos.appendChild(noResultsitem);
        }
    }


function buscarrep(termino) {
    mostrarrepositorios(termino);
}


const datos = [
    ['Nombre', 'Edad', 'Genero'],
    ['Pablo', '30', 'Masculino'],
    ['Alejandra', '28', 'Femenino'],
    ['Gaston', '25', 'Masculino'],
]

function creartabla(datos) {
    const tabla = document.createElement('table');

    datos.forEach((filaDatos,indiceFila) => {
        const fila = document.createElement('tr');

        filaDatos.forEach((dato) => {
            const celda = indiceFila === 0 ? document.createElement('th') : document.createElement('td');
            const textoCelda = document.createTextNode(dato);

            celda.appendChild(textoCelda);
            fila.appendChild(celda);
        });

        tabla.appendChild(fila);

        document.body.appendChild(tabla);
    })
}

creartabla(datos);