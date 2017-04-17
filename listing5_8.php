<!DOCTYPE html>
<html>
	<head>
		<title>Listing 5-8</title>
	</head>
	<body>
		<h1>Examples of String functions</h1>
		<?php
			$textString = "Now is the time!";
			$textArray = count_chars($textString);
			print_r($textArray);
			$nameEntry = array(
				"name" => "Jon Doe", "email" => "jon@zxy.com", "phone" => "x456");
			echo "<br>", implode("   ", $nameEntry), "<br>";
			$aLongString = "           Now is the time";
			echo ltrim($aLongString), "<br>";
			echo "The formatting of 543216789.6386 is: ",
				number_format(543216789.6386, 2), "<br>";
			print_r(str_split(543216789.6386, 3));
			echo "<br>", $newString, " is a string? (True = 1) ",
			is_string($newString) , "<br>";

		?>

	</body>
</html>