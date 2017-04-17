<!DOCTYPE html>
<html>
	<head>
		<title>Listing 6-9</title>
	</head>
	<body>
		<h1>Exploring Server Variables</h1>
		<?php
			foreach($_SERVER as key => $value){
				echo "<b> $key &nbsp : &nbsp </b> $value ", "<br>"; 	
			}



		?>

	</body>
</html>