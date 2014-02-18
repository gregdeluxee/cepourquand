function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}


//START JQUERY
$(function(){
  var contentmove = $(".contentmove");
  console.log(readCookie('loged'));
  	//var logedCookie = $.cookie('loged'); // récupère la valeur du cookie « tutoriel »
	//if (logedCookie =="1") {
	//	$("#projets").removeClass("displayNone");
	//	$("#taches").removeClass("displayNone");
	//};	

	var contentmove = $(".contentmove");
	var filtreCheck = $("#filtre input");
	var filtreCheckParent = $("#filtre input").parent("li");

	$("#projets").removeClass("displayNone");////AS UPPPP

	$(".projetsClose").click(function() {
		$this = $(this);
		var theLi = $this.parent("li");
		theLi.toggleClass("projetsOppenClass");
	});
	$(".menuAddTache").click(function() {
		$this = $(this);
		$("#addTaches").toggleClass("displayNone");
		$("#menuTache").addClass("displayNone");
		$("#menuAddTache").removeClass("displayNone");
	});
	$(".menuMenu").click(function(e){
		e.preventDefault();
		contentmove.toggleClass("menu_actif");
	});

	// if ($("#filtre input").is(":checked")) {
	// 	$this = $(this);
	// }else{
	// 	$this.parent("li").addClass("liBgNo");
	// }

$('#filtre input').change(function() {
	$this = $(this);
	if ($this.is(':checked')) {
		$this.parent("li").removeClass("liBgNo");
 	} else {
  		$this.parent("li").addClass("liBgNo");
  }
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
				console.log(statut);
           		if (answer == "success") {
           			setTimeout(function(){ $("#login").addClass("displayNone");	}, 600);
					$("#login").addClass("translateX");
					$("#projets").removeClass("displayNone");
					createCookie('loged','1','30');
					console.log(readCookie('loged'));
					// PROJET TREATMENT AJAX
					$.ajax({
						type: "POST",
						url: './pages/projet.php',
						dataType: 'html',
						success: function(answer, statut){
							//$("#content").append(answer);
						}

					});// END PROJET TREATMENT AJAX

           		}else if (answer == "failed") {
           			console.log('failed');
           			//WHAT HAPPEN IF BAD LOGIN OR BAD PASSWORD
           		};
		    },
		    error : function(resultat, statut, erreur){
		    	console.log("errorhfgdh")
		    },
		    complete : function(resultat, statut){
		    	console.log("complete")
		    	console.log(resultat);
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

window.addEventListener('load', function() {
    FastClick.attach(document.body);
}, false);

//bouncefix.add('page');

