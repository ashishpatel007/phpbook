<!DOCTYPE html>
<html>
	<head>
		<title>Listing 6-8b</title>
	</head>
	<body>
		<h1>Displaying Cookies, Page 2</h1>
		<?php
			define("MatTech", 5);
			define("type", "iPods");

			if(isset ($_COOKIE["MatTech"]) && $_COOKIE["MatTech"]){	//Check if there
				echo "Hello ", $_COOKIE["MatTech"]["name"], "! <br>";
				echo "Thanks for your order on ", date('M d Y', $_COOKIE["MatTech"]["date"]), ". <br>";
				echo "Check out our ", $_COOKIE["MatTech"]["type"], ". <br>";
			}


		?>

	</body>
</html>