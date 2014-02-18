<?php 
include('../core/init.php');
if (isset($_POST['login']) AND isset($_POST['password'])) {
	$login = $_POST['login'];
	$password = $_POST['password'];
	$password = hash('sha512', $password);
	$userInfos = new UserManager($db);
	if ($userInfos->exists($login)) {
		$user = $userInfos->get($login);
		if ($user->password_user() == $password) {
			$_SESSION['id_user'] = $user->id_user();
			//$response = setcookie('loged', '1', time()+60*60*24*30, null, null, false, true);
			//echo $response.'success';
			echo "success";
		}else{
			echo "failed";
		}
	}else{
		echo "failed";
	}
}
	
	

 ?>