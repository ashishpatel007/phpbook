<!DOCTYPE html>
<html>
	<head>
		<title>Listing 6-4</title>
	</head>
	<body>
		<h1>Switch Statement Example</h1>
		<p><b>The Computer Wizard!</b></p>
		<p>Ask a Yes/No question and click Refresh.</p>
		<?php
			$randNum = rand(1,5);
			switch($randNum){
				case 1:
					echo "Definitely Yes!";
					break;
				case 2:
					echo "Probably Yes!";
					break;
				case 3:
					echo "Definitely Maybe!";
					break;
				case 4:
					echo "Probably No!";
					break;
				case 5:
					echo "Definitely No!";
					break;
				default:
					echo $randNum, "<br>"; //Display the number
					echo "Computer Malfunction, Try Again";
			}




		?>

	</body>
</html>