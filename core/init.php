<?php 
	session_start();
	include_once('db_connect.php');			// Connection to the database
	include_once('Mobile_Detect.php');		// Mobile detection class
	include_once('functions.php');

	function chargerClasse($classe){
		/*ONLINE*/ 		require $_SERVER['DOCUMENT_ROOT'].'/class/'.$classe.'.class.php'; // On inclut la classe correspondante au paramètre passé.
		/*LOCAL*/ 		//require $_SERVER['DOCUMENT_ROOT'].'/cepourquand/class/'.$classe.'.class.php'; // On inclut la classe correspondante au paramètre passé.
	}

	spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.


?>