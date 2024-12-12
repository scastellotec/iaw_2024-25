<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
</head>
<body>
    <main class="containersmall">
    <h1>Usuarios registrados</h1>
    <?php
        //1. Conectar a la BBDD
        $conn = new mysqli("localhost", "root", "", "iaw_ejemplo");

        //2. Construir un SELECT y ejecutarlo
        $sql = "SELECT * FROM usuarios";
        $result = $conn->query($sql);

        //3. Recorrer los resultados y mostrarlos por pantalla
        $row_count = $result->num_rows; // Guardo en $row_count el numero de filas que devuelve la consulta
        echo "<p>Hay $row_count usuarios registrados";

        while($row = $result->fetch_assoc()) {
            // en 'nombre' es el nombre de la columna de la BBDD
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

    <h1>Registro de Usuario</h1>
    <form action="grabarUsuario.php" method="GET">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required><br><br>
        
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>
        
        <button type="submit">Registrar</button>
    </form>
    </main>
</body>
</html>