<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo</title> 
</head>
<body>
<?php 
    //$moneda = 0;
    $moneda = rand(0, 1); // Moneda tomará valor 0 o 1 de forma aleatoria

    if($moneda == 1)
        echo "Ha salido cara";
    else    
        echo "Ha salido cruz";

?>
</body>
</html>