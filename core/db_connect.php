<?php 
try{
	
	$dbHost = 'localhost';
	$dbName = 'ilab';
	$dbUser = 'ilabuser';
	$dbPassword = 'ilab123';

	$bdd = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $dbUser, $dbPassword);
}
catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}
 ?>
