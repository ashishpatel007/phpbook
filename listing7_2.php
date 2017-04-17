<!DOCTYPE html>
<html>
	<head>
		<title>Listing 7-2</title>
	</head>
	<body>
		<h1>Adding and Removing Array Values</h1>
		<?php
			$cars = array("Ford","Chevy","Honda","BMW");
			echo "The initial array:  <br>";
			print_r($cars);
			//Add a fifth value
			$cars[4] = "Toyota";
			//Add a sixth value with an implied key
			$cars[] = "Chrysler";
			//Replace the second value
			$cars[1] = "GM";
			//Delete the fourth value
			$cars[3] = "";
			echo "<br> The final array: <br>";
			print_r($cars);



		?>

	</body>
</html>