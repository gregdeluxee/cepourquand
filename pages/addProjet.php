<?php  ?>

<div id="addProjet" class="displayNone"><!--displayNone-->
	<form id="addProjetForm" action="#" method="POST">
		<fieldset>
			<div class="dateName" >
				<label for="dataAddProjet"></label>
				<input id="dataAddProjet" type="date" name="date">
				<input type="text" placeholder="Nom du projet..." name="titre">
			</div>
			<ul>
			<!--
				<li>
					<span class="projetJoursTache" ><span class="nbr_jours_tache">1</span>j</span>
					<p>Cohérence dsfsdfdsfgd dsgnxvn nfxb ioxfnv cofn cjngvc, ogne dfngld dng ng ijb dingoidhgo  oigndskfns  à revoir.</p>
				</li>
			-->
			</ul>
			<div class="addProjetAddTacheInputTache displayNone" data-nb="1">
				<label for="dateAddTacheprojetxxx"></label>
				<input id="dateAddTacheprojetxxx" type="date" name="dateTache1">
				<input type="text" placeholder="Nom de la Tâche..." name="tache1" id="addTacheProjet">
				<span>OK</span>
			</div>
			<div class="addProjetAddTacheInputCollabo displayNone">
				<input placeholder="prenom.nom prenom.nom 3tid2 3tid1" name="collaborateurs" id="addCollaboProj" type="text">
				<span>OK</span>
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
