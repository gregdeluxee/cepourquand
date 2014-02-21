<?php  ?>

<div id="menuLateral" class="displayNone">
	<div class="menuLateralTop">
		<div><img class="profil_image" src="<?php echo $_SESSION['url_img_user']; ?>" alt="profil image"></div>
		<h1 class="profilName"><?php echo $_SESSION['prenom_user'].' '.$_SESSION['nom_user']; ?></h1>
	</div>

	<nav>
		<ul>
			<li class="menuLateRalGoProjet"><span></span>Projets</li>
			<li class="menuLateRalGoTache"><span></span>Tâches</li>
			<li class="menuLateRalGoFiltre displayNone"><span></span>Filtres</li>
			<li class="menuLateRalGoDeco" id="unconnected"><span></span>Déconnexion</li>
		</ul>
	</nav>

</div><!-- End menu -->