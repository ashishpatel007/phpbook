<!DOCTYPE html>
<html>
	<head>
		<title>Listing 7-9</title>
	</head>
	<body>
		<h1>Converting Arrays To and From Strings</h1>
		<?php
			$cars[0] = "Ford";
			$cars[1] = "Chevy";
			$cars[2] = "Honda";
			$cars[3] = "BMW";
			echo "Initial array <br>";
			print_r($cars);
			//Convert to String
			$carlist = implode(", ", $cars);
			echo "<br><br> Text String: ", $carlist;
			//Convert back to array
			$cars = explode(", ", $carlist);
			echo "<br><br> Final Array <br>";
			print_r($cars);



		?>

	</body>
</html>