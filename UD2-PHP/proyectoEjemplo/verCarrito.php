<?php
    session_start();

    // Datos recibidos
    $nombre = "margarita";
    $cantidad = 3;

    $_SESSION["carrito"] = array();
    $_SESSION["carrito"][$nombre] = $cantidad;
    $_SESSION["carrito"]["4Quesos"] = 3;
    $_SESSION["carrito"]["BBQ"] = 1;


    var_dump($_SESSION);



    session_destroy();
?>