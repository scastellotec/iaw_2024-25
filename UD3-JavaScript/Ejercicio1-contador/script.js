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

function guardar(){
    document.getElementById("guardarAnteriores").innerText += " "+cuenta;
    document.getElementById("contador").innerText = 0;

    // Cada vez que guardas también sumamos al total
    // La función parseInt(...) fuerza a que el dato sea leido como un entero
    let total = parseInt(document.getElementById("total").innerText); 
    // Muestra el tipo de dato de la variable
    console.log(typeof(total)); 
    total += cuenta;
    document.getElementById("total").innerText = total;

    // Reiniciamos la cuenta
    cuenta = 0;
}