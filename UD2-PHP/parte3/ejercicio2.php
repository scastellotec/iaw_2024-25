<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $filas = 6;

    echo "<table border='1'>";

    for($i=0; $i < $filas; $i++){
        echo "<tr>";
            for($j=0; $j<$filas; $j++){
                $resultado="";
                if(($i+$j)%2 == 0)
                    $resultado="bgcolor='black'";
                echo "<td $resultado>$i - $j</td>";
            }
        echo "</tr>";
    }

    echo "</table>";

?>
</body>
</html>