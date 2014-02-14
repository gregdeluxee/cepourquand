$(function(){

  var contentmove = $(".contentmove");

	$(".projetsClose").click(function(e) {
		$this = $(this);
		var theLi = $this.parent("li");
		theLi.css("height","324px");// PAS propre a modifier ...
	});


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



