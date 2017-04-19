<?php

	session_start();

//	Verify user's id and password, and create session.

		//Read the name list file.
		if(!$namelist = file_get_contents('namelist.txt')) {
			echo "<br>File not read</br>";
		}

		//Combine the user ID and password and encrypt it.
		$userPasswd = $_POST['userid'] .= $_POST['passwd'];
		$testentry = sha1($userPasswd);

		//Determine if the encrypted user ID and password are in file.
		if(strpos($namelist, $testentry) >= 0) {

			//If there, reset the session and enter the site.
			$_SESSION["retry"] = "admit";
			$_SESSION["time"] = time();
			header("Location: enterSite.php");
		}
		else{
			//If not, add to Session Retry and test > 3
			$retry = $_SESSION["retry"];
			$retry++;
			if ($retry > 3) {
				//If greater than 3 go to register.
				header( "Location: register.php");
			}
			else{
				//If less than 3, reset Session Retry and go to Sign in
				$_SESSION["retry"] = $retry;
				header("Location: signin.php");
			}
		}
?>