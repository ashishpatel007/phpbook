<!DOCTYPE html>
<html>
	<head>
		<title>Listing 5-9</title>
	</head>
	<body>
		<h1>User-Defined Function</h1>
		<?php
			function tokm($miles)
			{
				$km = $miles * 1.6;
				return $km;
			}

			echo "<b>Directions:</b>", "<br>", "From the highway turn right,", "<br>",
			"go 2.4 miles or ", tokm(2.4), " km, turn left", "<br>",
			"go 1.3 miles or ", tokm(1.3), " km, turn right", "<br>",
			"go .9 miles or ", tokm(.9), " km, you're there.", "<br>";


		?>

	</body>
</html>