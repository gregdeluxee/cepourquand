<?php 

include('../core/init.php');
if (isset($_POST['id-projet'])) {
	$id_projet = $_POST['id-projet'];
	$projetManager = new ProjetManager($db);
	$projetManager->updateChekedProjet($_SESSION['id_user'], $id_projet);
	echo "success";
}
	
 ?>
