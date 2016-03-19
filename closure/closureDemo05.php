<?php
function func1($a){
	return function($b) use ($a){
		echo $a + $b;
	};
}
$a = func1(1);
$a(6);
