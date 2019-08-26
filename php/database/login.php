<?php require_once("functions.php"); ?>	
<?php 
if(is_login()){
	$role = get_role();
	if($role == "admin"){
		header("location:dashboard.php");
	}
	if($role == "teacher"){
		header("location:seceret.php");
	}

	if($role == "student"){
		header("location:seceret.php");
	}
	if($role == "subscriber"){
		header("location:seceret.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<h1>User Login</h1>

	<form action="" method="post">
		<input type="text" name="username" placeholder="Enter Username" />
		<input type="password" name="password" placeholder="Enter Password" />
		<input type="hidden" name="action" value="login" />
		<input type="submit" value="Login" />
	</form>

</body>
</html>