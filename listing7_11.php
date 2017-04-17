<!DOCTYPE html>
<html>
	<head>
		<title>Listing 7-11</title>
	</head>
	<body>
		<h1>Breaking Up Arrays</h1>
		<?php
			$cars = array(
				"Ford", "Chevy","Honda","BMW","Toyota"
				);
			echo "The initial array: <br>";
			print_r($cars);
			
			echo "<br><br>Slice out the middle three:<br>";
			$mid_cars = array_slice($cars, 1, 3);
			print_r($mid_cars);
			
			echo "<br><br>Slice out the last two:<br>";
			$last_cars = array_slice($cars, -2, 2);
			print_r($last_cars);
			
			echo "<br><br>Divide into two car chunks:<br>";
			$car_chunks = array_chunk($cars, 2);
			print_r($car_chunks);
			
			echo "<br><br>Splice in this array after removing the last two cars:<br>";
			$cars2 = array("Fiat", "Mazda");
			print_r($cars2);
			
			echo "<br>Giving this result:<br>";
			array_splice($cars, -2, 2, $cars2);
			print_r($cars);
			$cars = array (
				"Ed" => "Ford", "Sue" => "Chevy", "Kate" => "Ford", "Bob" => "BMW"

				);
			
			echo "<br><br> Given this initial array:<br>";
			print_r($cars);
			echo "<br>Flipping it produces this result:<br>";
			$cars = array_flip($cars);
			print_r($cars);


		?>

	</body>
</html>