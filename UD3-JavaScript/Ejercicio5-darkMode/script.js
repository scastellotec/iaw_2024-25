// Mapeo en una variable el boton HTML
let boton = document.getElementById("dark-change");

// Declaro la función de lo que deseo que pase
function activaModoOscuro(){
    let elementoBody = document.getElementsByTagName("body")[0];

    if(elementoBody.getAttribute("class") == "night"){
        elementoBody.setAttribute("class","day");
        boton.setAttribute("class","noactive");
    }else{
        elementoBody.setAttribute("class","night");
        boton.setAttribute("class","active");
    }
}

// Cuando hagan click en ese boton que se active la funcion
boton.addEventListener("click", activaModoOscuro);