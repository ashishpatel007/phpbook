<!DOCTYPE html>
<html>
	<head>
		<title>Listing 7-13</title>
	</head>
	<body>
		<h1>Using Multidimensional Arrays</h1>
		<?php
			$contacts = array(
				"Sue"=>array("email"=>"sue@anisp.com", "phone"=>"555-1234"),
				"Tom"=>array("email"=>"tom@anisp.com", "phone"=>"555-5678"),
				"Bob"=>array("email"=>"bob@anisp.com", "phone"=>"555-4321"));
			print_r($contacts);
			echo "<br><br>Tom's email is: ", $contacts ["Tom"]["email"],"<br>";
			echo "<br> Contact List <pre>";
			foreach ($contacts as $person => $means)
				foreach ($means as $key => $value)
					echo "$person:\t$key\t$value<br>";
			echo "</pre>";



		?>

	</body>
</html>