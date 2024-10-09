<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Arrays asociativos</h1>
<?php
$var = "Cadena de Texto";

echo "<p>$var</p>";
echo $var[0]."<br>";

echo "<p>Longitud: ".strlen($var)."</p>";

for ($i = 0; $i < strlen($var); $i++) {
    echo $var[$i] . "<br>";
}
?>
</body>
</html>