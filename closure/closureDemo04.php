<?php
function func1($a){
	return function() use ($a){
		echo $a;
	};
}
$a = func1('a');
$a();
