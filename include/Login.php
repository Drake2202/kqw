<?php

	$username = $_POST['username'];
	$password = $_POST['password'];
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	$password = gen_token($password, $username);
	$sql = "SELECT * from meh_users WHERE Username='$username' && Password='$password'";
	$result = mysql_query($sql);
	
	function gen_token($pass, $salt) {
		$salt = strtolower($salt);
		$str = hash("sha512", $pass.$salt);
		$len = strlen($salt);
		return strtoupper(substr($str, $len, 17));
	}
	
	if(isset($_POST['username']) && isset($_POST['password'])) {
		$count = mysql_num_rows($result);
		if($count==1) {
			session_start();
			$error = 'Logging in, Please wait...';
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			echo '<meta http-equiv="refresh" content="2;.."></meta>';
		} else {
			$error = '<font color="red">Incorrect username/password.</font>';
		}
	} else {
		$error = 'Please login to proceed.';
	}
?>