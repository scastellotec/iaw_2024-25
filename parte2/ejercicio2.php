<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo</title> 
</head>
<body>
<?php 
    //$moneda = 0;
    $nota = rand(-5,20); // Moneda tomará valor 0 o 1 de forma aleatoria

    echo "<p>Tu nota esta $nota</p>";

    if($nota < 0 || $nota >10){
        echo "Nota fuera de rango";
    }else if($nota < 5)
        echo "Suspendido";
    else if($nota < 6)
        echo "Suficiente";
    else if($nota <= 8)
        echo "Notable";
    else
        echo "Sobresaliente";



?>
</body>
</html>