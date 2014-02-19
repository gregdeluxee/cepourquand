<?php  ?>

<div id="addProjet" class="displayNone">
	<form id="addProjetForm" action="#" method="POST">
		<fieldset>
			<div class="dateName" >
				<label for="dataAddProjet"></label>
				<input id="dataAddProjet" type="date" name="date">
				<input type="text" placeholder="Nom du projet..." name="titre">
			</div>
			<div class="addProjetAddTacheInputTache displayNone">
				<span>OK</span>
				<input placeholder="Ajoute ta tâche ici..." name="addTacheProjet" id="addTacheProjet" type="text">
			</div>
			<div class="addProjetAddTacheInputCollabo displayNone">
				<span>OK</span>
				<input placeholder="prenom.nom prenom.nom 3tid2 3tid1" name="addCollaboProj" id="addCollaboProj" type="text">
			</div>
			<label class="addProjetAddTache" for="addTacheProjet">
				<div>
					<span></span>
					<span></span>
				</div>
				<p>Ajouter une tâche</p>
			</label>
			<select name="cours">
				<option value="">Cours / Prof</option>
				<option value="Di Stefano O. (T.num.av. 2)">Di Stefano O. (Tna 2)</option>
				<option value="Plennevaux A. (T.infog.app. 2/2)">Plennevaux A. (Tia 2/2)</option>
				<option value="Bourgaux F. (Dév. de proj.)">Bourgaux F. (Dév.proj)</option>
				<option value="Florence E. (ActionScript)">Florence E. (AS)</option>
				<option value="Florence E. (T. spéciales 2)">Florence E. (Ts 2)</option>
				<option value="Thronte P. (T. spéciales 3)">Thronte P. (Ts 3)</option>
			</select>
			<input type="text" placeholder="Briefing" name="briefing">
			<div class="addCollaboProjet" >Collaborateurs</div>

		</fieldset>
		<input id="projetAddSubmit" type="submit" name="submit">
	</form>
</div><!-- End addProjet -->
