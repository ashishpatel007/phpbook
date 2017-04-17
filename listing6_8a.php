<?php
	//Set cookie for name, date, and type of purchase
	$name = "Joe";
	$date = time();
	$type = "ipods";
	$expire = time() + (60*60*24*90);
	setcookie("MatTech[name]", $name, $expire, "/");
	setcookie("MatTech[name]", $name, $expire, "/");
	setcookie("MatTech[name]", $name, $expire, "/");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Listing 6-8a</title>
</head>
<body>
	<h1>Setting Cookies, Page 1</h1>
	<?php
		echo "Cookies set for:", "<br>";
		echo "Name: ", $name, "<br>";
		echo "Date: ", date('m d Y', $date), "<br>";
		echo "Type: ", $type, "<br>";


	?>

</body>
</html>