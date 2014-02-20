
//START JQUERY
$(function(){






  	var contentmove = $(".contentmove");
  	//Virer le login si deja connecté
  	$("#login").addClass("displayNone");
  	$("#login").addClass("translateX");
	$("#projets").removeClass("displayNone");


	var contentmove = $(".contentmove");
	var filtreCheck = $("#filtre input");
	var filtreCheckParent = $("#filtre input").parent("li");



	$(".menuAddTache").click(function() {
		$("#addTaches").toggleClass("displayNone");
		$("#menuTache").addClass("displayNone");
		$("#menuAddTache").removeClass("displayNone");
	})
	$(".menuMenuAnnulTache").click(function() {
		$("#addTaches").toggleClass("displayNone");
		$("#menuTache").removeClass("displayNone");
		$("#menuAddTache").addClass("displayNone");
	})


	$(".nbr_jours").each(function(){
		$this = $(this);
		var nbr_jours = $this.text().length;
		if (nbr_jours == 1) {
		}else if (nbr_jours == 2) {
			$this.css("font-size","30px").css("line-height", "2.6");
		}else{
			$this.css("font-size","20px").css("line-height", "4.2");
		}
	});
	$(".nbr_jours_tache").each(function(){
		$this = $(this);
		var nbr_jours = $this.text().length;
		if (nbr_jours == 1) {
			$this.css("font-size","36px").css("line-height", "2");
		}else if (nbr_jours == 2) {
			$this.css("font-size","26px").css("line-height", "2.2");
		}else{
			$this.css("font-size","20px").css("line-height", "2.7");
		}
	});

	$(".menuMenu").click(function(e){
		e.preventDefault();
		contentmove.toggleClass("menu_actif");
		$("#menuLateral").toggleClass("displayNone");

	})
	$(".menuAdd").click(function(e){
		e.preventDefault();
		$("#addProjet").removeClass("displayNone");
		$("#projets").addClass("displayNone");
		$("#menuLateral").toggleClass("displayNone");
		$("#menu").addClass("displayNone");
		$("#menuAddProjet").removeClass("displayNone");
	})
	$(".menuAnnulMenuAddProj").click(function(e){
		e.preventDefault();
		$("#addProjet").addClass("displayNone");
		$("#projets").removeClass("displayNone");
		$("#menuLateral").toggleClass("displayNone");
		$("#menu").removeClass("displayNone");
		$("#menuAddProjet").addClass("displayNone");
	})
	$(".menuAnnulMenuAddProjBis").click(function(e){
		e.preventDefault();
		$("#projetModif").addClass("displayNone");
		$("#projets").removeClass("displayNone");
		$("#menuLateral").toggleClass("displayNone");
		$("#menu").removeClass("displayNone");
		$("#menuModifrojet").addClass("displayNone");
	})
	$(".projetmodifedit").click(function(){
		$("#projets").addClass("displayNone");
		$("#projetModif").removeClass("displayNone");
		$("#menuLateral").toggleClass("displayNone");
		$("#menu").addClass("displayNone");
		$("#menuModifrojet").removeClass("displayNone");
	})
	$(".menuAnnulMenuAddProj").click(function(e){
		e.preventDefault();
		$("#addProjet").addClass("displayNone");
		$("#projets").removeClass("displayNone");
		$("#menuLateral").toggleClass("displayNone");
		$("#menu").removeClass("displayNone");
		$("#menuAddProjet").addClass("displayNone");
	})


	$(".projetDiscussion").click(function(){
		$("#projets").addClass("displayNone");
		$("#menu").addClass("displayNone");
		$("#menuChat").removeClass("displayNone");
		$("#chat").removeClass("displayNone");
	})

	$(".menuChatRetour").click(function(){
		$("#projets").removeClass("displayNone");
		$("#menu").removeClass("displayNone");
		$("#menuChat").addClass("displayNone");
		$("#chat").addClass("displayNone");
	})



	$(".menuLateRalGoDeco").click(function(){
		$("#taches, #menuTache, #projets, #menu, #filtre, #menuFiltres").addClass("displayNone");
	})
	$(".menuLateRalGoFiltre").click(function(){
		$("#taches, #menuTache, #projets, #menu").addClass("displayNone");
		$("#filtre, #menuFiltres").removeClass("displayNone");
		contentmove.toggleClass("menu_actif");
		$("#menuLateral").toggleClass("displayNone");


	})
	$(".menuLateRalGoTache").click(function(){
		$("#filtre, #menuFiltres, #projets, #menu").addClass("displayNone");
		$("#taches, #menuTache").removeClass("displayNone");
		contentmove.toggleClass("menu_actif");
		$("#menuLateral").toggleClass("displayNone");


	})
	$(".menuLateRalGoProjet").click(function(){
		$("#taches, #menuTache, #filtre, #menuFiltres").addClass("displayNone");
		$(" #projets, #menu").removeClass("displayNone");
		contentmove.toggleClass("menu_actif");
		$("#menuLateral").toggleClass("displayNone");

	})


	$(".projetAddTache").click(function() {
		$this = $(this);
		var thisParent = $this.parent("ul").parent("nav").prev(".addTachesprojet")
		thisParent.toggleClass("displayNone");
	})







	$(".addCollaboProjet").click(function(){
		$(".addProjetAddTacheInputCollabo").toggleClass("displayNone");
		$(".addProjetAddTacheInputTache").addClass("displayNone")
	})
	$(".addProjetAddTache").click(function(){
		$(".addProjetAddTacheInputTache").toggleClass("displayNone");
		$(".addProjetAddTacheInputCollabo").addClass("displayNone");
	})

	$(".addProjetAddTacheInputCollabo").children("span").click(function(){
		$(".addProjetAddTacheInputCollabo").addClass("displayNone");
	});
	$(".addProjetAddTacheInputTache").children("span").click(function(){
		$(".addProjetAddTacheInputTache").addClass("displayNone");
	})




	$('#filtre input').change(function() {
		$this = $(this);
		if ($this.is(':checked')) {
			$this.parent("li").removeClass("liBgNo");
	 	} else {
	  		$this.parent("li").addClass("liBgNo");
	  	}
	})


	$(".menuAnnulMenuAddProj").click(function(e){
		e.preventDefault();
		$("#addProjet").addClass("displayNone");
		$("#projets").removeClass("displayNone");
		$("#menuLateral").removeClass("displayNone");
		$("#menu").removeClass("displayNone");
		$("#menuAddProjet").addClass("displayNone");
	})

	$(".menuAnnulMenuAddProj").swipe({
    	tap:function(event, target) {
			$("#addProjet").addClass("displayNone");
			$("#projets").removeClass("displayNone");
			$("#menuLateral").removeClass("displayNone");
			$("#menu").removeClass("displayNone");
			$("#menuAddProjet").addClass("displayNone");
    	}
  	});



///////////////////////////////////   MUR DE BERLIN !!!!!!!!! je prend les comuniste !





//DECONNEXION AJAX TREATMENT
		//$("#unconnected").click(function(){
		$("#unconnected").swipe({
        	tap:function(event, target) {
        		eraseCookie('loged');
        		eraseCookie('login');
          		//DECONNEXION AJAX
          		$.ajax({
					type: "POST",
					url: './traitementAjax/traitementUnconnected.php',
					dataType : 'text',
					success : function(answer, statut){
						console.log(statut);
		           		if (answer == "success") {
		           			$("#login").removeClass("displayNone");
		           			$("#login").removeClass("translateX");
							contentmove.removeClass("menu_actif");
							$("#menuLateral").toggleClass("displayNone");
		           			$("#taches, #menuTache, #projets, #menu, #filtre, #menuFiltres").addClass("displayNone");
							$("body script[src='js/main.js']").remove();
							$("#taches, #projets, #filtre, #chat, #addProjet, #projetModif").remove();
		           		}else if (answer == "failed") {
		           			//WHAT HAPPEN IF BAD LOGIN OR BAD PASSWORD
		           			console.log('failed');
		           		};
				    },
				    error : function(resultat, statut, erreur){
				    	console.log("error");
				    },
				    complete : function(resultat, statut){
				    	console.log("complete");
				    }
				});// END DECONNEXION AJAX
        	}
      	});

//ADD PROJET TREATMENT
	$("#addProjetForm").submit(function(e) {
		e.preventDefault();
		var donnees = $(this).serialize();
		// ADD PROJET TREATMENT AJAX
		$.ajax({
			type: "POST",
			url: './traitementAjax/traitementAjoutProjet.php',
			data: donnees,
			dataType : 'text',
			success : function(answer, statut){
				console.log(answer);
				console.log(donnees);
				if (answer == "success") {
					console.log("success")

					$("#addProjet").addClass("displayNone");
					$("#projets").removeClass("displayNone");
					$("#menuLateral").removeClass("displayNone");
					$("#menu").removeClass("displayNone");
					$("#menuAddProjet").addClass("displayNone");

				}else if (answer == "failed") {
					console.log("failed")
           		};
			},
		    error : function(resultat, statut, erreur){
		    	console.log("error")
		    },
		    complete : function(resultat, statut){

		    }
		});// END PROJET TREATMENT AJAX
	});// END PROJET SUBMIT



//ADD TACHE TREATMENT
	$("#addTacheForm").submit(function(e) {
		e.preventDefault();
		var donnees = $(this).serialize();
		// ADD PROJET TREATMENT AJAX
		$.ajax({
			type: "POST",
			url: './traitementAjax/traitementAjoutTache.php',
			data: donnees,
			dataType : 'text',
			success : function(answer, statut){
				console.log(answer);
				console.log(donnees);
				if (answer == "success") {
					console.log("success")
					$("#addTaches").toggleClass("displayNone");
					$("#menuTache").removeClass("displayNone");
					$("#menuAddTache").addClass("displayNone");
				}else if (answer == "failed") {
					console.log("failed")
           		};
			},
		    error : function(resultat, statut, erreur){
		    	console.log("error")
		    },
		    complete : function(resultat, statut){

		    }
		});// END PROJET TREATMENT AJAX
	});// END PROJET SUBMIT




	$(".projetsClose").swipe({
		//excludedElements: "button, input, select, textarea, .noSwipe",
		allowPageScroll: "vertical",
		threshold:0,
		triggerOnTouchLeave:true,
		fingers:'all',
		swipeStatus:function(event, phase, direction, distance, duration, fingerCount){
			console.log(phase);
			console.log(duration);
			//On start
			if(phase == "start"){

			};
			//Finger animation
			if(phase == "move"){
				if(direction == "right"){

				}
				else if(direction == "left"){

				}
			};
			//Redirect when click/tap a link
			if(phase == "end" && duration < 150 ){
				console.log("OUVRE");
				if ($(this).hasClass("xxOpen")) {
					$(".projetsOpen").addClass("displayNone");
					$(this).removeClass("xxOpen");
					console.log("il l'aaaaaaa")
				}else{
					$(".projetsOpen").addClass("displayNone");
					var projetsOpen = $(this).next(".projetsOpen");
					projetsOpen.toggleClass("displayNone");
					$(this).parent(".projetContainer").parent("li").toggleClass("projetsOppenClass");
					$(".projetsClose").removeClass("xxOpen");
					$(this).addClass("xxOpen");
					console.log("il l'aaaaaaaaaaaaaaaaaaaaaaaaaa")
				}
			};
			//Swipe animation
			if(phase == "end" && duration > 150 ){
				$idProjet = $(this).data("id-projet");
				var donnees = $idProjet;
				if(direction == "right"){
/*
					$.ajax({
						type: "POST",
						url: './traitementAjax/traitementChekedProjet.php',
						data: donnees,
						dataType : 'text',
						success : function(answer, statut){
							console.log(answer);
							console.log(donnees);
							if (answer == "success") {

							}else if (answer == "failed") {
								console.log("failed")
			           		};
						},
					    error : function(resultat, statut, erreur){
					    	console.log("error")
					    },
					    complete : function(resultat, statut){

					    }
					});// END PROJET TREATMENT AJAX
*/
				}
				else if(direction == "left"){

				}
			};
			if(phase == "cancel"){
				//nothing happen. Normaly impossible to get this phase.
				//alert(phase);
			};
		}
	});







}); // END JQUERY


