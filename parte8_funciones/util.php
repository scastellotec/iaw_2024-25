<?php
function generaEmail($nom, $ape, $cic, $cur){
        // asir2.fgutierrez@iespabloserrano.com
        $emailGenerado = $cic . $cur . "." . $nom[0] . $ape . "@iespabloserrano.com";
        $emailGenerado = strtolower($emailGenerado);
        return $emailGenerado;
}

function calculo($n1, $n2, $operacion) {
	$resultado = 0;
	if($operacion == "Sumar") {
		$resultado = $n1 + $n2;
	}else if($operacion == "Restar") {
		$resultado = $n1 - $n2;
	}else if($operacion == "Multiplicar") {
		$resultado = $n1 * $n2;
	}
	return $resultado; // Devolver el resultado
}

?>