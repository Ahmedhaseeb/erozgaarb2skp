<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Interitance</title>
</head>
<body>
	

	<?php 

		class Person{			
			public $cnic, $age, $gender, $name;
			function __construct($name,$cnic,$age,$gender){
				$this->name = $name;
				$this->cnic = $cnic;
				$this->age = $age;
				$this->gender = $gender;
			}

			final function copyrights(){
				echo "All Rights Reseved. Designed And Developled By Ahmed Haseeb";
			}


			function eat(){
				echo "Parent Class Eat Function";
				
			}

		}
		class Student extends Person{
				public $rollno;
				public $course;
				public $attendace;


				function __construct($rno,$course,$att,$name){
					parent::__construct($name,"35404","10","M");

					$this->rollno = $rno;
					$this->course = $course;
					$this->attendace = $att;


				}

				function eat(){

					// echo __CLASS__;
					// parent::eat();
					echo "Student Eat Function";
				}


				function copyrightssss(){
					echo "All Rights Reseved. Designed And Developled By ABC";
				}
		}



		$std = new Student(12,"BSCS",99,"Abc");


		$std->copyrights();






	?>
</body>
</html>