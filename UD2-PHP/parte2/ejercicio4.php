<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo</title> 
</head>
<body>
<?php 
    
    $dado = rand(1,6);
    echo "<p>te ha salido un $dado</p>";

    // Modo corto
    echo "<img src='images/".$dado.".svg' width='200'>";

    // Modo largo
    if($dado == 1)
        echo "<img src='images/1.svg' width='200'>";
    else if ($dado == 2)
        echo "<img src='images/2.svg' width='200'>";
    else if ($dado == 3)
        echo "<img src='images/3.svg' width='200'>";
    else if ($dado == 4)
        echo "<img src='images/4.svg' width='200'>";
    else if ($dado == 5)
        echo "<img src='images/5.svg' width='200'>";
    else
        echo "<img src='images/6.svg' width='200'>";


?>
</body>
</html>