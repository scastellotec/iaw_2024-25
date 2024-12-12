<?php

// Los campos que me llegan son username y password
// Tip: Podeis usar var_dump($_REQUEST) sino sabes que te viene

session_start();

//1. Me aseguro que viene el dato
if( isset($_REQUEST["username"]) &&  isset($_REQUEST["password"]) ){
    // CORRECTO: Me vienen los dos parametros

    //2. Recojo el dato
    $user = $_REQUEST["username"];
    $pass = $_REQUEST["password"];

    //3. Comprobar si el login es correcto
    if($user == "alu" && $pass == "123"){
        // Usuario correcto e inicio sesion
        // Es obligatorio iniciar session para trabajar con ella
        
        $_SESSION["logged"] = true;
        $_SESSION["username"] = $user; // Esto me apetece

        //Redirecciono al usuario a otra pagina
        Header("Location: usuarios.php");

    }else{
        // Usuario incorrecto, devuelvo al login
         //Redirecciono al usuario a otra pagina
         $_SESSION["msg"] = "Credenciales incorrectas";
         Header("Location: login.php");
    }

}else{
    // Aqui me falta uno o dos parametros
    $_SESSION["msg"] = "Faltan parametros por enviar";
    Header("Location: login.php");
}




?>