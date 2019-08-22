<?php 

// database connectivity
try {
	$db = new PDO(
		"mysql:host=localhost;dbname=erozgaarb4_practice;charset=utf8mb4",
		"root",
		""
	);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	
} catch (Exception $e) {
	echo $e->getMessage();
	// echo "Failed to connect to database";	
}

?>