// Con este codigo paro el comportamiento por defecto del formulario
// El comportamiento por defecto es enviarse
const formulario = document.getElementById("formulario");
formulario.addEventListener("submit",(e)=>{
    if(!val1 || val2!=true || val3!=true || val4!==true){ // !val1 es lo mismo que poner val1!=true
        // Si falla una validacion que no se envie
        e.preventDefault();
    }
});

// Vairables que me controlan que tal las validaciones
let val1 = false;
let val2 = false;
let val3 = false;
let val4 = false;

// Hago la validacion del campo nombre
// Nombre entre 2 y 5 caracteres
let campoNombre = document.getElementById("nombre");
let validacionNombre = document.getElementById("valNombre");
//let validacionNombre = document.getElementsByTagName("li")[0]; En caso que no quieras poner un id
campoNombre.addEventListener("input",validaNombre);
function validaNombre(){
    // Recordar que ".value" recoge el valor escrito del usuario, no el elemento entero
    // Con ".length" averiguo su longitud
    if(campoNombre.value.length >= 2 && campoNombre.value.length <= 5){
        validacionNombre.setAttribute("class","bien");
        val1 = true;
    }else{
        validacionNombre.setAttribute("class","mal");
        val1 = false;
    }
}

//Campo email no debe estar vacio
let campoEmail = document.getElementById("email");
campoEmail.addEventListener("input",validaEmail);
function validaEmail(){
    // Con el trim quito los espacios en blanco
    let valorCampoEmail = campoEmail.value.trim();
    if(valorCampoEmail.length > 0){
        document.getElementById("valEmail").setAttribute("class","bien");
        val2 = true;
    }else{
        document.getElementById("valEmail").setAttribute("class","mal");
        val2 = false;
    }
}

//validaciones de contraseñas
let campoPass = document.getElementById("password");
let campoPassConfirm = document.getElementById("confirm_password");
// Mensajes ed validacion
let validacionPasswordRepetido = document.getElementById("valPass1");
let validacionPasswordLongitud = document.getElementById("valPass2");

//sean iguales
campoPassConfirm.addEventListener("input",compruebaPassIguales);
campoPass.addEventListener("input",compruebaPassIguales);
function compruebaPassIguales(){
    if(campoPass.value == campoPassConfirm.value){
        validacionPasswordRepetido.setAttribute("class","bien");
        val3 = true;
    }else{
        validacionPasswordRepetido.setAttribute("class","mal");
        val3 = false;
    }

    if(campoPass.value.length >= 5){
        validacionPasswordLongitud.setAttribute("class","bien");
        val4 = true;
    }else{
        validacionPasswordLongitud.setAttribute("class","mal");
        val4 = false;
    }
}