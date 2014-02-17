<?php 
echo $_SERVER['DOCUMENT_ROOT'];


 ?>


<div id="taches">

	<h1>Ajouter UNE TACHE</h1>
	<form id="addTacheForm" action="#" method="POST">
		<fieldset>
			<input type="text" name="titre">
			<input type="text" name="date">
			<input type="hidden" name="idProjet" value="1">
		</fieldset>
		<input type="submit" name="submit">
	</form>

</div><!-- End taches -->
