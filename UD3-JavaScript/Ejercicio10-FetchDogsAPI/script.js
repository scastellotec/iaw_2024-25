// Le estoy diciendo que cuando se cargue la pagina se llama a esta función
window.addEventListener("load", pideRazasPerros);

// Esta función llamará a la URL para recoger todas las razas de perros
function pideRazasPerros(){
    fetch("https://dog.ceo/api/breeds/list/all")
        .then((response) => response.json())
        .then((j) => muestraNombresRazas(j));
}

// Recorre el JSON y rellena el datalist con la información de las razas
function muestraNombresRazas(b) {
    // Iteramos sobre el json
    for(var clave in b.message) {
        //console.log(clave); // Muestra las palabras "affenpinscher", "african", etc.
        let razasDatalist = document.getElementById("razas")
        razasDatalist.innerHTML +="<option value='" + clave + "'>";
    }
}

// Mapeo el boton de cargar imagen
let cargaImagen = document.getElementById("cargar");
cargaImagen.addEventListener("click",generarImagen);

// Esta funcion recoge la raza seleccionada, llama a la API y obtiene la IMG, y la muestra
function generarImagen(){
    let razaSeleccionada = document.getElementById("razasInput").value;
    fetch("https://dog.ceo/api/breed/"+razaSeleccionada+"/images/random")
        .then((response) => response.json())
        .then((x) => muestraImagen(x));
}

// Muestro la imagen en el body del HTML
function muestraImagen(w){
    let resultado = document.getElementById("resultado");
    resultado.innerHTML = "<img src='"+w.message+"'>";
}






