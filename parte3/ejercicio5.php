<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<h1>Tabla de multiplica</h1>";

    for($numero=1;$numero<=10;$numero++){
        echo "<h2>Tabla del $numero</h2>";
        // Dado un valor me genera su multiplicación del 1 al 10
        for($i=1;$i<=10;$i++){
            $resultado = $numero*$i; 
            echo "$numero * $i = $resultado<br>";
        }
    }
?>
</body>
</html>