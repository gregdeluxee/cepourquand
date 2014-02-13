$(function(){

  var contentmove = $(".contentmove");

  $("#button_menu").click(function(e){
    e.preventDefault();
    contentmove.toggleClass("menu_actif");
  });

});