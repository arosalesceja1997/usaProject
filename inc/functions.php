<?php
	function checkEmptyInput($input, $errorMsg) {
		if(empty($input)) {
			echo $errorMsg;
		}
	}

	function checkX3EmptyInputs($input1, $input2, $input3, $errorMsg) {
		if(empty($input1) OR empty($input2) OR empty($input3)) {
			echo $errorMsg;
		}
	}

	function exploteArray($array) { 
		$meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
		$x = explode(" ", $array);
		$y = "";
		foreach($meses as $key=>$mes){
			if($mes == $x[2]){
				$y = $key+1;
				if($y < 10){
					$y = "0".$y;
				}
			}
		}
		return $x[0]."/".$y."/".$x[4];
	}
?>