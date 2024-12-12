<?php
    // Crear una conexión
    include("bbdd_conexion.php");

    // Recojo los parámetros enviados  
    $idBorrar = $_REQUEST["id"];

    // Construyo la consulta
    $sql = "DELETE FROM datos WHERE id = $idBorrar";
    
    // ejecuto la consulta
    $conn->query($sql);

    // Cierro la conexión
    $conn->close();

    $msg = "Se ha borrado el usuario con id: $idBorrar";
    session_start();
    $_SESSION['msg'] = $msg;
    Header("Location: index.php");

?>