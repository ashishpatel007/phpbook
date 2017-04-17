<!DOCTYPE html>
<html>
	<head>
		<title>Listing 7-6</title>
	</head>
	<body>
		<h1>Using while With an Associative Array</h1>
		<?php
			$cars = array (
				"Ed" => "Ford", "Sue" => "Chevy", "Kate" => "Honda", "Bob" => "BMW"
			);
			while (list($key, $item) = each($cars)){
				echo "$key has a $item <br>";
			}

			



		?>

	</body>
</html>