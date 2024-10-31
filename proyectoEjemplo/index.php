<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Usuarios registrados</h1>
    <?php
        //1. Conectar a la BBDD
        $conn = new mysqli("localhost", "root", "", "iaw_ejemplo");

        //2. Construir un SELECT y ejecutarlo
        $sql = "SELECT * FROM productos";
        $result = $conn->query($sql);

        //3. Recorrer los resultados y mostrarlos por pantalla
        ?>
        <form action="" method="">
        <?php
        while($row = $result->fetch_assoc()) {
            // en 'nombre' es el nombre de la columna de la BBDD

            ?> <input type="" name="<?php $row['ID'] ?>">

            <?php
            echo "<p>";
            echo $row['ID'];
            echo $row['Nombre']." - ";
            echo $row['Correo']." - ";
            echo $row['Contrasena']." - ";
            echo $row['FechaRegistro'];
            echo"</p>";
        }

        //4. Cerrar la conexino con la BBDD
        $conn->close();
    ?>
</body>
</html>