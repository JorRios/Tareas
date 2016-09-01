<?php 
	$a = $_REQUEST['valorA'];
	$b = $_REQUEST['valorB'];
	$c = $_REQUEST['valorC'];


	if ($_REQUEST['operacion']== "area"){
		$r_area = area($a, $b, $c);
		echo "El area del rectangulo es: $r_area";
	}

	else

		if ($_REQUEST['expresion']=="expres"){
			$r_expres = expres($a, $b, $c);
			echo "El resultado de la expresion es: $r_expres";
		}

	function area($a, $b, $c){
		$area = $a * $b * $c;
		return $area;
	}

	function expres($a, $b, $c){
		$expres = ($a+7*$c)/($b+2-$a)+2*$b;
		return $expres;
	}
?>