<!DOCTYPE html>
<html>
	<head>
		<title>Listing 7-10</title>
	</head>
	<body>
		<h1>Joining Arrays</h1>
		<?php
			$cars[2] = "Ford";
			$cars[3] = "Chevy";
			$cars[4] = "Honda";
			$cars[5] = "BMW";
			$trucks[1] = "Ford";
			$trucks[3] = "GMC";
			$trucks[4] = "Toyota";
			$owners [1] = "Bill";
			$owners [2] = "Pat";
			$owners [3] = "Tom";
			$vehicles = $cars + $trucks;
			echo "Union of arrays<br>";
			print_r($vehicles);
			$vehicles = array_merge($cars, $trucks);
			echo "<br><br>Merged array<br>";
			print_r($vehicles);
			$vehicles = array_combine($owners, $trucks);
			echo "<br><br>Combined array<br>";
			print_r($vehicles);



		?>

	</body>
</html>