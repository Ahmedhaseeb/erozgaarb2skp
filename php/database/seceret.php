<?php include_once("functions.php");
if(!is_login()){
	header('location:login.php');
}
?>
<a href="?logout=1">Logout</a>