<!DOCTYPE html>
<html>
	<head>
		<title>Listing 6-6</title>
	</head>
	<body>
		<h1>Additional File Functions</h1>
		<?php
			$file = "newfile.txt";			echo "<br>", "Open the file.",
				"<br>";
				$fp = fopen($file, "r");
				if($fp){
					echo "newfile.txt opened.", "<br>";
				}
				else{
					echo "newfile.txt opened.", "<br>";
				}
			echo "<br>", "Get the file size.", "<br>";
				$bytes = filesize($file);
				if($bytes){
					echo "The file size is ", $bytes, " bytes.", "<br>";
				}
				else{
					echo "File size not available", "<br>";
				}
			echo "<br>", "Check for EOF and rewind if needed.", "<br>";
				if (feof($fp)){
					rewind($fp);
					echo "Returned to the beginning of the file.", "<br>";
				}
				else {
					echo "Not at the end of the file.", "<br>";
				}
			echo "<br>", "Read 10 characters and skip 10 characters.", "<br>";
				echo "File pointer at ", ftell($fp), " bytes.", "<br>";
				while(ftell($fp) < 42){
					$i=0;
					while($i < 11){
						$char = fgetc($fp);
						echo $char;
						$i++;
					}
					$i = 0;
					echo "<br>";;
					echo "File pointer at ", ftell($fp), " bytes.", "<br>";
					fseek($fp, 10, SEEK_CUR);
					echo "Now file pointer at ", ftell($fp), " bytes.", "<br>";
				}
			echo "<br>", "Read a line.", "<br>";
				rewind($fp);
				$data = fgets($fp);
				if ($data){
					echo $data, "<br>";
				}
				else {
					echo "File not read.", "<br>";
				}
			echo "<br>", "Read to an array", "<br>";
				$textArray = file($file);
				foreach ($textArray as $line => $text) {
					echo "Line ", $line, " ", $text, "<br>";
				}
			echo "<br>", "Close the file.", "<br>";
				if(fclose($fp)){
					echo "newfile.txt closed", "<br>";
				}
				else{
					echo "newfile.txt not closed.", "<br>";
				}



		?>

	</body>
</html>