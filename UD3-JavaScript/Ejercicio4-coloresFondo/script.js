// Hay 3 formas de asociar un evento y funcion con un elemento
// La primera sería opiendo onclick="cambiarFondoRojo()"
/*function cambiarFondoRojo(){
    console.log("cambiando color a rojo");
    document.getElementsByTagName("body")[0].setAttribute("style","background-color: red");
}

// La segunda forma (usando el addEventListener)
let botonVerde = document.getElementById("green");

function cambiarFondoVerde(){
    console.log("cambiando color a verde");
    document.getElementsByTagName("body")[0].setAttribute("style","background-color: green");
}

botonVerde.addEventListener("click",cambiarFondoVerde);

// La tercera forma es una arrow-function
let botonAzul = document.getElementById("blue");
botonAzul.addEventListener("click",()=>{
    console.log("cambiando al azul")
    document.getElementsByTagName("body")[0].setAttribute("style","background-color: blue");
});
*/

// La ultima forma de hacerlo

let contenedor = document.getElementById("container")

contenedor.addEventListener("click",pruebaEvento);

function pruebaEvento(e){
    console.log(e);
    console.log(e.target.getAttribute("data-color"));
    let colorTemporal = e.target.getAttribute("data-color");
    document.getElementById("cuerpo").setAttribute("style","background-color: "+colorTemporal);
}