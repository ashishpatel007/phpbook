<!DOCTYPE html>
<html>
	<head>
		<title>Listing 5-6</title>
	</head>
	<body>
		<h1>Date and Time Examples</h1>
		<?php
			echo date(DATE_RFC822), "<br>";
			$date_format = "1, F jS, Y";
			echo date($date_format), "<br>";
			echo date("1, F jS, Y"), "<br>";
			print_r(getdate());
			$date_array = getdate();
			echo "<br>Today is: ", $date_array["weekday"],
				", ", $date_array["month"], " ", $date_array["mday"],
				", ", $date_array["year"],"<br>";
			echo "Today's timestamp is: ", time(), "<br>";
			//Seconds since 1-1-1970

			$twoweeks = (14 * 24 * 60 * 60);
			//seconds in 2 weeks

			$twoweeksFrNow = Time() + $twoweeks;
			echo "Two weeks from today is: ", date("l, F jS, Y", $twoweeksFrNow), "<br>";


		?>

	</body>
</html>