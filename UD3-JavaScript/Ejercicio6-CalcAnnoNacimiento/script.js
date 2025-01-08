let botonCalcular = document.getElementById("btnCalcular");

botonCalcular.addEventListener("click",calculaEdad);

function calculaEdad(){
    // Muestro este mensaje para asegurarme que funciona
    console.log("Comenzamos a calcular la edad ...");
    
    // Recoger el dato del formulario
    let campoInput = document.getElementById("inputAnno"); // Esto recoge todo la etiqueta del campo y el valor
    console.log(campoInput);
    let valorCampoInput = campoInput.value; // Con esto solo recojo el valor escrito por el usuario
    console.log(valorCampoInput);

    // Validar que sea un número
    console.log(typeof(valorCampoInput)); // Muestro el tipo de dato
    valorCampoInput = parseInt(valorCampoInput); // Lo transforma a int para poder trabajar con el

    // Restarlo al año actual


    // Mostrar un mensaje que diga “Si naciste en el año 2008 debes tener aproximadamente 16 años”
}