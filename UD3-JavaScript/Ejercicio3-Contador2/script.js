// Mapeo el boton
let boton = document.getElementById("boton");

// Defino comportamiento cada click
boton.addEventListener("click",escribeMensaje);

//variable que lleva la cuenta del numero de vecse
let numeroVeces = 0;

// Defino la función escribeMensaje
function escribeMensaje(){
    numeroVeces++;
    const elementoLi = document.createElement("li");
    elementoLi.textContent = `Has pulsado ${numeroVeces} veces`;
    document.getElementById("listado").appendChild(elementoLi);
    //document.getElementById("listado").innerHTML += "<li>Has pulsado "+numeroVeces+" veces</li>";
}