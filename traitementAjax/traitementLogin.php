<?php 
session_start();
//include('./core/init.php');
if (isset($_POST['login']) AND isset($_POST['password'])) {
	$login = $_POST['login'];
	$password = $_POST['password'];
	$password = crypt($password);

	if ($login =="greg") {
		echo "success";
	}else{
		echo "failed";
	}
}

 ?>