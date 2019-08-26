<?php session_start(); 
include_once("connection.php");
//check if user is loggedin
//return true if user is loggedin


function get_role(){

	if(is_login())
		return $_SESSION['role'];
	else{
		false;
	}
}

function is_admin(){

	if(is_login()){
		$role = $_SESSION['role'];
		if($role == "admin"){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

function is_teacher(){

	if(is_login()){
		$role = $_SESSION['role'];
		if($role == "teacher"){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}

function is_student(){

	if(is_login()){
		$role = $_SESSION['role'];
		if($role == "student"){
			return true;
		}else{
			return false;
		}
	}else{
		return false;
	}
}
function is_login()
{
	if(isset($_SESSION['login']) AND $_SESSION['login'] == "true"){
		return true;
		// header('location:dashboard.php');
	}else{
		return false;
	}
}
// login user
if(isset($_POST['action']) AND $_POST['action'] == "login"){
	$un = $_POST['username'];
	$pwd = $_POST['password'];
	$q = "SELECT * FROM `users` WHERE `name` = ? AND `password` = ?";
	$stmt = $db->prepare($q);
	$stmt->execute(array($un,$pwd));
	//if login details are true
	if($stmt->rowCount() > 0){
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$role = $row['role'];
		$_SESSION['login'] = "true";
		$_SESSION['role'] = $role;
	}else{ // if login details are wrong
		echo "Invalid Login Details";
	}

}
// logout user
if(isset($_GET['logout']) AND $_GET['logout'] == 1){
	unset($_SESSION['login']);
	session_destroy();
	header('location:login.php');
}


?>