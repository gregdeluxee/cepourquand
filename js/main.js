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

window.addEventListener('load', function() {
    FastClick.attach(document.body);
}, false);

//bouncefix.add('page');

//END JAVASCRIPT

//START JQUERY
$(function(){
  var contentmove = $(".contentmove");
  //Are you already logged ?
  	logedCookie = readCookie('loged');
	if (logedCookie =="1") {
		$("#projets").removeClass("displayNone");
		$("#taches").removeClass("displayNone");
	};

	var contentmove = $(".contentmove");
	var filtreCheck = $("#filtre input");
	var filtreCheckParent = $("#filtre input").parent("li");

	$("#projets").removeClass("displayNone");////AS UPPPP

	$("#projets > ul > li").click(function() {
		$this = $(this);
		$this.css("-webkit-transform", "translateX(0px)");
		$this.toggleClass("projetsOppenClass");
	})

	$(".menuAddTache").click(function() {
		$this = $(this);
		$("#addTaches").toggleClass("displayNone");
		$("#menuTache").addClass("displayNone");
		$("#menuAddTache").removeClass("displayNone");
	})
	$(".menuMenu").click(function(e){
		e.preventDefault();
		contentmove.toggleClass("menu_actif");
	})

	$(".addCollaboProjet").click(function(){
		$(".addProjetAddTacheInputCollabo").toggleClass("displayNone");
	})
	$(".addProjetAddTacheInputCollabo").children("span").click(function(){
		$(".addProjetAddTacheInputCollabo").addClass("displayNone");
	});

	$(".addProjetAddTache").click(function(){
		$(".addProjetAddTacheInputTache").toggleClass("displayNone");
	})
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



///////   SWIPE AMODIFIER

		$("#projets > ul > li").click(function() {
			$this = $(this);
			$this.css("-webkit-transform", "translateX(0px)");
			$this.toggleClass("projetsOppenClass");
		})
$("#projets > ul > li").swipe( {
        swipeStatus:function(event, phase, direction, distance, duration)
        {
			$this = $(this);

		if (phase == "move")
			$this.css("-webkit-transform", "translateX("+(distance)+"px)");
			$this.toggleClass("projetsOppenClass");

			if (phase == "end"){
				if (distance >=250) {
					if (direction == "left") {
						$this.css("-webkit-transform", "translateX(-100px)");
					}else{
						$this.css("-webkit-transform", "translateX(100px)");
					};
				}else{
					$this.css("-webkit-transform", "translateX(0px)");
				};

			}
          // $this.css("background", "red");
        },
        // triggerOnTouchEnd:false,
        threshold:120
      });


 // $("#projets > ul > li").swipe( {
 //        swipeStatus:function(event, phase, direction, distance, duration)
 //        {
	// 		$this = $(this);

	// 		if (distance>100)
	// 			$this.css("-webkit-transform", "translateX(0px)");

	// 		if (distance<100){
	// 			if (direction == "left") {
	// 				$this.css("-webkit-transform", "translateX(-100px)");
	// 			}else{
	// 				$this.css("-webkit-transform", "translateX(100px)");
	// 			};
	// 		}
 //          // $this.css("background", "red");
 //        },
 //        triggerOnTouchEnd:false,
 //        threshold:100
 //      });



   //     $("#test").swipe( {
			// swipeStatus:function(event, phase, direction, distance, duration, fingers)
			// {
			// 	var str = "<h4>Swipe Phase : " + phase + "<br/>";
			// 	str += "Direction from inital touch: " + direction + "<br/>";
			// 	str += "Distance from inital touch: " + distance + "<br/>";
			// 	str += "Duration of swipe: " + duration + "<br/>";
			// 	str += "Fingers used: " + fingers + "<br/></h4>";

			// 	//Here we can check the:
			// 	//phase : 'start', 'move', 'end', 'cancel'
			// 	//direction : 'left', 'right', 'up', 'down'
			// 	//distance : Distance finger is from initial touch point in px
			// 	//duration : Length of swipe in MS
			// 	//fingerCount : the number of fingers used

			// 	if (phase!="cancel" && phase!="end") {
			// 		if (duration<5000)
			// 			str +="Under maxTimeThreshold.<h3>Swipe handler will be triggered if you release at this point.</h3>"
			// 		else
			// 			str +="Over maxTimeThreshold. <h3>Swipe handler will be canceled if you release at this point.</h3>"

			// 		if (distance<200)
			// 			str +="Not yet reached threshold.  <h3>Swipe will be canceled if you release at this point.</h3>"
			// 		else
			// 			str +="Threshold reached <h3>Swipe handler will be triggered if you release at this point.</h3>"
			// 	}

			// 	if (phase=="cancel")
			// 		str +="<br/>Handler not triggered. <br/> One or both of the thresholds was not met "
			// 	if (phase=="end")
			// 		str +="<br/>Handler was triggered."

			// 	$("#test").html(str);
			// },
			// threshold:200,
			// maxTimeThreshold:5000,
			// fingers:'all'
			// });


///////   SWIPE AMODIFIER FIN




//LOGIN AJAX TREATMENT
	$("#loginForm").submit(function(e) {
		e.preventDefault();
		var donnees = $(this).serialize();
		var login = $(this).find("input[name=login]").val();
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
					createCookie('login',login,'30');
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


