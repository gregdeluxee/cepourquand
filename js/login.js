var urlLink ='http://localhost/cepourquand'; //LOCAL
//var urlLink ='http://cepourkan.eu'; //ONLINE


//START JAVASCRIPT
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

//bouncefix.add('page');

//END JAVASCRIPT


//START JQUERY
$(function(){

	//LOGIN AJAX TREATMENT
	$("#loginForm").submit(function(e) {
		e.preventDefault();
		var donnees = $(this).serialize();
		var login = $(this).find("input[name=login]").val();
		// LOGINFORM AJAX
		$.ajax({
			type: "POST",
			url: urlLink+'/traitementAjax/traitementLogin.php',
			data: donnees,
			dataType : 'text',
			success : function(answer, statut){
				console.log(statut);
           		if (answer == "success") {
           			setTimeout(function(){ $("#login").addClass("displayNone");	}, 600);
					$("#login").addClass("translateX");
					$("#projets").removeClass("displayNone");
					$("#menu").removeClass("displayNone");
					createCookie('loged','1','30');
					createCookie('login',login,'30');
					// PROJET TREATMENT AJAX

					$.ajax({
						type: "POST",
						url: urlLink+'/traitementAjax/traitementDonnees.php',
						dataType: 'html',
						success: function(answer, statut){
							$("#content").append(answer);
							$("body").append('<script src="js/main.js"></script>');
						}

					});// END PROJET TREATMENT AJAX

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
		});// END LOGINFORM AJAX
	});// END LOGINFORM SUBMIT

});//END JQUERY