<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Object Oriented Programming in PHP</title>
</head>
<body>
	<?php 



	echo User::$static_property;

	class User{

			private $username;
			private $password;
			private $email;

			static $static_property = "iiii";
			const ENGLISH = 0;
			const MATH = 1;
			const PUNJABI = 2;


			static function msg_user_exist(){
				echo self::MATH;
			}
			function __construct($un,$pwd,$e){
				$this->username = $un;
				$this->password = $pwd;
				$this->email = $e;
			}


			function __destruct(){
				// echo $this->username . " is going to destory<br>";
			}
			function user_exist(){
				if($this->email == "abc@xyz.com"){
					return true;
				}else{
					$this->register_user();
				}


			}
			function register_user(){
				echo "Registering New User";

			}

			public function get_password(){
				return $this->password;
			}
			public function get_username(){
				return $this->username;
			}
			public function get_email(){
				return $this->email;
			}

		}

		$current_user  = new User("current_user","123","abc@xyz.com");
		if($current_user->user_exist()){
			// User::msg_user_exist();
		}

		echo $current_user->get_password();
		echo $current_user->get_email();
		echo $current_user->get_username();


		// echo $current_user->get_password();


		// $current1  = new User("user1","123","abc@xyz.com");

		// $current2  = new User("user2","123","abc@xyz.com");

		// $current3  = new User("user3","123","abc@xyz.com");
		
		// $current_user->username = "abc";
		// $current_user->password = "123";
		// $current_user->email = "abc@xyz.com";

		// $copy_obj = CLONE $current_user;


		// $copy_obj->username = "aaaaa";

		// echo $copy_obj->username;

		// echo "<br>";


		// echo $current_user->username;










		// $current_user->user_exist();

		// // print_r($current_user);
		// $another_user = new User;

		// $another_user->email = "abc@example.com";
		// // print_r($another_user);

		// $another_user->user_exist();







	?>
</body>
</html>