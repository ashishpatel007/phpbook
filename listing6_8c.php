<?php 
	//Delete cookies for name, date, and type of purchase
	$expire = time()-(60*60);
	setcookie("MatTech[name]", "", $expire, "/");
	setcookie("MatTech[date]", "", $expire, "/");
	setcookie("MatTech[type]", "", $expire, "/");



?>