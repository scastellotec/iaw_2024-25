<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Arrays asociativos</h1>
<?php

$alumnos = array();

$alumnos["Marc"] = 9;
$alumnos["Sergio"] = 8;
$alumnos["Alejandro"] = 7;
$alumnos["Victor"] = 6;
$alumnos["Gonzalo"] = 5;

var_dump($alumnos);

$alumnos["Marc"] = 4;

echo "<p>Marc ha sacado un :".$alumnos["Marc"]."</p>";
?>
</body>
</html>