<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loops in PHP</title>
</head>
<body>



	<form method="get">

		<input type="text" name="num1" placeholder="Enter First No" />
		<input type="text" name="num2" placeholder="Enter Second No" />

		<select name="operation">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
		</select>
		<input type="submit" value="submit">
		
	</form>
	<?php 

		print_r($_GET);

		die();
		$op = $_GET['operation'];
		$num1 = (int)$_GET['num1'];
		$num2 = (int)$_GET['num2'];
		echo calculate($num1,$num2,$op);

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

		die();
		$flowers = ["Jasmine", "Lilly", "Rose", "Sun Flower", "Pink Rose"];
		foreach($flowers as $index => $flower){
			// echo $flower . "<br>";
			echo $index . "=>" .  $flower . "<br>";
		}


	?>
</body>
</html>