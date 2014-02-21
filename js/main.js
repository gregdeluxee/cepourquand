//var urlLink ='http://localhost/cepourquand'; //LOCAL
var urlLink ='http://cepourkan.eu'; //ONLINE

//START JQUERY
$(function(){

	var contentmove = $(".contentmove");
	var filtreCheck = $("#filtre input");
	var filtreCheckParent = $("#filtre input").parent("li");

//Virer le login si deja connecté

	$("#login").addClass("translateX").addClass("displayNone");
	$("#projets").removeClass("displayNone");

//click sur ok dans ajout de tache

	$(".menuAddTache").swipe({
		tap:function(event, target) {
			$("#addTaches").toggleClass("displayNone");
			$("#menuTache").addClass("displayNone");
			$("#menuAddTache").removeClass("displayNone");
		}
	});

//click sur annuler dans ajout de tache

	$(".menuMenuAnnulTache").swipe({
		tap:function(event, target) {
			$("#addTaches").toggleClass("displayNone");
			$("#menuTache").removeClass("displayNone");
			$("#menuAddTache").addClass("displayNone");
		}
	});

//Lance le menu lateral

	$(".menuMenu").swipe({
		tap:function(event, target) {
			contentmove.toggleClass("menu_actif");
			$("#menuLateral").toggleClass("displayNone");
		}
	});

// projet , add tache

	$(".menuAdd").swipe({
		tap:function(event, target) {
			$("#projets, #menu").addClass("displayNone");
			//$("#menuLateral").toggleClass("displayNone");
			$("#menuAddProjet, #addProjet").removeClass("displayNone");
		}
	});

//Click sur annuler dans modifier un projet

	$(".menuAnnulMenuAddProjBis").swipe({
		tap:function(event, target) {
			//$("#menuLateral").toggleClass("displayNone");
			$("#menu, #projets").removeClass("displayNone");
			$("#menuModifrojet, #projetModif").addClass("displayNone");
		}
	});

//Click sur annuler dans ajouter un projet

	$(".menuAnnulMenuAddProj").swipe({
		tap:function(event, target) {
			//$("#menuLateral").toggleClass("displayNone");
			$("#menu, #projets").removeClass("displayNone");
			$("#menuAddProjet, #addProjet").addClass("displayNone");
		}
	});

//Click sur modifier un projet :p

	$(".projetmodifedit").swipe({
		tap:function(event, target) {
			//$("#menuLateral").toggleClass("displayNone");
			$("#menu, #projets").addClass("displayNone");
			$("#menuModifrojet, #projetModif").removeClass("displayNone");
		}
	});

// le click sur le booton retour du menu Chat

	$(".menuChatRetour").swipe({
		tap:function(event, target) {
			$("#menu, #projets").removeClass("displayNone");
			$("#menuChat, #chat").addClass("displayNone");
		}
	});

//click dans projet sur discution

	$(".projetDiscussion").swipe({
		tap:function(event, target) {
			$("#menu, #projets").addClass("displayNone");
			$("#menuChat, #chat").removeClass("displayNone");
		}
	});

// les 4 diferent bouton dans le menu lateral

	$(".menuLateRalGoProjet").swipe({
		tap:function(event, target) {
			$("#taches, #menuTache, #filtre, #menuFiltres").addClass("displayNone");
			$("#projets, #menu").removeClass("displayNone");
			$("#menuLateral").toggleClass("displayNone");
			setTimeout(function(){
				contentmove.toggleClass("menu_actif");
			},50);
		}
	});
	$(".menuLateRalGoTache").swipe({
		tap:function(event, target) {
			$("#filtre, #menuFiltres, #projets, #menu").addClass("displayNone");
			$("#taches, #menuTache").removeClass("displayNone");
			$("#menuLateral").toggleClass("displayNone");
			setTimeout(function(){
				contentmove.toggleClass("menu_actif");
			},50);
		}
	});
	$(".menuLateRalGoFiltre").swipe({
		tap:function(event, target) {
			$("#taches, #menuTache, #projets, #menu").addClass("displayNone");
			$("#filtre, #menuFiltres").removeClass("displayNone");
			$("#menuLateral").toggleClass("displayNone");
			setTimeout(function(){
				contentmove.toggleClass("menu_actif");
			},50);
		}
	});

// ajout une tache dans projet

	$(".projetAddTache").swipe({
		tap:function(event, target) {
			$this = $(this);
			var thisParent = $this.parent("ul").parent("nav").prev(".addTachesprojet")
			thisParent.toggleClass("displayNone");
		}
	});

// click sur annuler dans le menu

	$(".menuAnnulMenuAddProj").swipe({
		tap:function(event, target) {
			$("#addProjet, #menuAddProjet").addClass("displayNone");
			$("#projets, #menu").removeClass("displayNone");
		}
	});

// les ajout de tache dans projet add modif ...

	$(".addCollaboProjet").swipe({
		tap:function(event, target) {
			$(".addProjetAddTacheInputCollabo").toggleClass("displayNone");
			$(".addProjetAddTacheInputTache").addClass("displayNone")
		}
	});

	$(".addProjetAddTache").swipe({
		excludedElements: "button, input, select, textarea, .noSwipe",
		tap:function(event, target) {
			console.log("kedis");
			$(".addProjetAddTacheInputTache").toggleClass("displayNone");
			$(".addProjetAddTacheInputCollabo").addClass("displayNone");
		}
	});

	$(".addProjetAddTacheInputCollabo").children("span").swipe({
		tap:function(event, target) {
			$(".addProjetAddTacheInputCollabo").addClass("displayNone");
		}
	});
	//appuie sur ok ajout tache add projet
	$(".addProjetAddTacheInputTache").children("span").swipe({
		tap:function(event, target) {
			$(".addProjetAddTacheInputTache").addClass("displayNone");
		}
	});

/*
	//appuie sur ok ajout tache add projet
	var nbTache = 1, nbTacheNext;
	$(".addProjetAddTacheInputTache").children("span").swipe({
		tap:function(event, target) {
			$(this).parent($(".addProjetAddTacheInputTache")).addClass("displayNone");
			nbTacheNext = nbTache+1;
			$(".addProjetAddTacheInputTache[data-nb="+nbTache+"]").after('<div class="addProjetAddTacheInputTache" data-nb="'+nbTacheNext+'"><label for="dateAddTacheprojet"></label><input id="dateAddTacheprojet" type="date" name="dateTache'+nbTacheNext+'"><input type="text" placeholder="Nom de la Tâche..." name="tache'+nbTacheNext+'" id="addTacheProjet"><span>OK</span></div>');
			nbTache+=1;
		}
	});
*/

// Filtre les input qui change

	$('#filtre input').change(function() {
		$this = $(this);
		if ($this.is(':checked')) {
			$this.parent("li").removeClass("liBgNo");
	 	} else {
	  		$this.parent("li").addClass("liBgNo");
	  	}
	})

// script qui reduit la taille des jour en fonction du nombre de chiffre

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
					url: urlLink+'/traitementAjax/traitementUnconnected.php',
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
		console.log(donnees);
		// ADD PROJET TREATMENT AJAX
		$.ajax({
			type: "POST",
			url: urlLink+'/traitementAjax/traitementAjoutProjet.php',
			data: donnees,
			dataType : 'text',
			success : function(answer, statut){
				console.log(answer);
				console.log(donnees);
				if (answer == "success") {
					$("#addProjet").addClass("displayNone");
					$("#projets").removeClass("displayNone");
					$("#menuLateral").removeClass("displayNone");
					$("#menu").removeClass("displayNone");
					$("#menuAddProjet").addClass("displayNone");
					$("#xxProjetPull").removeClass("displayNone");
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

//ADD TACHE IN PROJET TREATMENT
	$(".addTacheFormprojet").submit(function(e) {
		e.preventDefault();
		var date = $(this).find("input[name=date]").val();
		var titre = $(this).find("input[name=titre]").val();
		var donnees = $(this).serialize();
		var thisForm = $(this);
		// ADD PROJET TREATMENT AJAX
		$.ajax({
			type: "POST",
			url: urlLink+'/traitementAjax/traitementAjoutTache.php',
			data: donnees,
			dataType : 'text',
			success : function(answer, statut){
				if (answer == "success") {
					var date1 = new Date(date); date1 = date1.getTime()/1000;
					var today = new Date(); today = today.getTime()/1000;
					var result = date1 - today; result = Math.floor(result/(60*60*24)); 
					console.log("success");
					thisForm.parent().prev("ul").append('<li><span class="projetJoursTache" ><span class="nbr_jours_tache">'+result+'</span>j</span><p>'+titre+'</p></li>');
					thisForm.find("input[name=date]").val("");
					thisForm.find("input[name=titre]").val("");
				}else if (answer == "failed") {
					console.log("failed");
           		};
			},
		    error : function(resultat, statut, erreur){
		    	console.log("error");
		    },
		    complete : function(resultat, statut){

		    }
		});// END TACHE IN PROJET TREATMENT AJAX
	});// END TACHE IN PROJET TREATMENT


//ADD TACHE TREATMENT
	$("#addTacheForm").submit(function(e) {
		e.preventDefault();
		var donnees = $(this).serialize();
		// ADD PROJET TREATMENT AJAX
		$.ajax({
			type: "POST",
			url: urlLink+'/traitementAjax/traitementAjoutTache.php',
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
					$("#xxTachePull").removeClass("displayNone");
				}else if (answer == "failed") {
					console.log("failed");
           		};
			},
		    error : function(resultat, statut, erreur){
		    	console.log("error");
		    },
		    complete : function(resultat, statut){

		    }
		});// END PROJET TREATMENT AJAX
	});// END PROJET SUBMIT



// PROJET SWIPE CHECK OR HIDE
	$(".projetsClose").swipe({
		//excludedElements: "button, input, select, textarea, .noSwipe",
		allowPageScroll: "vertical",
		threshold:0,
		triggerOnTouchLeave:true,
		fingers:'all',
		swipeStatus:function(event, phase, direction, distance, duration, fingerCount){
			console.log(phase);
			console.log(duration);
			var projet = $(this);
			//On start
			if(phase == "start"){

			};
			//Finger animation
			if(phase == "move"){
				if(direction == "right"){
					projet.parent().prevAll(".projetValide").removeClass("displayNone");
					projet.parent().prevAll(".projetSup").addClass("displayNone");
					projet.parent().css("-webkit-transform","translateX(+"+distance+"px)");
				}
				else if(direction == "left"){
					projet.parent().prevAll(".projetSup").removeClass("displayNone");
					projet.parent().prevAll(".projetValide").addClass("displayNone");
					projet.parent().css("-webkit-transform","translateX(-"+distance+"px)");
				}
			};
			//Redirect when click/tap a link
			if(phase == "end" && duration < 300 && distance <20 ){
				if ($(this).hasClass("xxOpen")) {
					$(".projetsOpen").addClass("displayNone");
					$(this).removeClass("xxOpen");
				}else{
					$(".projetsOpen").addClass("displayNone");
					var projetsOpen = $(this).next(".projetsOpen");
					projetsOpen.toggleClass("displayNone");
					$(this).parent(".projetContainer").parent("li").toggleClass("projetsOppenClass");
					$(".projetsClose").removeClass("xxOpen");
					$(this).addClass("xxOpen");
				}
			};
			//Swipe animation
			if(phase == "end" && duration > 100 && distance >80){
				$idProjet = $(this).data("id-projet");
				var donnees = 'id-projet='+$idProjet;
				if(direction == "right"){
					$.ajax({
						type: "POST",
						url: urlLink+'/traitementAjax/traitementChekedProjet.php',
						data: donnees,
						dataType : 'text',
						success : function(answer, statut){
							console.log(answer);
							console.log(donnees);
							if (answer == "success") {
								console.log("success");
								projet.parent().css("-webkit-transform","translateX(100%)");
								setTimeout(function(){	projet.parent().addClass("displayNone");},1000);
							}else if (answer == "failed") {
								console.log("failed");
			           		};
						},
					    error : function(resultat, statut, erreur){
					    	console.log("error");
					    },
					    complete : function(resultat, statut){

					    }
					});// END PROJET TREATMENT AJAX
				}
				else if(direction == "left"){
					$.ajax({
						type: "POST",
						url: urlLink+'/traitementAjax/traitementHiddenProjet.php',
						data: donnees,
						dataType : 'text',
						success : function(answer, statut){
							console.log(answer);
							console.log(donnees);
							if (answer == "success") {
								console.log(projet);
								projet.parent().css("-webkit-transform","translateX(-100%)");
								setTimeout(function(){	projet.addClass("displayNone");},1000);
							}else if (answer == "failed") {
								console.log("failed");
			           		};
						},
					    error : function(resultat, statut, erreur){
					    	console.log("error");
					    },
					    complete : function(resultat, statut){

					    }
					});// END PROJET TREATMENT AJAX
				}
			}else if (phase == "end" && duration < 100 || distance < 80) {
				projet.parent().css("-webkit-transform","translateX(0)");
			};
			if(phase == "cancel"){
				//nothing happen. Normaly impossible to get this phase.
				//alert(phase);
			};
		}
	});

// TACHE SWIPE CHECK OR HIDE
	$(".liContentTache").swipe({
		//excludedElements: "button, input, select, textarea, .noSwipe",
		allowPageScroll: "vertical",
		threshold:0,
		triggerOnTouchLeave:true,
		fingers:'all',
		swipeStatus:function(event, phase, direction, distance, duration, fingerCount){
			console.log(phase);
			console.log(duration);
			var tache = $(this);
			//On start
			if(phase == "start"){

			};
			//Finger animation
			if(phase == "move"){
				if(direction == "right"){
					tache.prevAll(".projetValide").removeClass("displayNone");
					tache.prevAll(".projetSup").addClass("displayNone");
					tache.css("-webkit-transform","translateX(+"+distance+"px)");
				}
				else if(direction == "left"){
					tache.prevAll(".projetSup").removeClass("displayNone");
					tache.prevAll(".projetValide").addClass("displayNone");
					tache.css("-webkit-transform","translateX(-"+distance+"px)");
				}
			};
			//Redirect when click/tap a link
			if(phase == "end" && duration < 300 && distance <20 ){
				if ($(this).hasClass("xxOpen")) {
					tache.addClass("displayNone");
					$(this).removeClass("xxOpen");
				}else{
					tache.addClass("displayNone");
					var projetsOpen = $(this).next(".projetsOpen");
					projetsOpen.toggleClass("displayNone");
					$(this).parent(".projetContainer").parent("li").toggleClass("projetsOppenClass");
					$(".projetsClose").removeClass("xxOpen");
					$(this).addClass("xxOpen");
				}
			};
			//Swipe animation
			if(phase == "end" && duration > 100 && distance >80){
				$idProjet = $(this).data("id-projet");
				var donnees = 'id-projet='+$idProjet;
				if(direction == "right"){
/*
					$.ajax({
						type: "POST",
						url: urlLink+'/traitementAjax/traitementChekedProjet.php',
						data: donnees,
						dataType : 'text',
						success : function(answer, statut){
							console.log(answer);
							console.log(donnees);
							if (answer == "success") {
								console.log("success");
								projet.parent().css("-webkit-transform","translateX(100%)");
								setTimeout(function(){	projet.parent().addClass("displayNone");},1000);
							}else if (answer == "failed") {
								console.log("failed");
			           		};
						},
					    error : function(resultat, statut, erreur){
					    	console.log("error");
					    },
					    complete : function(resultat, statut){

					    }
					});// END PROJET TREATMENT AJAX
*/
				}
				else if(direction == "left"){
/*
					$.ajax({
						type: "POST",
						url: urlLink+'/traitementAjax/traitementHiddenProjet.php',
						data: donnees,
						dataType : 'text',
						success : function(answer, statut){
							console.log(answer);
							console.log(donnees);
							if (answer == "success") {
								console.log(projet);
								projet.parent().css("-webkit-transform","translateX(-100%)");
								setTimeout(function(){	projet.addClass("displayNone");},1000);
							}else if (answer == "failed") {
								console.log("failed");
			           		};
						},
					    error : function(resultat, statut, erreur){
					    	console.log("error");
					    },
					    complete : function(resultat, statut){

					    }
					});// END PROJET TREATMENT AJAX
*/
				}
			}else if (phase == "end" && duration < 100 || distance < 80) {
				tache.css("-webkit-transform","translateX(0)");
			};
			if(phase == "cancel"){
				//nothing happen. Normaly impossible to get this phase.
				//alert(phase);
			};
		}
	});


// BODY SWIPE UP TO REFRESH ALL
	$("#xxProjetPull .projetsClose").swipe("destroy");
	$("#xxProjetPull, #xxTachePull").swipe({
		excludedElements: "button, input, select, textarea, .noSwipe",
		allowPageScroll: "none",
		threshold:30,
		triggerOnTouchLeave:false,
		fingers:'all',
		swipeStatus:function(event, phase, direction, distance, duration, fingerCount){
			//Finger animation
			if(phase == "move" && direction == "down"){
				$("#content").css("-webkit-transform","translateY(+"+distance+"px)");
			};
			if(phase == "end" && direction == "down" && distance > 100 ){
				console.log("coucou");
				$.ajax({
					type: "POST",
					url: urlLink+'/traitementAjax/pullToRefresh.php',
					dataType : 'html',
					success : function(answer, statut){
						console.log("SUCESS");
						$("#projets").remove();
						$("#taches").remove();
						$("#filtre").remove();
						$("#chat").remove();
						$("#addProjet").remove();
						$("#projetModif").remove();
						$("#content").append(answer);
						$("script[src='js/main.js']").remove();
						$("body").append('<script src="js/main.js"></script>');						
					},
				    error : function(resultat, statut, erreur){
				    	console.log("error");
				    },
				    complete : function(resultat, statut){

				    }
				});// END PROJET TREATMENT AJAX
			};
			if(phase == "end"){
				$("#content").css("-webkit-transform","translateY(0px)");
			};
			if(phase == "cancel"){
				//nothing happen. Normaly impossible to get this phase.
				//alert(phase);
			};
		}
	});







}); // END JQUERY


