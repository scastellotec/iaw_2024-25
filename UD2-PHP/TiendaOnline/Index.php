<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Comida china - Todo a 3€</h1>
    <?php
        session_start();
        if(isset($_SESSION["msg"])){
            echo "<p>".$_SESSION["msg"]."</p>";
            unset($_SESSION["msg"]);
        }
    ?>
    <h2>Login o registrarse:</h2>
    <ul>
        <li><a href="Log.php">Login & Registro</a></li>
    </ul>

</body>
</html>