<?php 

include('../core/init.php');
$_SESSION['id_user'] = 1;
if (isset($_POST['titre']) AND isset($_POST['date'])) {

	$projet = new Projet(array(
	  'titre_projet' => $_POST['titre'],
	  'date_remise_projet' => $_POST['date'],
	  'auteur_projet' => $_SESSION['id_user'],
	  'professeur_projet' =>  $_POST['professeur'],
	  'cours_projet' =>  $_POST['cours'],
	  'briefing_projet' =>  $_POST['briefing']
	));
	print_r($projet);
	print_r($_SESSION['id_user']);

	$projetManager = new ProjetManager($db);
	$projetManager->addProjet($projet);
	echo "success";
}



 ?>
