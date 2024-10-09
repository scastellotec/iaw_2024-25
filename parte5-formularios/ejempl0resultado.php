<?php

echo "<p>Pagina de resultado del formulario</p>";
// Muestro todo el contenido que me viene desde el usuario
var_dump($_REQUEST);
// Recojo las variables que me interesan

if(isset($_REQUEST["nombre"]) && isset($_REQUEST["edad"])){
    $nombre = $_REQUEST["nombre"];
    $edad = $_REQUEST["edad"];

    // Imprimo por pantalla el resultado
    echo "<p>Te llamas $nombre y tienes $edad años</p>";
} else {
    echo "<p>Falta algun parametro</p>";
}
?>