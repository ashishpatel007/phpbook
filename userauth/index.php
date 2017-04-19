<?php

	session_start();
	//check if user has a cookie.
	if (isset ($_COOKIE["MatTech"])){
		//If so, set session and go to sign in
		$_SESSION["name"] = $_COOKIE["MatTech"][name];
		$_SESSION["retry"] = 0;
		$_SESSION["time"] = time();
		header("Location: signin.php");
	}
	else {
		//If not, go to registration.
		header("Location: register.php");
	}