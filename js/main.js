function setCookie(sName, sValue) {
    var today = new Date(), expires = new Date();
    expires.setTime(today.getTime() + (31*24*60*60*1000));
    document.cookie = sName + "=" + encodeURIComponent(sValue) + ";expires=" + expires.toGMTString();
}
function getCookie(sName) {
    var cookContent = document.cookie, cookEnd, i, j;
    var sName = sName + "=";

    for (i=0, c=cookContent.length; i<c; i++) {
        j = i + sName.length;
        if (cookContent.substring(i, j) == sName) {
            cookEnd = cookContent.indexOf(";", j);
            if (cookEnd == -1) {
                    cookEnd = cookContent.length;
            }
            return decodeURIComponent(cookContent.substring(j, cookEnd));
        }
    }       
    return null;
}


//START JQUERY
$(function(){
<<<<<<< HEAD
<<<<<<< HEAD
	alert(getCookie('loged'));
  var contentmove = $(".contentmove");

  	//var logedCookie = $.cookie('loged'); // récupère la valeur du cookie « tutoriel »
	//if (logedCookie =="1") {
	//	$("#projets").removeClass("displayNone");
	//	$("#taches").removeClass("displayNone");
	//};	
=======
=======

	var contentmove = $(".contentmove");
	var filtreCheck = $("#filtre input");
	var filtreCheckParent = $("#filtre input").parent("li");
>>>>>>> d1d4fa35bad2dfbec3aca146209e62df433dc318

	var contentmove = $(".contentmove");
	var filtreCheck = $("#filtre input");
	var filtreCheckParent = $("#filtre input").parent("li");
>>>>>>> d1d4fa35bad2dfbec3aca146209e62df433dc318

<<<<<<< HEAD
	var contentmove = $(".contentmove");
	var filtreCheck = $("#filtre input");
	var filtreCheckParent = $("#filtre input").parent("li");

<<<<<<< HEAD
	$("#projets").removeClass("displayNone");////AS UPPPP

=======
>>>>>>> d1d4fa35bad2dfbec3aca146209e62df433dc318
=======
>>>>>>> d1d4fa35bad2dfbec3aca146209e62df433dc318
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
<<<<<<< HEAD
=======

>>>>>>> d1d4fa35bad2dfbec3aca146209e62df433dc318

$('#filtre input').change(function() {
	$this = $(this);
	if ($this.is(':checked')) {
		$this.parent("li").removeClass("liBgNo");
 	} else {
  		$this.parent("li").addClass("liBgNo");
  }
});

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
           		if (answer == "success") {
           			setTimeout(function(){ $("#login").addClass("displayNone");	}, 600);
					$("#login").addClass("translateX");
					$("#projets").removeClass("displayNone");
					setCookie('loged','1');
					console.log(getCookie('loged'));
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

window.addEventListener('load', function() {
    FastClick.attach(document.body);
}, false);

//bouncefix.add('page');

