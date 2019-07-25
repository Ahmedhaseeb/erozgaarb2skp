<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Functions</title>
</head>
<body>
	
	<?php 









			// $value = 500;

			function staticVariable(){
				static $count = 0;
				echo ++$count;
			}

			staticVariable(); //1
			// staticVariable(); //2
			// staticVariable(); //3
			// staticVariable();
			// staticVariable();

			// echo $value;
			
			die();

			function fixName(&$n){
				$n = "asdasd";
				// return ucfirst(strtolower($n));
			}
			$name = "AbbC";
			fixName($name);
			echo $name;



			die();
			function multiReturn($namesToFix)
			{
				
				$n1 = ucFirst(strtolower($namesToFix[0]));
				$n2 = ucFirst(strtolower($namesToFix[1]));
				$n3 = ucFirst(strtolower($namesToFix[2]));
				return [$n1,$n2,$n3];
			}


			$name = ["aHmEd","hASeEB","aLi"];
			// $fixedNames = multiReturn($name);
			// print_r($fixedNames);
			
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


			// echo calculate(20,40);

			die();

			function sum($x,$y){
				return $x + $y;
			}








			$sum = sum(567, 7);

			echo $sum;




			// echo $sum;
			// sum(567,7);
			// sum(567,7);



			

	 ?>

</body>
</html>