// Seleccionar los marcadores
let scoreA = document.getElementById("score-a");
let scoreB = document.getElementById("score-b");

// Prueba para ver que podemos cambiar el contenido del marcador
// scoreA.innerText = 5;

function addScoreA(a){
    // Recuperar el valor del marcador actual
    let tempScoreA = scoreA.innerText;

    // Muestro el tipo de dato que es
    console.log(typeof(tempScoreA));
    // Me aseguro que lo lee como un entero
    tempScoreA = parseInt(tempScoreA);
    // Vuelvo a mostrar el tipo de dato que es
    console.log(typeof(tempScoreA));

    // Incrementarlo
    tempScoreA += a;
    // Mostrarlo en el marcador
    scoreA.innerText = tempScoreA;
}

function addScoreB(a){
    // Recuperar el valor del marcador actual
    let tempScoreB = parseInt(scoreB.innerText);
    // Incrementarlo
    tempScoreB += a;
    // Mostrarlo en el marcador
    scoreB.innerText = tempScoreB;
}

// Creo las variables para la cuenta atras
let minutos = 0;
let segundos = 15;

// Mapeo los indicadores de segundos y minutos
let marcadorMinutos = document.getElementById("min");
let marcadorSegundos = document.getElementById("secs");
let temporizador;

//Botones iniciar y parar
let botonInicio = document.getElementById("start-btn");
let botonPausa = document.getElementById("pause-btn");

//Creo un intervalo que va a ejecutar la funcion especificada de forma indefinida
//y con un espacio de tiempo indicado.
function iniciaCuentaAtras(){
    botonInicio.disabled = true;
    botonPausa.disabled = false;
    temporizador = setInterval(restaTiempo, 1000);
}

// Voy a necesitar una funcion que reste los minutos y segundos y lo muestre.
function restaTiempo(){

    if(segundos==0 && minutos==0){
        pararCuentaAtras();
    }else{
        // resta los segundos
        segundos--;
        // los muestra en el marcador
        if(segundos<10){
            marcadorSegundos.innerText = "0"+segundos;
        }else{
            marcadorSegundos.innerText = segundos;
        }
    }
}

// Funcion para parar el intervalo (la cuenta atras)
function pararCuentaAtras(){
    botonInicio.disabled = false;
    botonPausa.disabled = true;
    clearInterval(temporizador);
}
