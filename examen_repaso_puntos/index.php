<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Nombres y Puntos</title>
</head>
<body>

    <h1>Formulario de Registro</h1>

    <?php
    session_start();
    if(isset($_SESSION["msg"])){
        echo "<p>".$_SESSION["msg"]."</p>";
        // Boroo el mensaje de sessino para que al recargar no vuelva a aparecer
        unset($_SESSION["msg"]);
    }

    ?>

    <form action="grabar.php" method="GET">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="puntos">Puntos:</label>
        <input type="number" id="puntos" name="puntos"><br>

        <button type="submit">Enviar</button>
    </form>

    <h2>Top Scores:</h2>
    <?php
        // Crear una conexión
        $conn = new mysqli("localhost", "root", "", "examen_2018");

        // Construimos la consulta
        $sql = "select * from jugadores";

        // Ejecutamos y recogemos el resultado
        $result = $conn->query($sql);

        // si quiero saber el numero de registros encontrados
        $num_players = $result->num_rows;
        echo "<p>El numero de jugadores es: $num_players</p>";

        ?>
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Puntos</th>
                <th>Fecha</th>
                <th></th>
            <tr>
        <?php

        // Si quiero mostrarlos o recorrerlos
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
                echo "<td>".$row['nombre']."</td>";
                echo "<td>".$row['puntos']."</td>";
                echo "<td>".$row['fecha']."</td>";
                echo "<td><a href='delete.php?id=".$row['id']."'>Borrar</a></td>";
            echo "</tr>";
        }

        echo "</table>";

        // Cierro conexion
        $conn->close();

    ?>
</body>
</html>
