<?php
    include("util.php");

    // FUNCIONES DEFINIDAS POR PHP
    $cadena = "La Casa de mi TIO es verde";
    $cadenaMayus = strtoupper($cadena);
    echo "<p>$cadenaMayus</p>";

    // FUNCIONES DEFINIDAS POR EL PROGRAMADOR
    $nombre = "Fernando";
    $apellido = "Gutierrez";
    $ciclo = "ASIR";
    $curso = 2;

    $email = generaEmail($nombre, $apellido, $ciclo, $curso);
    echo "<p>$email</p>";

    // CALCULAR OPERACION
    echo calculo(5,26,"Multiplicar");

    //Me conecto a la BBDD y hago cosas
    include("conexionBBDD.php");

    // Construimos la consulta
    $sql = "select * from usuarios";
    // Ejecutamos y recogemos el resultado
    $result = $conn->query($sql);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Correo</th>";
    echo "<th>Contrasena</th>";
    echo "<th>FechaRegistro</th>";
    echo "<th></th>";
    echo "<th></th>";
    echo "</tr>";
    // Si quiero mostrarlos o recorrerlos
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        $iduser = $row['ID'];
        echo "<td>".$row['ID']."</td>";
        echo "<td>".$row['Nombre']."</td>";  // en 'nombre' es el nombre de la columna de la BBD.
        echo "<td>".$row['Correo']."</td>";
        echo "<td>".$row['Contrasena']."</td>";
        echo "<td>".$row['FechaRegistro']."</td>";
        echo "<td><a href='eliminar.php?iduser=$iduser'>Eliminar</a></td>";
        echo "<td><a href='eliminar.php?iduser=".$row['ID']."'>Eliminar</a></td>";
        echo "</tr>";
    }
    echo "</table>";

    // Cierro conexion
    $conn->close();


?>