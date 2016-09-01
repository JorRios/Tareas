<?php  
	$a = $_REQUEST['valor1'];
	$b = $_REQUEST['valor2'];

	if ($_REQUEST ['operador'] == "suma") {
		$r_suma = suma($a, $b);
		echo "La suma es: $r_suma";
	}

	else
		if ($_REQUEST ['operador'] == "resta") {
			$r_resta = resta($a, $b);
			echo "La resta es: $r_resta";
		}
		if ($_REQUEST ['operador'] == "divide") {
			$r_divide = divide($a, $b);
			echo "La division es: $r_divide";
		}
		if ($_REQUEST ['operador'] == "multiplica") {
			$r_multiplica = multiplica($a, $b);
			echo "La multiplicacion es: $r_multiplica";
		}

	function suma($a,$b){
		$suma = $a + $b;
		return $suma;
	}

	function resta($a, $b){
		$resta = $a - $b;
		return $resta;

	}
	function divide($a, $b){
		$divide = $a / $b;
		return $divide;
	}

	function multiplica($a, $b){
		$multiplica = $a * $b;
		return $multiplica;
	}


?>