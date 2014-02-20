<?php  ?>

<div id="addProjet" class="displayNone"><!--displayNone-->
	<form id="addProjetForm" action="#" method="POST">
		<fieldset>
			<div class="dateName" >
				<label for="dataAddProjet"></label>
				<input id="dataAddProjet" type="date" name="date">
				<input type="text" placeholder="Nom du projet..." name="titre">
			</div>
			<div class="addProjetAddTacheInputTache displayNone">
				<span>OK</span>
				<input placeholder="Ajoute ta tâche ici..." name="tache1" id="addTacheProjet" type="text">
				<input id="dateAddTacheprojet" type="hidden" name="dateTache1"> <!-- A SUP, c'est juste pr tester mon php le temps que tu fasses la modif -->
<!--

	CA ICI EN COM C'EST LE HTML DE LA PAGE PROJET AJOUT D'UNE TACHE. J'ai essayé de le placer mais ça foire. Surement à cause du css trop ciblé. Faut que t'arrange ça, avoir la même chose que sur la page. thx ;)
				<label for="dateAddTacheprojet"></label>
				<input id="dateAddTacheprojet" type="date" name="dateTache1">
				<input type="text" placeholder="Nom de la Tâche..." name="tache1" id="addTacheProjet">
-->
			</div>
			<div class="addProjetAddTacheInputCollabo displayNone">
				<span>OK</span>
				<input placeholder="prenom.nom prenom.nom 3tid2 3tid1" name="collaborateurs" id="addCollaboProj" type="text">
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
