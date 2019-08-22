<?php 


//deleting record
if(isset($_GET['del'])){
	$id = $_GET['del'];
	$q = "DELETE FROM students where id = " . $id; 
	try {
		$response = $db->query($q);
		if($response){
			echo "Record Deleted";
		}else{
			echo "Failed To Delete Record";
		}
	} catch (Exception $e) {
		echo $e->getMessage();
		// echo "Failed to delete record";
	}
}
// showing student details
try {
	$q2 = "SELECT * FROM `students`";
	$stmt = $db->query($q2);
	// echo "No of row returned: " .$stmt->rowCount() . "<br>";
	?>
<table border="1">
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>city</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['city']; ?></td>
		<td><a href="?del=<?php echo $row['id']; ?>">Delete</a> / Edit</td>
	</tr>

<?php endwhile; ?>
	</tbody>
</table>
<?php
} catch (Exception $e) {
	// echo $e->getMessage();
}









?>