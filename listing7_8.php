<!DOCTYPE html>
<html>
	<head>
		<title>Listing 7-8</title>
	</head>
	<body>
		<h1>Moving Within an Array</h1>
		<?php
			$cars = array (
				"Ed" => "Ford", "Sue" => "Chevy", "Kate" => "Honda", "Bob" => "BMW");

			echo "Initial Array <br>";
			foreach($cars as $key => $item){
				echo "$key -- $item <br>";
			}
			//Because foreach has moved the pointer to the end, we must start with reset().
			echo "<br> Reset to the first value: ", reset($cars), "<br>";
			echo "Current pair: ", key($cars), " => ", current($cars), "<br>";
			echo "Next Value: ", next($cars), "<br>";
			echo "Previous Value: ", prev($cars), "<br>";
			echo "Last Value: ", end($cars), "<br>";

		?>

	</body>
</html>