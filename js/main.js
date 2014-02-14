$(function(){

  var contentmove = $(".contentmove");




	$(".loginSubmit").click(function(e) {
		e.preventDefault();
		setTimeout(function(){
			$("#login").addClass("displayNone");
		}, 600);// a metre dans success
		$("#login").addClass("translateX");// a metre dans success
		$("#projets").removeClass("displayNone");// a metre dans success

		// $.ajax({
		// 	type: "POST",
		// 	url: ,
		// 	data: ,
		// 	success: function(){

		// 	}
		// }

	});



});



