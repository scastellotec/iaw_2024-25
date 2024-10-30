<?php
    // Inicio sesion
    session_start();

    // Creo el array de sesion
    $pizzasCompradas = array();

    // Compruebo que ya tenia guardado
    if(isset($_SESSION["carrito"])){
        $pizzasCompradas = $_SESSION["carrito"];
    }

    // Compruebo que me viene valores en el request
    if(isset($_REQUEST["pizzaname"]) && isset($_REQUEST["cantidad"])){
        $nombrePizza = $_REQUEST["pizzaname"];
        $cantidad = $_REQUEST["cantidad"];
        $pizzasCompradas[$nombrePizza] = $cantidad;
    }

    // Actualizo en session el array que hubiera
    $_SESSION["carrito"] = $pizzasCompradas;

    // Redirijo a la pagina principal
    Header("Location: productos.php");

?>