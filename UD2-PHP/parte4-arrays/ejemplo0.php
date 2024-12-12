<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Arrays</h1>
<?php

$alumnos = array();

$alumnos[]="Hugo";
$alumnos[]="Sandro";
$alumnos[]="Santiago";

var_dump($alumnos);

echo "<p>El alumno 3 es: ". $alumnos[2]."</p>";

$alumnos[1] = "Miguel";
var_dump($alumnos);

echo "<p>Tamaño del array es ".count($alumnos)."</p>";
echo "<ul>";
for($i=0;$i<count($alumnos);$i++){
    echo "<li>".$alumnos[$i]."</li>";
}
echo "</ul>";

?>
</body>
</html>