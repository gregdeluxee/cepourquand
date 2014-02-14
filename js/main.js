$(function(){

  var contentmove = $(".contentmove");

	$(".projetsClose").click(function(e) {
		$this = $(this);
		var theLi = $this.parent("li");
		theLi.css("height","324px");// PAS propre a modifier ...
	});


	$("#loginForm").submit(function(e) {
		e.preventDefault();
		var donnees = $(this).serialize();
		console.log(donnees);
		$.ajax({
			type: "POST",
			url: './traitementAjax/traitementLogin.php',
			data: donnees,
			dataType : 'text',
			success : function(answer, statut){
				console.log("success");
           		if (answer == "success") {
					console.log("successsssss");

           			setTimeout(function(){
						$("#login").addClass("displayNone");
					}, 600);
					$("#login").addClass("translateX");
					$("#projets").removeClass("displayNone");

					$.ajax({
						type: "POST",
						url: './pages/projet.php',
						dataType: 'html',
						success: function(answer, statut){
							$("#content").append(answer);
						}

					})

           		}else if (answer == "failed") {

           		};
		    },
		    error : function(resultat, statut, erreur){

		    },
		    complete : function(resultat, statut){

		    }
		});

	});



});



