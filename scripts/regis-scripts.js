$(document).ready(function(){

  $('.input').focus(function(){
    $(this).parent().find(".label-txt").addClass('label-active');
  });

  $(".input").focusout(function(){
    if ($(this).val() == '') {
      $(this).parent().find(".label-txt").removeClass('label-active');
    };
  });

});

function enter () { 
	document.getElementById('register-window').style.display = 'none'; 
	document.getElementById('enter-window').style.display = 'block'; 
} 
function reg(){ 
	document.getElementById('enter-window').style.display = 'none'; 
	document.getElementById('register-window').style.display = 'block'; 
} 
