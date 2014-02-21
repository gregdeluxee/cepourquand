<?php
	// AFFICHER TITRE PROJET A LA PLACE DE L'ID
	$tacheManager = new TacheManager($db);
	if ($tacheManager->exists($_SESSION['id_user'])) {
    	$taches = $tacheManager->getTacheByUserId($_SESSION['id_user']);		
	}

	$projetManager = new ProjetManager($db);
 	if ($projetManager->exists($_SESSION['id_user'])) {
    	$projets = $projetManager->getProjetByUserId($_SESSION['id_user']);
	}

?>


<div id="taches" class="contentmove displayNone"> <!-- displayNone -->
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
		<li class="displayNone" id="xxTachePull">
			<span class="joursTache" ><span class="nbr_jours_tache_tache"></span></span>
			<div>
				<p>Tâche ajoutée. Tirer vers le bas pour rafraichir !</p>
				<span class="tacheProjectName"></span>
			</div>
		</li>
		<?php 
		if ($tacheManager->exists($_SESSION['id_user'])) {
			foreach ($taches as $tache) {
				?>
				<li>
					<div class="projetValide"></div>
   					<div class="projetSup"></div>
   					<div class="liContentTache">
						<span class="joursTache" ><span class="nbr_jours_tache_tache"><?php echo $tache->jourRestant();?></span>j</span>
						<div>
							<p><?php echo $tache->titre_tache(); ?></p>
							<span class="tacheProjectName">
								<?php
									foreach ($projets as $projet) {
										if ($projet->id_projet() == $tache->id_projet_tache()) {
											echo $projet->titre_projet();
										}
									}
								?>
							</span>
						</div>
					</div>
				</li>
				<?php 
			}
		}else{
			?>
			<li>
				<span class="joursTache" ><span class="nbr_jours_tache_tache">1</span>j</span>
				<div>
					<p>Appuie sur + pour ajouter une tâche ;)</p>
					<span class="tacheProjectName"></span>
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
