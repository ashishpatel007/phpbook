<?php
	session_start();

//Having successfully signed in...
	//Check to see if the session variable is present and is "admit"
	if(isset($_SESSION["retry"]) && $_SESSION["retry"] == "admit") {
		//If so, continue.
		echo "Hello ", $_SESSION["name"], "!<br>";
	}
	else{
		//If not, return to the site Index page.
		header("Location: index.php");
	}



?>