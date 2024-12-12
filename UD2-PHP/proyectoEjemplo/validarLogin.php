<?php

//1. Me aseguro que viene el dato
if( isset($_REQUEST["username"]) &&  isset($_REQUEST["password"]) ){
    // CORRECTO: Me vienen los dos parametros

    //2. Recojo el dato
    $user = $_REQUEST["username"];
    $pass = $_REQUEST["password"];

    //3. me conecto a la BBDD

    //4. Construyo la consulta
    $sql = "SELECT * FROM usuarios WHERE user=$user and password=$pass";

    //5. Ejecuto la consulta y RECOJO el resultado
    $result = $conn->query($sql);

    // Quiero saber el numero de lineas encontrados
    $row_count = $result->num_rows;

    if($row_count >= 1){
        //Todo bien
    }else{
        //Credenciales incorrectas
    }



}else{
    // Aqui me falta uno o dos parametros
    $_SESSION["msg"] = "Faltan parametros por enviar";
    Header("Location: login.php");
}




?>