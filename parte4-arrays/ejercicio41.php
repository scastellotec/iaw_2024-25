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

    // Inicializo el array vacio
    $notas = array();
    // Genero 10 numeros aleatorios
    for($i=0; $i<10; $i++){
        $notas[]=rand(1,30);
    }
    // Mostrar todo los valores que almacen
    var_dump($notas);

?>
</body>
</html>