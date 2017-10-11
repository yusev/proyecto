<?php //Ejemplo aprenderaprogramar.com


$desde = $_POST['desde'];
$hasta = $_POST['hasta'];


switch ($desde){

case 1:
	if($hasta == 2){
		$total=5*4;
		echo "<br/> El total es: $". $total.""; }
	elseif ($hasta == 3){ 
		$total=5*5;
		echo "<br/> El total es: $". $total.""; }
	elseif($hasta == 4){ 
		$total=5*8;
		echo "<br/> El total es: $". $total.""; }

	
break;

} //llave del switch

?>
