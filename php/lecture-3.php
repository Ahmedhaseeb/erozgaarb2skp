<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Lectuer 3</title>
</head>
<body>
	<?php 

	



	$z = 5 > 4 ? print("5 is greater") : print("5 is not greater");
	echo $z;
	// $x = "Hello World";
	// echo print( "Ahmed");

die();
	echo __LiNE__;


	// die();
	define("ROOT_LOCATION", __DIR__);

	echo ROOT_LOCATION;
	
	die();

	$x = 20.567;

	$y = (float)$x;
	echo $y;
	die();
	$num = 1236763781;


	echo substr($num, 7,2);

die();
	$x = 20;

	$y = "20";
	$sum = $x + $y;

	if($x == $y){
		echo "x and y are equal";
	}

	die();

	$text =  "Lorem ipsum dolor sit amet, 
	consectetur adipisicing elit. Odio velit, est iste numquam fugit quaerat 
	impedit ab temporibus 
	architecto e
	aque!";


echo "


<h1>Heading</h1>





";	
echo <<<_END


"asdasd"

'asdas'


_END;

	// echo $text; 
	?>

</body>
</html>