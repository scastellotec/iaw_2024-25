<?php

// Inicio session para cada usuario
session_start();

// Recupero el valor de las partidas ganadas por este usuario
if( isset($_SESSION["numganadas"]) ){
    $numeroPartidasGanadas = $_SESSION["numganadas"];  
}else{
    $numeroPartidasGanadas = 0;
}

// Aseguarme que recibo parametro usuario
if( isset($_REQUEST["opcionUsuario"]) ){
    
    // recoger valor de usuario
    $opcionUser = $_REQUEST["opcionUsuario"];

    // calcular valor aleatorio ordeandor
    $valores = array("piedra", "papel", "tijera");
    $numAleatorio = rand(0,2);
    $opcionComp = $valores[$numAleatorio];

    // Comparar y obtener resultado
    echo "<p>El usuario $opcionUser y la computadora $opcionComp</p>";

    if(($opcionUser == "piedra" && $opcionComp == "papel") ||
        ($opcionUser == "papel" && $opcionComp == "tijera") ||
         ($opcionUser == "tijera" && $opcionComp == "piedra")){
        echo "<p>Has perdido</p>";
    } elseif(($opcionUser == "piedra" && $opcionComp == "tijera") ||
              ($opcionUser == "papel" && $opcionComp == "piedra") ||
                ($opcionUser == "tijera" && $opcionComp == "piedra")){
        echo "<p>Has ganado</p>";
        $numeroPartidasGanadas++;
    } else {
        echo "<p>Has empatado</p>";
    }

    // Mostra mensaje
    echo "<p>Llevas $numeroPartidasGanadas ganadas</p>";

    // actualizo valor en session
    $_SESSION["numganadas"] = $numeroPartidasGanadas;

  
    
}else{
    echo "<p>Faltan parámetros</p>";
}

?>