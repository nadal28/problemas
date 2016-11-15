<?php

$primos = array();
$inicio = 1;
$fin = 100;

for($posible_primo=$inicio;$posible_primo<=$fin;++$posible_primo){
	$contador = 0;	//Si vale 2 en la vuelta significa que es primo
	
	for($i=1;$i<$posible_primo;++$i)	//Comprobamos si el resto vale cero al dividirlo por los diferentes numeros
		if($posible_primo % $i == 0)
			++$contador;

	if($contador < 3)	// Un número es primo si solo es divisible por si mismo y por 1
		$primos[] = $posible_primo;
}
?>
