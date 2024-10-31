<?php

//1. Validar los datos

//2. Recoger los datos que me llegan en el REQUEST
$nombre = $_REQUEST["nombre"];
$correo = $_REQUEST["correo"];
$contrasena = $_REQUEST["contrasena"];

//3. Conectarme la BBDD
//ip del servidor, usuario, contraseña, nombre base de datos
$conn = new mysqli("localhost", "root", "", "iaw_ejemplo");

//4. Construir SQL: INSERT ....
$sql = "insert into usuarios (nombre, correo, contrasena, FechaRegistro) values ('$nombre', '$correo','$contrasena',now())";
echo $sql;

//5. Ejecutar SQL
$conn -> query($sql);

// 6. Cierro la conexión
$conn->close();

?>