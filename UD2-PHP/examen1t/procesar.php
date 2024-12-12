<?php
session_start();
$msg = "";

if(!empty($_REQUEST["nombre"]) and !empty($_REQUEST["puntos"])){

    $nombre = $_REQUEST["nombre"];
    $puntos = $_REQUEST["puntos"];

    $nombre = strtolower($nombre);
    $nombre = ucfirst($nombre);

    if(strlen($nombre)>=3 and $puntos<=100 and $puntos>=0 and esNombreUnico($nombre)){

        include("bbdd_conexion.php");

        // Construyo la consulta
        $sql = "insert into datos (nombre, puntos, fecha_creacion) values ('$nombre', $puntos, now())";
        // ejecuto la consulta
        $conn->query($sql);
        // Cierro la conexión
        $conn->close();

        $msg = "Se inserta a $nombre con $puntos puntos";

    }else{
        $msg = "Parametros fuera de rango";
    }    
}else{
    $msg = "Parametros vacios o inexistentes.";
}

$_SESSION['msg'] = $msg;
Header("Location: index.php");


function esNombreUnico($n){
    include("bbdd_conexion.php");

    // Construyo la consulta
    $sql = "select * from datos where nombre = '$n'";

    // Ejecutamos y recogemos el resultado
    $result = $conn->query($sql);
    
    // si quiero saber el numero de registros encontrados
    $row_count = $result->num_rows;
    
    // Cierro conexion
    $conn->close();

    if($row_count >=1){
        return false;
    }else{
        return true;
    }

}

?>