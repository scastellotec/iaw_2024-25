<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Nombres y Puntos</title>
</head>
<body>
    <h1>Formulario</h1>

    <p>
    <?php
        session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    </p>

    <form action="procesar.php" method="GET">
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombre" placeholder="Escribe tu nombre">
        <br><br>
        
        <label for="puntos">Puntos:</label>
        <input type="number" id="puntos" name="puntos" placeholder="Ingresa tus puntos" >
        <br><br>
        
        <button type="submit">Enviar</button>
    </form>

    <h2>Puntuaciones</h2>
    <?php
    include("bbdd_conexion.php");

    // Construimos la consulta
    $sql = "select * from datos";

    // Ejecutamos y recogemos el resultado
    $result = $conn->query($sql);

    // si quiero saber el numero de registros encontrados
    $row_count = $result->num_rows;

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Puntos</th>";
    echo "<th>Fecha creacion</th>";
    echo "<th></th>";
    echo "</tr>";
    // Si quiero mostrarlos o recorrerlos
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>".$row['puntos']."</td>";
        echo "<td>".$row['fecha_creacion']."</td>";
        echo "<td><a href='delete.php?id=".$row['id']."'>Eliminar</a></td>";
        echo "</tr>";
    }
    echo "</table>";

    // Cierro conexion
    $conn->close();
    ?>
</body>
</html>