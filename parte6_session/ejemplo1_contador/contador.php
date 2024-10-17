<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contador de veces que cargas esta pagina</h1>
    
    <?php
        
        // Recupero el valor de SESSION en caso de que existiera
        
        // En esta variable guardo el numero de veces que se carga la pagina
        $num_veces = 0;

        // Incremento el numero de visitar
        $num_veces++;

        // Guardo o actualizo el valor en SESSION
        
        echo "Has cargado la pagina $num_veces";
    ?>

    

</body>
</html>