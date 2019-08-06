<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Choose File To Upload</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
    	Select file to upload:
    <input type="file" name="fileToUpload">
    <input type="submit" value="Upload file" name="submit">
</form>

<?php

// if(isset($_GET['name'])){
// 	$name = $_GET['name'];
// 	echo $name;

// }

if(isset($_FILES['fileToUpload'])){

    // print_r($_FILES);

    // echo $_FILES['fileToUpload']['name'];
 	//    //die();
	$target_file =  "upload/" . $_FILES["fileToUpload"]["name"];
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". $_FILES["fileToUpload"]["name"]. " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?> 
</body>
</html>