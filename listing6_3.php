<!DOCTYPE html>
<html>
	<head>
		<title>Listing 6-3</title>
	</head>
	<body>
		<h1>For and Foreach Examples</h1>
		<?php
			echo "<b>Partial Character Set with For</b><br>";
			for ($i = 33; $i <= 35; $i++){
				echo "Character # ", $i , " is ", chr($i), "<br>";
			}
			echo "<br><br><b>Count_Chars with Foreach</b><br>";
			$textString = "Now is the time!";
			$textArray = count_chars($textString, 1);
			foreach ($textArray as $key => $val){
				echo "The character \"", chr($key) , "\" occurs ", $val , " times. <br>";	
			}


		?>

	</body>
</html>