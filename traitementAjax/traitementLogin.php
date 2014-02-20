<?php 
include('../core/init.php');
if (isset($_POST['login']) AND isset($_POST['password'])) {
	$login = $_POST['login'];
	$login = strtolower($login);
	$password = $_POST['password'];
	$password = hash('sha512', $password);
	setcookie('pass', $password, time() + 30*24*3600, null, null, false, true);
	$userInfos = new UserManager($db);
	if ($userInfos->exists($login)) {
		$user = $userInfos->get($login);
		if ($user->password_user() == $password) {
			$_SESSION['id_user'] = $user->id_user();
			echo "success";
		}else{
			echo "failed";
		}
	}else{
		echo "failed";
	}
}
	
	

 ?>