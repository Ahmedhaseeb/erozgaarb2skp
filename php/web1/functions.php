<?php 
function calculate($num1, $num2, $op = "+")
{

	if($op == "+"){
		return $num1 + $num2;
	}

	if($op == "-"){
		$sub = $num1 - $num2;
		return $sub;
	}

	if($op == "*"){
		return $num1 * $num2;
	}

	if($op == "%"){
		return $num1 % $num2;
	}


	return "Invalid Operator";
	

}



function print_pre($data)
{
	echo "<pre>";

	print_r($data);

	echo "</pre>";
}




?>