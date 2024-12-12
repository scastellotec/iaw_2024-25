// Para crear un variable usamos let
let cuenta = 0;

// Será llamada cada vez que pulsemos al boton incrementar
function incrementar(){
    // Incrementamos la cuenta actual
    cuenta++;
    // Mostramos el valor por pantalla (y consola por si acaso)
    console.log("Mi cuenta es "+cuenta)
    document.getElementById("contador").innerText = cuenta;
}