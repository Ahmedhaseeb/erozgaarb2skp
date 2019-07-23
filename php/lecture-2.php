<?php 


$x = 50;
$y = 10;
$z = 30;


if(!false){
	echo "if condition is true";
}

die();


if ($x > $y and $x > $z) {
	echo "x is greater";
}

if ($y > $x and $y > $z) {
	echo "y is greater";
}

if ($z > $y and $z > $x) {
	echo "z is greater";
}
// echo $x >= $y;

// echo false;

die();


$msg = "<html>";
$msg .= "<body>";
$msg .= "<h1>Hello World!</h1>";
$msg .= "</body>";
$msg .= "</html>";

// die();

echo ($msg);
die();


$num1 = 20;
$num2 = 10;

$num2 .= $num1; // $num2 = $num2 . $num1;

echo $num2;
die();
$count = 20;



echo $count--;
echo "<br>";
echo $count;

die();
$greeting = "Hello ";

$name = "Ahmed";

echo $greeting . $name;

die();
$count = 20;

$msg = "You have {$count} new messages";


$brithday = "It's my birthday";
echo "<h1> $brithday </h1>";

// echo $msg;


die();
echo "Sum of two numbers are: ";
echo $num1 + $num2;
echo "<br>";


echo "Sub of two numbers are: ";
echo $num1 - $num2;
echo "<br>";


echo "Mul of two numbers are: ";
echo $num1 * $num2;
echo "<br>";


echo "Div of two numbers are: ";
echo $num1 / $num2;
echo "<br>";



echo "Remainder of two numbers are: ";
echo $num2 % $num1;
echo "<br>";



die();
$tictactoe = [

	["x","o","x"],
	["x","1,1","x"],
	["o","x","asdasdassda"]



];
echo $tictactoe[1][1];


// print_r($tictactoe);


?>