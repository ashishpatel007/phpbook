<!DOCTYPE html>
<html>
	<head>
		<title>Listing 7-12</title>
	</head>
	<body>
		<h1>Comparing Arrays</h1>
		<?php
			echo "Compare using array operators:<br>";
			$cars1 = array (
				"Ed" => "Ford", "Sue" => "Chevy", "Kate" => "Honda", "Bob" => "BMW"
				);
			echo "Cars1";
			print_r($cars1);
			$cars2 = array (
				"Ed" => "Ford", "Kate" => "Honda", "Bob" => "BMW", "Sue" => "Chevy"
				);
			echo "<br>Cars2";
			print_r($cars2);
			echo "<br><br>Are they equal? ";
			if(($cars1 == $cars2) == TRUE){
				echo "TRUE";} else{ echo "FALSE";}
			echo "<br> Are they identical? ";
			if(($cars1 === $cars2) == TRUE){
				echo "TRUE";} else{ echo "FALSE";}
			echo "<br><br>Compare using array functions:<br>";
			$cars[2] = "Ford";
			$cars[3] = "Chevy";
			$cars[4] = "Honda";
			$cars[5] = "Ford";
			echo "Cars ";
			print_r($cars);
			$trucks[1] = "Ford";
			$trucks[3] = "Chevy";
			$trucks[4] = "Toyota";
			echo "<br>Trucks";
			print_r($trucks);
			echo "<br><br>What are the differences? <br>";
			$vehicles = array_diff($cars,$trucks);
			print_r($vehicles);
			echo "<br><br>What are the differences including keys?<br>";
			$vehicles = array_diff_assoc($cars, $trucks);
			print_r($vehicles);
			echo "<br><br>What are the similarities?<br>";
			$vehicles = array_intersect($cars, $trucks);
			print_r($vehicles);
			echo "<br><br>What are the similarities including keys?<br>";
			$vehicles = array_intersect_assoc($cars, $trucks);
			print_r($vehicles);






		?>

	</body>
</html>