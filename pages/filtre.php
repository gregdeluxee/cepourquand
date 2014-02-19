<?php
	echo $_SERVER['DOCUMENT_ROOT'];
?>


<div id="filtre" class="contentmove displayNone">
	<ul>
		<li><input id="filtrePersonnel" checked type="checkbox"><label for="filtrePersonnel">Personnels</label></li>
		<li><input id="filtreCollaborateur" checked type="checkbox"><label for="filtreCollaborateur">Collaborateurs</label></li>
		<li><input id="filtreEtudiants" checked type="checkbox"><label for="filtreEtudiants">Etudiants</label></li>
		<li><input id="filtreProfesseurs" checked type="checkbox"><label for="filtreProfesseurs">Professeurs</label></li>
		<li class="liBgNo" ><input id="filtreProjVal" type="checkbox"><label for="filtreProjVal">Projets Validés</label></li>
	</ul>

</div><!-- End Filtre -->
