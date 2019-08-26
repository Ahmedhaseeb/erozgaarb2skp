<?php require_once 'connection.php'; ?>
<?php 
print_r($_POST);

if(isset($_POST['action']) AND $_POST['action'] == "login"){
	$username = $_POST['username'];
	$pwd = $_POST['password'];

	try {
		$q = "SELECT * FROM userssss WHERE name = ? and password = ?";
		$stmt = $db->prepare($q);
		$stmt->execute(array($username, $pwd));
		if($stmt->rowCount()>0){
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);	
			print_r($data);
		}else{
			echo "Invalid Login Details";
		}


	} catch (Exception $e) {
		echo $e->getMessage();
	}
}
if(isset($_POST['action']) AND $_POST['action'] == "add"){
	$name = $_POST['username'];
	$pwd = $_POST['password'];
	$q = "INSERT INTO `users`(`name`, `password`) VALUES(?,?)";

	$stmt = $db->prepare($q);
	$response = $stmt->execute(array($name,$pwd));
	if($response){
		echo "Record Inserted";
	}else{
		echo "Failed To Insert Record";
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
	<h1>Insert New User</h1>

	<form action="" method="post">
		<input type="text" name="username" placeholder="Enter Username" />
		<input type="password" name="password" placeholder="Enter Password" />

		<input type="hidden" name="action" value="add" />

		<input type="submit" value="Add" />
	</form>
</body>
</html>