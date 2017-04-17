<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Listing 6-7b</title>
	</head>
	<body>
		<h1>Session Variables, Page 2</h1>
		<?php
			echo "Read session variables:", "<br>";
			echo "Name is: ", $_SESSION["name"], "<br>";
			echo "Amount is: ", $_SESSION["amount"], "<br>";
			echo "Time is: ", date('Y m d H:i:s', $_SESSION["time"]), "<br>";


		?>

	</body>
</html>