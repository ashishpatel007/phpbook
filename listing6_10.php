<!DOCTYPE html>
<html>
	<head>
		<title>Listing 6-10</title>
	</head>
	<body>
		<h1>Checking for Browser Type</h1>
		<?php
		if(strpos($_SERVER[HTTP_USER_AGENT], "MSIE")){
			echo "The browser is Internet Explorer. <br>";
		}
		elseif(strpos($_SERVER[HTTP_USER_AGENT], "Trident")){
			echo "The browser is Internet Explorer. <br>";
		}
		elseif(strpos($_SERVER[HTTP_USER_AGENT], "Firefox")){
			echo "The browser is Firefox. <br>";
		}
		elseif(strpos($_SERVER[HTTP_USER_AGENT], "Chrome")){
			echo "The browser is Chrome. <br>";
		}
		else{
			echo "A different browser is being used. <br>";
		}



		?>

	</body>
</html>