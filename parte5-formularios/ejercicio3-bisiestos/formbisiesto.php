<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¿Es bisiesto este año?</h1>
    <form method="get">
        <label for="nano">Año: </label>
        <input type="year" name="nano" id="nano">
        <input type="submit">
    </form>

    <?php
        if(isset($_REQUEST["nano"])){
            $ano = $_REQUEST["nano"];
            echo "<p>El $ano es ....</p>";

            if($ano%4 == 0){
                if($ano%100 == 0 && $ano%400 != 0){
                    echo "<p>El año no es bisiesto, pero casi</p>";
                }else{
                    echo "<p>El año es bisiesto</p>";
                }
            }else{
                echo "<p>El año no es bisiesto</p>";
            }

        }
    ?>
</body>
</html>