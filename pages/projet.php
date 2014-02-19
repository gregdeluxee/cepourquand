<?php 

 	$projetManager = new ProjetManager($db);
    $projets = $projetManager->getProjetByUserId($_SESSION['id_user']);
    print_r($projets);

 ?>
<div id="projets" class="contentmove">
	<ul>






		<li>
			<div class="projetValide"></div>
			<div class="projetSup"></div>
			<div class="projetContainer" >
				<div class="projetsClose">
					<div class="jours">
						<span><span class="nbr_jours">3</span>j</span>
					</div>
					<div class="projetContent">
						<h1>Flowchart Life</h1>
						<div class="projetProf">DIEU</div>
						<div class="projetCreat">Antonin lambinet</div>
					</div>
				</div>
				<div class="projetsOpen">
					<ul>
						<li>
							<span class="projetJoursTache" ><span class="nbr_jours_tache">1</span>j</span>
							<p>Cohérence dsfsdfdsfgd dsgnxvn nfxb ioxfnv cofn cjngvc, ogne dfngld dng ng ijb dingoidhgo  oigndskfns  à revoir.</p>
						</li>
						<li>
							<span class="projetJoursTache" ><span class="nbr_jours_tache">1</span>j</span>
							<p>Cohérence graphique à revoir.</p>
						</li>
						<li>
							<span class="projetJoursTache" ><span class="nbr_jours_tache">1</span>j</span>
							<p>Cohérence graphique à revoir.</p>
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
							<li><div><p>Modifier</p></div></li>
						</ul>
					</nav>
				</div>

			</div>

		</li>


		<li>
			<div class="projetValide"></div>
			<div class="projetSup"></div>
			<div class="projetContainer" >
				<div class="projetsClose">
					<div class="jours">
						<span><span class="nbr_jours">3</span>j</span>
					</div>
					<div class="projetContent">
						<h1>Flowchart Life</h1>
						<div class="projetProf">DIEU</div>
						<div class="projetCreat">Antonin lambinet</div>
					</div>
				</div>
				<div class="projetsOpen">
					<ul>
						<li>
							<span class="projetJoursTache" ><span class="nbr_jours_tache">1</span>j</span>
							<p>Cohérence dsfsdfdsfgd dsgnxvn nfxb ioxfnv cofn cjngvc, ogne dfngld dng ng ijb dingoidhgo  oigndskfns  à revoir.</p>
						</li>
						<li>
							<span class="projetJoursTache" ><span class="nbr_jours_tache">1</span>j</span>
							<p>Cohérence graphique à revoir.</p>
						</li>
						<li>
							<span class="projetJoursTache" ><span class="nbr_jours_tache">1</span>j</span>
							<p>Cohérence graphique à revoir.</p>
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
							<li><div><p>Modifier</p></div></li>
						</ul>
					</nav>
				</div>

			</div>

		</li>

		<li>
			<div class="projetValide"></div>
			<div class="projetSup"></div>
			<div class="projetContainer" >
				<div class="projetsClose">
					<div class="jours">
						<span><span class="nbr_jours">3</span>j</span>
					</div>
					<div class="projetContent">
						<h1>Flowchart Life</h1>
						<div class="projetProf">DIEU</div>
						<div class="projetCreat">Antonin lambinet</div>
					</div>
				</div>
				<div class="projetsOpen">
					<ul>
						<li>
							<span class="projetJoursTache" ><span class="nbr_jours_tache">1</span>j</span>
							<p>Cohérence dsfsdfdsfgd dsgnxvn nfxb ioxfnv cofn cjngvc, ogne dfngld dng ng ijb dingoidhgo  oigndskfns  à revoir.</p>
						</li>
						<li>
							<span class="projetJoursTache" ><span class="nbr_jours_tache">1</span>j</span>
							<p>Cohérence graphique à revoir.</p>
						</li>
						<li>
							<span class="projetJoursTache" ><span class="nbr_jours_tache">1</span>j</span>
							<p>Cohérence graphique à revoir.</p>
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
							<li><div><p>Modifier</p></div></li>
						</ul>
					</nav>
				</div>

			</div>

		</li>

		<li>
			<div class="projetValide"></div>
			<div class="projetSup"></div>
			<div class="projetContainer" >
				<div class="projetsClose">
					<div class="jours">
						<span><span class="nbr_jours">3</span>j</span>
					</div>
					<div class="projetContent">
						<h1>Flowchart Life</h1>
						<div class="projetProf">DIEU</div>
						<div class="projetCreat">Antonin lambinet</div>
					</div>
				</div>
				<div class="projetsOpen">
					<ul>
						<li>
							<span class="projetJoursTache" ><span class="nbr_jours_tache">1</span>j</span>
							<p>Cohérence dsfsdfdsfgd dsgnxvn nfxb ioxfnv cofn cjngvc, ogne dfngld dng ng ijb dingoidhgo  oigndskfns  à revoir.</p>
						</li>
						<li>
							<span class="projetJoursTache" ><span class="nbr_jours_tache">1</span>j</span>
							<p>Cohérence graphique à revoir.</p>
						</li>
						<li>
							<span class="projetJoursTache" ><span class="nbr_jours_tache">1</span>j</span>
							<p>Cohérence graphique à revoir.</p>
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
							<li><div><p>Modifier</p></div></li>
						</ul>
					</nav>
				</div>

			</div>

		</li>



	</ul>
</div><!-- End projets -->
