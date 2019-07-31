<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP ARRAYS Function</title>
</head>
<body>
	
	<?php 
		$flowers = ["Jasmine", "Lilly", "Rose", "Sun Flower", "Pink Rose"];



		echo current($flowers) . "<br>";
		echo next($flowers) . "<br>";
		echo next($flowers) . "<br>";
		echo current($flowers) . "<br>";
		echo reset($flowers) . "<br>";
		echo current($flowers) . "<br>";





		die();

		$count = 0;
		$reset = 0;
		foreach($flowers as $key => $value){


			echo $value . "<br>";
			// if($count == 3 AND !$reset){
			reset($flowers);
			// }

			// ++$count;
		}
		// echo $count;


		die();

		$string = implode(", ", $flowers);
		
		$explodedArray = explode(", ", $string);
		
		print_r($explodedArray);




	?>
</body>
</html>