<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filehandling in PHP</title>
</head>
<body>
	<?php 

		$fileName = "abc.txt";


		// unlink("untitled");
		// copy($fileName, "newFile.txt");


		// rename("web1/aaaaa.txt", $fileName );
		$fh = fopen($fileName,"r+") or die("Failed to open file");


		fseek($fh,4,SEEK_END);

$text = <<<_END
abc
_END;
		fwrite($fh,$text);

// 		// while($line = fgets($fh)){
// 		// 	echo $line . "<br>";
// 		// }


		fclose($fh);
		
		// if(!file_exists($fileName)){

		// 	echo "File Does Not Exist";
		// }else{
		// 	fopen("abc.txt","r");

		// }


	// if(file_exists("inheritance.php")){
	// 	echo "File Exist";
	// }else{
	// 	echo "File not Exist";
	// }
	?>
</body>
</html>