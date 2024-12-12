<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo</title> 
</head>
<body>
<?php 
        echo "SESSION:<br>";
        session_start();
        var_dump($_SESSION);
        echo "<br>FILES:<br>";
        var_dump($_FILES);
?>
</body>
</html>