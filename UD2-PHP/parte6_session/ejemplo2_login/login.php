<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login:</h1>
    <?php
        session_start();
        if(isset($_SESSION["msg"])){
            echo "<p>".$_SESSION["msg"]."</p>";
            unset($_SESSION["msg"]);
        }

    ?>
    <form action="validarLogin.php" method="post">
        <label for="username">Nombre de usuario: </label>
        <input id="username" type="text" name="username"/><br/>
        <label for="password">Contraseña: </label>
        <input id="password" type="password" name="password"/>
        <input type="submit">
    </form>
</body>
</html>