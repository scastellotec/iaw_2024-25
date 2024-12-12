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
        
        // SIEMPRE Si voy a trabajar con session tengo que iniciar session_start()
        session_start();

        // Si existe el valor en sesion tengo que recuperarlo de la session
        // Se comprueba con isset()
        if( isset($_SESSION["visitas"]) ){

            // Existe el valor en sesion, lo recupero y lo guardo en una
            // variable temporal
            $num_veces = $_SESSION["visitas"];

        }else{
            // Si no existiera el valor, es la primera vez y tengo que dar un valor inicial
            $num_veces = 0;

        }
        
        // En cualquier caso incremento el numero de visitas
        $num_veces++;

        // Guardo o actualizo el valor en SESSION
        $_SESSION["visitas"] = $num_veces;

        // Muestro un mensaje por pantalla para el usuario
        echo "Has cargado la pagina $num_veces";
    ?>

    

</body>
</html>