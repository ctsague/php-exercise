<?php

function sum(int $num1 = 1, int $num2 = 2, int $num3 = 3) {
	return $num1 + $num2 + $num3;
}

echo sum();
echo sum(10);