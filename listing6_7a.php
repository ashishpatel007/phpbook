<?php
	session_start()

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Listing 6-71</title>
	</head>
	<body>
		<h1>Session Variables, Page 1</h1>
			<?php
				$name = "Joe";
				$amount = "$14.92";
				echo "Store session variables:", "<br>";
					$_SESSION["name"] = $name;
					$_SESSION["amount"] = $amount;
					$_SESSION["time"] = time();
				echo "Name is: ", $_SESSION["name"], "<br>";
				echo "Amount is: ", $_SESSION["amount"], "<br>";
				echo "Time is: ", date('Y m d H:i:s', $_SESSION["time"]), "<br>";

			?>

	</body>
</html>