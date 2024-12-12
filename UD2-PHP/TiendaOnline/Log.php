<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION["msg"])){
            echo "<p>".$_SESSION["msg"]."</p>";
            unset($_SESSION["msg"]);
        }

    ?>

    <h3>Inicio de Sesión</h3>
    <form action="CheckLog.php" method="get">
        <label for="user">Usuario: </label>
        <input id="user" name="user" type="text"><br>
        <label for="pass">Contraseña: </label>
        <input id="pass" name="pass" type="text"><br>
        <input type="submit">
    </form>

    <h3>Registro de Usuario</h3>
    <form action="CheckLog.php" method="get">
        <label for="CKemail">Correo Electrónico: </label>
        <input id="CKemail" name="CKemail" type="text"><br>
        <label for="CKuser">Usuario: </label>
        <input id="CKuser" name="CKuser" type="text"><br>
        <label for="CKpass">Contraseña: </label>
        <input id="CKpass" name="CKpass" type="text"><br>
        <input type="submit">
    </form>

</body>
</html> 