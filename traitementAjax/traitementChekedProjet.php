<?php 

include('../core/init.php');
	$id_projet = $_POST['id-projet']		
	$projetManager = new ProjetManager($db);
	$projet = $projetManager->getProjetById($id_projet);



 ?>
