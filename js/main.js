//START JQUERY
$(function(){

  var contentmove = $(".contentmove");

  var kedis = $(".kedis").height();
  console.log(kedis);



	$(".projetsClose").click(function(e) {
		$this = $(this);
		var theLi = $this.parent("li");


		theLi.toggleClass("projetsOppenClass");
	});

//LOGIN AJAX TREATMENT
	$("#loginForm").submit(function(e) {
		e.preventDefault();
		var donnees = $(this).serialize();
		// LOGINFORM AJAX
		$.ajax({
			type: "POST",
			url: './traitementAjax/traitementLogin.php',
			data: donnees,
			dataType : 'text',
			success : function(answer, statut){
           		if (answer == "success") {
           			setTimeout(function(){ $("#login").addClass("displayNone");	}, 600);
					$("#login").addClass("translateX");
					$("#projets").removeClass("displayNone");
					// PROJET TREATMENT AJAX 
					$.ajax({
						type: "POST",
						url: './pages/projet.php',
						dataType: 'html',
						success: function(answer, statut){
							$("#content").append(answer);
						}

					});// END PROJET TREATMENT AJAX 

           		}else if (answer == "failed") {
           			//WHAT HAPPEN IF BAD LOGIN OR BAD PASSWORD
           		};
		    },
		    error : function(resultat, statut, erreur){
		    	console.log("error")
		    },
		    complete : function(resultat, statut){

		    }
		});// END LOGINFORM AJAX

	});// END LOGINFORM SUBMIT
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

}); // END JQUERY
