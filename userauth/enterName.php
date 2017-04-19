<?php
/* Cookie is written. Then the user id and password
 * are encrypted and that and the name are written
 * to disk. */

	//Information for cookie, expires in 6 months.
	$name = $_POST['name'];
	$date = time();
	$expire = time() + (60*60*24*180);

	//Set cookie
	setcookie("MatTech[name]", $name, $expire, "/");
	setcookie("MatTech[date]", $date, $expire, "/");

	//Combine userid and password and encrypt it.
	$userPasswd = $_POST['userid'] .= $_POST['passwd'];
	$encryptid_pw = sha1($userPasswd);

	//Build an array of data and write to disk.
	$entry = array('index' => time(),
					'name' => $name,
					'encrypt' => $encryptid_pw
					);
	if(!$byteswrite = file_put_contents('namelist.txt', $entry, FILE_APPEND)) {
		echo "<br> File not written.<br>";
	}

	//Return to Index.php
	header("Location: index.php");