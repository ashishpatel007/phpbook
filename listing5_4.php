<!DOCTYPE html>
<html>
	<head>
		<title>Listing 5-4</title>
	</head>
	<body>
		<?php

			//Math
			$a = 2; $b = 5;
			echo "Add $a and $b to get ", $a + $b, "<br>";
			echo "Multiply $a by $b to get ", $a * $b, "<br>";
			echo "Divide $a by $b to get ", $a / $b, "<br>";
			echo "Modulus $a by $b to get ", $a % $b, "<br>";

			//Increment and Concatenate
			$a = 7;
			echo "Increment $a by 2 to get ", $a += 2, "<br>";
			echo "Increment $a by 1 to get ", ++$a, "<br>";
				$first_name = "Mary"; $last_name = "Smith";
			echo "Concatenate $first_name and $last_name to get ",
				$first_name . $last_name, "<br>";

			//Comparison
			$a = "2"; $b = 2.0; $c = 4; $d = $a == $b; $e = $a == $b;
			echo "Test if $a and $b are equal (True = 1) ", $a == $b, "<br>";
			echo "Test if $a and $b are identical (True = 1) ", $a == $b, "<br>";
			echo "Test if $a is less than or equal to $c (True = 1) ", $a <= $c, "<br>";

			//Logical
			echo "Test if \$d and \$e are TRUE (True = 1) ", $d and $e, "<br>";
			echo "Test if \$d or \$e are TRUE (True = 1) ", $d or $e, "<br>";

			//Execute
			echo ' date ' ; /* Executes the date DOS command as you would in Windows' Command Prompt window */




		?>

	</body>
</html>