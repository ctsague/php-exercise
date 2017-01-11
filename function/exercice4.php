<?php

function test($num1, $num2){
	
	if($num1 > $num2) {
		return "Le premier nombre est plus grand";
	}
	elseif($num1 < $num2) {
		return "Le premier nombre est plus petit";
	}
	else {
		return "Les deux nombres sont identiques";
	}
}

echo test(2,2);
// echo test(2,3);
// echo test(3,2);