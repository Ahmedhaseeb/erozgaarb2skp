<?php include_once("functions.php"); ?>
<?php 
if(!is_admin()){
	header('location:login.php');
}
?>
<a href="?logout=1">Logout</a>