<?php
$a=$_REQUEST['base'];
$b=$_REQUEST['altura'];
$area;

$r_area=multiplicar($a,$b);
echo " el area del rectangulo es:$r_area";
function multiplicar($a,$b){
	$area=$a*$b;
	return $area;
}
?>