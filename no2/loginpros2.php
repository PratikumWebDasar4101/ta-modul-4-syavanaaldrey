<?php
	session_start();

	$user = array(
			"nama"		=> "aldrey",
			"username"	=> "admin",
			"password"	=> "12345",
			"notelepon"	=> "0813292929"
		);

	if($user["username"] == $_POST["username"] && $user["password"] == $_POST["password"]){
		$_SESSION["username"] = $user["username"];
		$_SESSION["user"] = $user;
		header("Location: form2.php");		
	}else{
		header("Location: login2.php");
	}
?>