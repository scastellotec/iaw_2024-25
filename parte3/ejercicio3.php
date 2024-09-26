<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nivel = 7;

    for($i=1; $i<=$nivel; $i++){
        echo "$i:";
        for($j=1; $j<=$i; $j++){
            echo "*";
        }
        echo "<br>";
    }
?>
</body>
</html>