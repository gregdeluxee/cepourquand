<?php 
try{
	
	$dbHost = 'localhost';
	$dbName = 'ilab';
	$dbUser = 'root';
	$dbPassword = '';

	$db = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $dbUser, $dbPassword);
}
catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}
 ?>
