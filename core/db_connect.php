<?php 
try{
	
	$dbHost = 'localhost';
	$dbName = 'ilab';
	//$dbUser = 'root'; //LOCAL
	//$dbPassword = ''; //LOCAL
	$dbUser = 'ilabuser'; //ONLINE
	$dbPassword = 'ilab123'; //ONLINE

	$db = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $dbUser, $dbPassword);
}
catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}
 ?>
