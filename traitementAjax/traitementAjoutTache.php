<?php 

include('../core/init.php');
$_SESSION['id_user'] = 1;
if (isset($_POST['titre']) AND isset($_POST['date'])) {

	$tache = new Tache(array(
	  'id_projet_tache' =>  $_POST['idProjet'],
	  'titre_tache' => $_POST['titre'],
	  'date_remise_tache' => $_POST['date'],
	  'auteur_tache' => $_SESSION['id_user'],
	  'checked_tache' => "0",
	  'deleted_tache' => "0"
	));
	print_r($tache);
	print_r($_SESSION['id_user']);

	$tacheManager = new TacheManager($db);
	$tacheManager->addTache($tache);
	echo "success";
}



 ?>
