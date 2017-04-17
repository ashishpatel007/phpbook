<!DOCTYPE html>
<html>
	<head>
		<title>Listing 7-5</title>
	</head>
	<body>
		<h1>Using for With a Numeric Array</h1>
		<ol>
		<?php
			$cars = array(
				"Ford", "Chevy", "Honda", "BMW");
			for($i = 0; $i < count($cars); $i++) {
				echo "<li>$cars[$i]";
			}
		?>
		</ol>	

	</body>
</html>