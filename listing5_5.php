<!DOCTYPE html>
<html>
	<head>
		<title>Listing 5-5</title>
	</head>
	<body>
		<h1>Examples of Array Functions</h1>
		<?php
			$nameEntry = array("name" => "Jon Doe", "email" => "jon@zxy.com", "phone" => "x456");
			echo "Number of elements is: ", count($nameEntry), "<br>";
			print_r($nameEntry);
			$output = print_r($nameEntry, true);
			echo "<br>Output is: ", $output, "<br>";
			echo "Name is: ", $nameEntry["name"], "<br>";
			echo "Email is: ", $nameEntry["email"], "<br>";
			echo "Phone is: ", $nameEntry["phone"], "<br>";
		?>

	</body>
</html>