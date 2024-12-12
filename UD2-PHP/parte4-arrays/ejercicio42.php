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
    
    echo "<h1>Var dump del array generado</h1>";
    // Mostrar todo los valores que almacen
    var_dump($notas);

    /*Calcular: maximo, minimo, media*/
    echo "<h1>Recorro el array posicion a posicion</h1>";
    echo "<p>Count del array: ".count($notas)."</p>";
    for($i=0; $i<count($notas); $i++){
        echo "notas[$i] =";
        echo $notas[$i]."</br>";
    }

    echo "<h1>Calcular el valor mas alto manualmente</h1>";
    $maximo_temp = 0;
    for($i=0; $i<count($notas); $i++){
        if($maximo_temp < $notas[$i]){
            echo "Actualizo maximo de: $maximo_temp a ".$notas[$i]."<br/>";
            $maximo_temp = $notas[$i];
        }else{
            echo "El numero maximo $maximo_temp es mayor que ".$notas[$i]."<br/>";
        }
    }

    echo "<h1>Calcular el valor mas alto con una funcion</h1>";
    echo "Numero mas alto del array: ".max($notas);


    echo "<h1>Calcular el valor mas bajo manualmente</h1>";
    $minimo_temp = 99;
    for($i=0; $i<count($notas); $i++){
        if($minimo_temp > $notas[$i]){
            echo "Actualizo minimo de: $minimo_temp a ".$notas[$i]."<br/>";
            $minimo_temp = $notas[$i];
        }else{
            echo "El numero minimo $minimo_temp es menor que ".$notas[$i]."<br/>";
        }
    }

    echo "<h1>Calcular el valor medio</h1>";

    echo "<h1>Calcular el valor medio manualmente</h1>";
    $media = 0;
    for($i=0; $i<count($notas); $i++){
        //$media = $media + $notas[$i];
        $media += $notas[$i];
    }
    $media = $media / count($notas);
    echo "<p>La media es: $media</p>";

    echo "<h1>Calcular el valor medio funcion</h1>";
    echo "Media del array: ".array_sum($notas)/count($notas);
?>
</body>
</html>