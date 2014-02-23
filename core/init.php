<?php 
	session_start();
	include_once('db_connect.php');			// Connection to the database
	include_once('Mobile_Detect.php');		// Mobile detection class
	include_once('functions.php');

	function chargerClasse($classe){
		/*ONLINE*/ 		require $_SERVER['DOCUMENT_ROOT'].'/app/class/'.$classe.'.class.php'; // On inclut la classe correspondante au paramètre passé.
		/*LOCAL*/ 		//require $_SERVER['DOCUMENT_ROOT'].'/cepourquand/class/'.$classe.'.class.php'; // On inclut la classe correspondante au paramètre passé.
	}

	spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

	if (isset($_COOKIE['login'])) {
        $_SESSION['login'] = $_COOKIE['login'];
    }
    if (isset($_COOKIE['login']) AND strlen($_COOKIE['login'])>0) {
        $login = $_COOKIE['login'];
        $userInfos = new UserManager($db);
        if ($userInfos->exists($login)) {
            $user = $userInfos->get($login);
            $_SESSION['id_user'] = $user->id_user();
            $_SESSION['prenom_user'] = $user->prenom_user();
            $_SESSION['nom_user'] = $user->nom_user();
            $_SESSION['url_img_user'] = $user->url_img_user();
        }
    }
?>