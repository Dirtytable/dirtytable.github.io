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

function auto () { 
	document.getElementById('Register').style.display = 'none'; 
	document.getElementById('Avtorise').style.display = 'block'; 
} 
function reg(){ 
	document.getElementById('Avtorise').style.display = 'none'; 
	document.getElementById('Register').style.display = 'block'; 
} 
