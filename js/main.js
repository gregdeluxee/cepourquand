//START JQUERY
$(function(){

  var contentmove = $(".contentmove");

	$(".projetsClose").click(function(e) {
		$this = $(this);
		var theLi = $this.parent("li");
		theLi.css("height","324px");// PAS propre a modifier ...
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



}); // END JQUERY