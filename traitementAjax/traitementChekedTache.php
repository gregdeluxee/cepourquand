<?php 

include('../core/init.php');
if (isset($_POST['id-tache'])) {
	$id_tache = $_POST['id-tache'];
	$tacheManager = new TacheManager($db);
	$tacheManager->updateCheckedTache($_SESSION['id_user'], $id_tache);
	echo "success";
}
	
 ?>
