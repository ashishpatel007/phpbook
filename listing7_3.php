<!DOCTYPE html>
<html>
	<head>
		<title>Listing 7-3</title>
	</head>
	<body>
		<h1>Using foreach with a Numeric Array</h1>
		<ol>
			<?php
				$cars = array (
					"Ford", "Chevy", "Honda", "BMW"

					);
				foreach ($cars as $item){
					echo "<li>$item";
				}




			?>

	</body>
</html>