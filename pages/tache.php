<?php
	// AFFICHER TITRE PROJET A LA PLACE DE L'ID
	$tacheManager = new TacheManager($db);
    $taches = $tacheManager->getTacheByUserId($_SESSION['id_user']);

?>


<div id="taches" class="contentmove "> <!-- displayNone -->
	<div id="addTaches" class="displayNone">
		<form id="addTacheForm" action="#" method="POST">
			<fieldset>
				<label for="dateAddTache"></label>
				<input id="dateAddTache" type="date" name="date">
				<input type="text" placeholder="Nom de la Tâche..." name="titre">
				<input type="hidden" name="idProjet" value="">
			</fieldset>
			<input type="submit" id="tacheAddSubmit" name="submit">
		</form>
	</div><!-- End ADD TACHE -->

	<ul>
		<?php 
		foreach ($taches as $tache) {
			?>
			<li>
				<span class="joursTache" ><span class="nbr_jours_tache_tache"><?php echo $tache->jourRestant();?></span>j</span>
				<div>
					<p><?php echo $tache->titre_tache(); ?></p>
					<span class="tacheProjectName"><?php echo $tache->id_projet_tache(); ?></span>
				</div>
			</li>
			<?php 
		}

		?>
	</ul>
<!--



	<ul>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">1</span>j</span>
			<div>
				<p>Cohér à revoir.</p>
				<span class="tacheProjectName">j'aime le sexe</span>
			</div>
		</li>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">11</span>j</span>
			<div>
				<p>Cohér à revrigsiodgnodsi sign kjh kjh klxldkgn oir.</p>
				<span class="tacheProjectName">ET la BIERE</span>
			</div>
		</li>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">69</span>j</span>
			<div>
				<p>Cohér à revosdkfnxs doijg soidhfs fvuishf sdjkfir.</p>
				<span class="tacheProjectName"></span>
			</div>
		</li>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">1</span>j</span>
			<div>
				<p>Cohér à revoir.</p>
				<span class="tacheProjectName">j'aime le sexe</span>
			</div>
		</li>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">11</span>j</span>
			<div>
				<p>Cohér à revrigsiodgnodsi sign kjh kjh klxldkgn oir.</p>
				<span class="tacheProjectName">ET la BIERE</span>
			</div>
		</li>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">69</span>j</span>
			<div>
				<p>Cohér à revosdkfnxs doijg soidhfs fvuishf sdjkfir.</p>
				<span class="tacheProjectName"></span>
			</div>
		</li>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">1</span>j</span>
			<div>
				<p>Cohér à revoir.</p>
				<span class="tacheProjectName">j'aime le sexe</span>
			</div>
		</li>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">11</span>j</span>
			<div>
				<p>Cohér à revrigsiodgnodsi sign kjh kjh klxldkgn oir.</p>
				<span class="tacheProjectName">ET la BIERE</span>
			</div>
		</li>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">69</span>j</span>
			<div>
				<p>Cohér à revosdkfnxs doijg soidhfs fvuishf sdjkfir.</p>
				<span class="tacheProjectName"></span>
			</div>
		</li>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">1</span>j</span>
			<div>
				<p>Cohér à revoir.</p>
				<span class="tacheProjectName">j'aime le sexe</span>
			</div>
		</li>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">11</span>j</span>
			<div>
				<p>Cohér à revrigsiodgnodsi sign kjh kjh klxldkgn oir.</p>
				<span class="tacheProjectName">ET la BIERE</span>
			</div>
		</li>
		<li>
			<span class="joursTache" ><span class="nbr_jours_tache_tache">69</span>j</span>
			<div>
				<p>Cohér à revosdkfnxs doijg soidhfs fvuishf sdjkfir.</p>
				<span class="tacheProjectName"></span>
			</div>
		</li>
		<li></li>
		<li></li>
	</ul>
-->
</div><!-- End taches -->
