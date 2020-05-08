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

val isReg = 0;

function reg(){ 
	isReg =1
	document.getElementById('enter-window').style.display = 'none'; 
	document.getElementById('register-window').style.display = 'block'; 
} 

function enter() { 
	document.getElementById('register-window').style.display = 'none'; 
	document.getElementById('enter-window').style.display = 'block'; 
} 
if(isReg==1){
	document.getElementById('enter-window').style.display = 'none'; 
	document.getElementById('register-window').style.display = 'block'; 
}
else{
	document.getElementById('register-window').style.display = 'none'; 
	document.getElementById('enter-window').style.display = 'block';
}

