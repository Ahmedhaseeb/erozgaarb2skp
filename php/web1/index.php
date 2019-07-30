<?php 
require_once "functions.php";


include "header.php";

$number = ["b","a","c","d",55];
shuffle($number);
print_pre($number);
die();
$students = [
	[
		"name" => "Ahmed",
		"rollno" => "66",
		"age" => 10,
		"gender" => "male"
	],
	[
		"name" => "Ahmed",
		"rollno" => 7678687,
		"age" => 10,
		"gender" => "male"
	],
	[
		"name" => "Ahmed",
		"rollno" => 66,
		"age" => 10,
		"gender" => "male"
	],
	40
];


echo count($students, true);
die();
foreach ($students as $key => $student) {
	
	if(is_array($student)){
		foreach ($student as $key => $property) {
			echo $property . "<br>";
		}
	}else{
		echo $student;
	}


	

	echo "================<br>";
}

die();

$flowers = ["Jasmine", "Lilly", "Rose", "Sun Flower", "Pink Rose"];
include "home.view.php";

include "footer.php";


// include "functions.php";


// include "home.view.php";
?>