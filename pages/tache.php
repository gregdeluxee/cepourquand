<?php
echo $_SERVER['DOCUMENT_ROOT'];
?>


<div id="taches" class="contentmove">
	<div id="addTaches" class="contentmove">
		<h1>Ajouter UNE TACHE</h1>
		<form id="addTacheForm" action="#" method="POST">
			<fieldset>
				<input type="text" name="titre">
				<input type="text" name="date">
				<input type="hidden" name="idProjet" value="1">
			</fieldset>
			<input type="submit" name="submit">
		</form>
	</div><!-- End ADD TACHE -->
	<ul>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">1</span>j</span>
			<div>
				<p>Cohér à revoir.</p>
				<span class="tacheProjectName"></span>
			</div>
		</li>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">1</span>j</span>
			<div>
				<p>Cohér à revoir.</p>
				<span class="tacheProjectName"></span>
			</div>
		</li>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">1</span>j</span>
			<div>
				<p>Cohér à revoir.</p>
				<span class="tacheProjectName"></span>
			</div>
		</li>
		<li></li>
		<li></li>
	</ul>
</div><!-- End taches -->
