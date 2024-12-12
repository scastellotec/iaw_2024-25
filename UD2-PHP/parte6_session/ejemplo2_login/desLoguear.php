<?php
    // Esta pagina cierra la session de un usuario

    // Inicio sesion
    session_start();

    // Cierro la session
    //session_destroy();

    // Otra alternativa para cerrar sesion
    unset($_SESSION["logged"]);
    unset($_SESSION["username"]);
    $_SESSION["msg"] = "sesion cerrada correctamente";

    // Redirijo a donde me interesa
    Header("Location: login.php")
?>