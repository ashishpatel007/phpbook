<!DOCTYPE html>
<html>
	<head>
		<title>Listing 7-4</title>
	</head>
	<body>
		<h1>Using foreach With an Associative Array</h1>
		<ul>
		<?php
			$cars = array (
				"Ed" => "Ford", "Sue" => "Chevy", "Kate" => "Honda", "Bob" => "BMW"
			);
			foreach($cars as $key => $item){
				echo "<li>$key  has a $item";
			}



		?>
		</ul>

	</body>
</html>