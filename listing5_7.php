<!DOCTYPE html>
<html>
	<head>
		<title>Listing 5-7</title>
	</head>
	<body>
		<h1>Examples of Math functions</h1>
		<?php
			echo "The hex equivalent of 1492 is: ", dechex(1492), "<br>";
			echo "The power of e to 214 is: ", exp(214), "<br>";
			echo "The logarithm of 55.86 is: ", log(55.86), "<br>";
			echo "A random number between 11 & 99 is: ", rand(11,99), "<br>";
			echo "567.12534 rounded to two places is: ", round(567.12534, 2), "<br>";

		?>

	</body>
</html>