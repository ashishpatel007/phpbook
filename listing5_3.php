<!DOCTYPE html>
<html>
	<head>
		<title>Listing 5-3</title>
	</head>
	<body>
		<?php
			print "This is Print with double quotes <br>";
			echo "This is Echo with double  quotes <br>";
			print 'This is Print with single quotes <br>';
			echo 'This is Echo with single quotes <br>';
			print ("This is Print with parens <br>");
			echo ("This is Echo with aprens <br>");
			print "Print argument 1<br>"; #Second causes error
			echo "Echo argument 1 ", "Echo argument 2 <br>";
			print 1234567890; //Without quotes
			echo "<br>", 987654321 , "<br>";
			print "This is on line one, <br>
				while this is on line two, <br>
					and this is on line three.";
			/* echo and print are essentially the same
				with one argument */

		?>

	</body>
</html>