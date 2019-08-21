<?php 
try {
	$db = new PDO(
		"mysql:host=localhost;dbname=erozgaarb2skp;charset=utf8mb4",
		"root",
		""
	);
	
} catch (Exception $e) {
	echo $e->getMessage();
	// echo "Failed to connect to database";	
}
// die();

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
try {
	$q1 = "DELETE FROM `students` WHERE id = 5";
	$q2 = "SELECT * FROM `students`";
	
	// $response = $db->query($q1);
	$stmt = $db->query($q2);
	echo "No of row returned: " .$stmt->rowCount() . "<br>";
	// die();
	// if($response){
	// 	echo "Record Deleted";
	// }else{
	// 	echo "Failed to delete record";
	// }
	echo "<b>Names:</b><br>";
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		echo $row['name'] . "<br>";
	}
	
	// print_r();

	// foreach ($data as $key => $value) {
	// 	echo "<pre>";
	// 	print_r($value);
	// 	echo "</pre>";
	// }

} catch (Exception $e) {
	echo $e->getMessage();
}









?>