<?php

// Declaro variables
$numRomano;
$resultado = 0;

// 1. Asegurarnos que hemos recibido el parametro
if (isset($_REQUEST["nroman"])){
    // 2. Recoger parametro del usuario
    $numRomano = $_REQUEST["nroman"];

    // 3. Hacer los calculos necesarios
    // Me aseguro que todo el numero esta en mayusculas
    $numRomano = strtoupper($numRomano);

    for($i=0; $i<strlen($numRomano);$i++){
        $letra=$numRomano[$i];
        if($letra == 'X'){
            $resultado+=10; //$resultado = $resultado + 10;
        }elseif($letra == 'V'){
            $resultado+=5;
        }elseif($letra == 'I'){
            $resultado+=1;
        }
    }


}else{
    // En este caso no he recibido numero del usuario
    $resultado = "Falta numero";
}

// 4. Mostrar resultado
echo "El resultado es: $resultado";

?>