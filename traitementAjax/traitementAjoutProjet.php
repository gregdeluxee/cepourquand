<?php 

include('../core/init.php');
$_SESSION['id_user'] = 1;
if (isset($_POST['titre']) AND isset($_POST['date'])) {

	$projet = new Projet(array(
	  'titre_projet' => $_POST['titre'],
	  'date_remise_projet' => $_POST['date'],
	  'auteur_projet' => $_SESSION['id_user'],
	  'cours_projet' =>  $_POST['cours'],
	  'briefing_projet' =>  $_POST['briefing']
	));
	$projetManager = new ProjetManager($db);
	$projetId = $projetManager->addProjet($projet);
	print_r($projetId);
	if (isset($_POST['collaborateurs'])) {
		$collaborateurs = $_POST['collaborateurs'];
		$collaborateurs = trim($collaborateurs);
		$collaborateurs = preg_replace('/\s{2,}/', ' ', $collaborateurs);
		$collaborateur = explode(' ',$collaborateurs);
		print_r($collaborateur);

		foreach ($collaborateur as $value) {
			$userManager = new UserManager($db);
			$idUser = $userManager->getIdByLogin($value);
			print_r($projetManager->getNextProjetId());
			$projetManager->addCollaborateur($projetManager->getNextProjetId(), $idUser);
		}
	}









	echo "success";
}



 ?>
