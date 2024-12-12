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

$frase = "perdone que le pida para un cafe";

// Frase letra por letra
for($i=0; $i<strlen($frase); $i++){
    echo $frase[$i]." ";
}
echo "<br>";

// Frase letra por letra al reves
for($i=strlen($frase)-1; $i>=0; $i--){
    echo $frase[$i]." ";
}
echo "<br>";

echo "La frase tiene ".strlen($frase)." caracteres<br/>";
echo "La frase en mayusculas ".strtoupper($frase)."<br/>";
echo "La frase en minusculas ".strtolower($frase)."<br/>";
echo "La frase en minusculas ".ucfirst($frase)."<br/>";
?>
</body>
</html>