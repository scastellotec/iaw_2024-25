// Le estoy diciendo que cuando se cargue la pagina se llama a esta función
window.addEventListener("load", pideRazasPerros);

// Esta función llamará a la URL para recoger todas las razas de perros
function pideRazasPerros(){
    fetch("https://dog.ceo/api/breeds/list/all")
        .then((response) => response.json())
        .then((json) => muestraNombresRazas(json));
}
 
function muestraNombresRazas(json) {
    // Iteramos sobre el json
    for(var clave in json.message) {
        //console.log(clave); // Muestra las palabras "affenpinscher", "african", etc.
        let razasDatalist = document.getElementById("razas")
        razasDatalist.innerHTML +="<option width=300 value='" + clave + "'>";
    }
}

// Mapeo el boton de cargar imagen
let cargaImagen = document.getElementById("cargar");
cargaImagen.addEventListener("click",generarImagen);

// Esta funcion recoge la raza seleccionada, llama a la API y obtiene la IMG, y la muestra
function generarImagen(){
    let razaSeleccionada = document.getElementById("razasInput").value
    pideImagenPerro(razaSeleccionada);
}

function pideImagenPerro(razaUsuario){
    fetch("https://dog.ceo/api/breed/"+razaUsuario+"/images/random")
        .then((response) => response.json())
        .then((json) => muestraImagen(json));
}

function muestraImagen(json){
    let resultado = document.getElementById("resultado");
    resultado.innerHTML = "<img src='"+json.message+"'>";
}






