<?php

//Me conecto a la BBDD y hago cosas
include("conexionBBDD.php");

// Recojo los parámetros enviados  
$idUsuario =$_REQUEST['iduser'];

// Construyo la consulta
$sql = "delete from usuarios where ID = $idUsuario";

// ejecuto la consulta
$conn->query($sql);
// Cierro la conexión
$conn->close();

?>