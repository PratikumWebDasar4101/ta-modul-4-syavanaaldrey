<?php  
session_start();
$user = array(
				"username" => "admin",
				"password" => "12345"
			);
if (isset($_POST['submit'])) {
	if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']){
		$_SESSION['username'] = $_POST['username'];
		header("Location: formawal.php");
	}else{
		echo "Error Login";
	}
}
?>