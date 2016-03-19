<?php
function operate($operator){
	if ($operator == '-'){
		return function ($a, $b){
			return $a - $b;
		};
	} else {
		return function ($a, $b){
			return $a + $b;
		};
	}
}

$subtraction = operate('-');
echo $subtraction(4, 3);
$addition    = operate('+');
echo $addition(1, 2);
		
