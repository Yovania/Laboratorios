<?php
$a=$_REQUEST['valor1'];
$b=$_REQUEST['valor2'];

if ($_REQUEST['operador']=="suma"){
	$r_suma = sumar($a,$b);
	echo "la suma es: $r_suma";
}
else
	if ($_REQUEST['operador']=="resta"){
	$r_resta = restar($a,$b);
	echo "la resta es: $r_resta";
}
else
	if ($_REQUEST['operador']=="mult"){
		$r_mult=multiplicar($a,$b);
		echo "la multiplicacion es:$r_mult";
	}
	else
			if ($_REQUEST['operador']=="Div") {
		$r_Div=dividir($a,$b);
		echo "la divicion es:$r_Div";
	}

		function sumar ($a,$b) {
	$suma = $a+$b;
	return $suma;
}

function restar ($a,$b) {
	$resta = $a-$b;
	return $resta;
}


function multiplicar($a,$b){
$mult=$a*$b;
return $mult;
}

function dividir ($a,$b) {
	$Div = $a/$b;
	return $Div;
}



?>