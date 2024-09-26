<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "Ejercicio FizzBuzz";

    for($i=1;$i<=100;$i++){
      
        /* Metodo 1: Poco optimo
            if($i%5 == 0){
                if($i%3 == 0){
                    echo "<p>FizzBuzz</p>";
                }else{
                    echo "<p>Buzz</p>";
                }
            }else if($i%3 == 0){
                echo "<p>Fizz</p>";
            }else{
                echo "<p>$i</p>";
            }
        */

        /* Metodo 2: Un poco mejor
        if($i%3 == 0 && $i%5 == 0){
            echo "<p>FizzBuzz</p>";
        }else if($i%5 == 0){
            echo "<p>Buzz</p>";
        }else if($i%3 == 0){
            echo "<p>Fizz</p>";
        }else{
            echo "<p>$i</p>";
        }
        */

        // Metodo
        $resultado = "";
        if($i%3 == 0){
            $resultado += "Fizz"; //$resultado = $resultado + "Fizz";
        }
        if($i%5 == 0){
            $resultado += "Buzz"; 
        }
        if($i%7 == 0){
            $resultado += "Bumm"; 
        }
        if($resultado == ""){
            $resultado = $i
        }
        echo "<p>$resultado</p>";

    }


?>
</body>
</html>