<?php 
include('../core/init.php');
if (isset($_POST['titre']) AND isset($_POST['date']) AND strlen($_POST['titre'])>0) {
	
	$projet = new Projet(array(
	  'titre_projet' => $_POST['titre'],
	  'date_remise_projet' => $_POST['date'],
	  'auteur_id_projet' => $_SESSION['id_user'],
	  'auteur_prenom_projet' => $_SESSION['prenom_user']." ".$_SESSION['nom_user'],
	  'cours_projet' =>  $_POST['cours'],
	  'briefing_projet' =>  $_POST['briefing']
	));
	$projetManager = new ProjetManager($db);
	$projetId = $projetManager->addProjet($projet);
	$projetManager->addCollaborateur($projetId, $_SESSION['id_user']);

	if (isset($_POST['collaborateurs']) AND strlen($_POST['collaborateurs'])>0) {
		$collaborateurs = $_POST['collaborateurs'];
		$collaborateurs = trim($collaborateurs);
		$collaborateurs = preg_replace('/\s{2,}/', ' ', $collaborateurs);
		$collaborateur = explode(' ',$collaborateurs);

		foreach ($collaborateur as $value) {
			$userManager = new UserManager($db);
			$idUser = $userManager->getIdByLogin($value);
			$projetManager->addCollaborateur($projetId, $idUser[0]);
		}
	}
	$nbTache = 1;
	while (isset($_POST['tache'.$nbTache]) AND strlen($_POST['tache'.$nbTache])>0){
		$tache = new Tache(array(
		  'id_projet_tache' =>  $projetId,
		  'titre_tache' => $_POST['tache'.$nbTache],
		  'date_remise_tache' => $_POST['dateTache'.$nbTache],
		  'auteur_tache' => $_SESSION['id_user'],
		  'checked_tache' => "0",
		  'deleted_tache' => "0"
		));
		$tacheManager = new TacheManager($db);
		$tacheManager->addTache($tache);

		$nbTache+=1;
	}

	echo "success";
}
else{
	echo "failed";
}



 ?>
