<?php

 	$projetManager = new ProjetManager($db);
 	if ($projetManager->exists($_SESSION['id_user'])) {
    	$projets = $projetManager->getProjetByUserId($_SESSION['id_user']);
	}

    $tacheManager = new TacheManager($db);
	if ($tacheManager->exists($_SESSION['id_user'])) {
    	$taches = $tacheManager->getTacheByUserId($_SESSION['id_user']);
	}


?>

<div id="projets" class="contentmove">
	<ul>
	<?php
	if ($projetManager->exists($_SESSION['id_user'])) {
		foreach ($projets as $projet) {
			?>
			<li>
				<div class="projetValide"></div>
				<div class="projetSup"></div>
				<div class="projetContainer" >
					<div class="projetsClose">
						<div class="jours">
							<span><span class="nbr_jours"><?php echo $projet->jourRestant(); ?></span>j</span>
						</div>
						<div class="projetContent">
							<h1><?php echo $projet->titre_projet() ?></h1>
							<div class="projetProf"><?php echo $projet->cours_projet(); ?></div>
							<div class="projetCreat"><?php echo $projet->auteur_prenom_projet(); ?></div>
						</div>
					</div>
					<div class="projetsOpen displayNone">
						<ul>
							<?php
								foreach ($taches as $tache) {
									if ($tache->id_projet_tache() == $projet->id_projet()) {
										?>
											<li>
												<span class="projetJoursTache" ><span class="nbr_jours_tache"><?php echo $tache->jourRestant();?></span>j</span>
												<p><?php echo $tache->titre_tache(); ?></p>
											</li>
										<?php
									}
								}
							?>
						</ul>
						<div class="addTachesprojet displayNone">
							<form class="addTacheFormprojet" action="#" method="POST">
								<fieldset>
									<label for="dateAddTacheprojet"></label>
									<input id="dateAddTacheprojet" type="date" name="date">
									<input type="text" placeholder="Nom de la Tâche..." name="titre">
									<input type="hidden" name="idProjet" value="<?php echo $projet->id_projet() ?>">
									<label class="submitClassprojettacheAdd" for="tacheProjetAddSubmit">OK</label>
								</fieldset>
								<input type="submit" id="tacheProjetAddSubmit" name="submit">
							</form>
						</div><!-- End ADD TACHE -->
						<nav>
							<ul>
								<li class="projetAddTache">
									<div>
										<span></span>
										<span></span>
									</div>
									<p>Ajouter une tâche</p>
								</li>
								<li class="projetDiscussion" data-id-projet="<?php echo $projet->id_projet(); ?>"><div></div><p>Discussion</p></li>
								<li><div></div><p>Briefing</p></li>
								<li><div></div><p>Collaborateurs</p></li>
								<li class="projetmodifedit"><div><p>Modifier</p></div></li>
							</ul>
						</nav>
					</div>
				</div>
			</li>
			<?php
		}
	}else{
		?>
			<li>
				<div class="projetValide"></div>
				<div class="projetSup"></div>
				<div class="projetContainer" >
					<div class="projetsClose">
						<div class="jours">
							<span><span class="nbr_jours">3</span>j</span>
						</div>
						<div class="projetContent">
							<h1>Appuie sur la croix pour ajouter un projet</h1>
							<div class="projetProf">Le cours</div>
							<div class="projetCreat">L'auteur du projet</div>
						</div>
					</div>
					<div class="projetsOpen displayNone">
						<ul>
							<li>
								<span class="projetJoursTache" ><span class="nbr_jours_tache">1</span>j</span>
								<p>Ici tu pourras ajouter des tâches pour ce projet.</p>
							</li>
						</ul>
						<div class="addTachesprojet displayNone">
							<form id="addTacheFormprojet" action="#" method="POST">
								<fieldset>
									<label for="dateAddTacheprojet"></label>
									<input id="dateAddTacheprojet" type="date" name="date">
									<input type="text" placeholder="Nom de la Tâche..." name="titre">
									<input type="hidden" name="idProjet" value="">
									<label class="submitClassprojettacheAdd" for="tacheProjetAddSubmit">OK</label>
								</fieldset>
								<input type="submit" id="tacheProjetAddSubmit" name="submit">
							</form>
						</div><!-- End ADD TACHE -->
						<nav>
							<ul>
								<li class="projetAddTache">
									<div>
										<span></span>
										<span></span>
									</div>
									<p>Ajouter une tâche</p>
								</li>
								<li><div></div><p>Discussion</p></li>
								<li><div></div><p>Briefing</p></li>
								<li><div></div><p>Collaborateurs</p></li>
								<li class="projetmodifedit"><div><p>Modifier</p></div></li>
							</ul>
						</nav>
					</div>
				</div>
			</li>
		<?php
	}
	?>

	</ul>
</div><!-- End projets -->
