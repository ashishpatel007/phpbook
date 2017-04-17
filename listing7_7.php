<!DOCTYPE html>
<html>
	<head>
		<title>Listing 7-7</title>
	</head>
	<body>
		<h1>Sorting Arrays</h1>
		<?php
			$cars = array ("Ed" => "Ford", "Sue" => "Chevy", "Kate" => "Honda", "Bob" => "BMW");
			echo "Array Unsorted <br>";
			foreach ($cars as $key => $item){
				echo "$key -- $item<br>";
			} 
		sort($cars);
			echo "<br>Array Sorted by Item <br>";
			foreach ($cars as $key => $item){
				echo "$key -- $item<br>";
			}
		rsort($cars);
			echo "<br>Array Reverse Sorted by Item <br>";
			foreach ($cars as $key => $item){
				echo "$key -- $item<br>";
			}
		$cars = array (
			"Ed" => "Ford", "Sue" => "Chevy", "Kate" => "Honda", "Bob" => "BMW"
		);
		ksort($cars);
			echo "<br>Array Sorted by the Key <br>";
			foreach ($cars as $key => $item){
				echo "$key -- $item<br>";
			}
		asort($cars);
			echo "<br>Array Sorted by the Item Keeping the Key <br>";
			foreach ($cars as $key => $item){
				echo "$key -- $item <br>";
			}





		?>

	</body>
</html>