<!DOCTYPE html>
<html>
	<head>
		<title>Listing 6-5</title>
	</head>
	<body>
		<h1>Basic File Functions</h1>
		<?php

			echo "<br>", "Create or Open the file.", "<br>";
			$fp = fopen("newfile.txt", "r+");
			if ($fp){
				echo "newfile.txt created.", "<br>";
			}
			else {
				echo "newfile.txt cannot be opened.", "br";
			}
			echo "<br>", "Write the file.", "<br>";
			$bytes = fwrite($fp, "Now is the time for all good men and women to come to the aid of their country. \r\n");
			if($bytes){
				echo $bytes, " byte written.", "<br>";
			}
			else {
				echo "File not written.", "<br>";
			}
			echo "<br>", "Rewind and read the file,", "<br>";
			rewind($fp);
			$data = fread($fp, $bytes);
			if($data){
				echo $data, "<br>";
			}
			else {
				echo "File not read.", "<br>";
			}
			echo "<br>", "Close the file.", "<br>";
			if(fclose ($fp)){
				echo "newfile.txt closed", "<br>";
			}
			else {
				echo "newfile.txt not closed.", "<br>";
			}

			





		?>

	</body>
</html>