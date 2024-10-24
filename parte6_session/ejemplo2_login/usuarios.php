<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Me aseguro que el usuario esta Loggeado, sino lo devuelvo a login
        session_start();
        if (!isset($_SESSION["logged"])){
            Header("Location: login.php");
        }
    ?>
    <h1>Pagina del usuario</h1>
    <p>Bienvenido: 

        <?php
            
            echo $_SESSION["username"];
        ?>

    </p>
    <a href="desLoguear.php">Cerrar sesion</a>
</body>
</html>