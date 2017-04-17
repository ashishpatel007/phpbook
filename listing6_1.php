<!DOCTYPE html>
<html>
	<head>
		<title>Listing 6-1</title>
	</head>
	<body>
		<h1>If/Else Examples</h1>
		<?php
			if ($a){  //Tests if $a has been defined and is not FALSE or 0
				echo "True", "<br>";
			}
			else {
				echo "False", "<br>";
			}
			$a = "Something";
			if ($a){
				echo "True", "<br>";
			}
			else {
				echo "False", "<br>";
			}
			$state = "CA";
			if($state == "WA"){
				echo "Pacific Northwest", "<br>";
			}
			elseif($state == "OR"){
				echo "Pacific Northwest", "<br>";
			}
			else{
				echo "Somewhere Else", "<br>";
			}
			echo $b ? "True" : "False";


		?>

	</body>
</html>