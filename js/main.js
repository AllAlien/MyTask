$(document).ready(function(){

function loading(){ 
$("#loading").fadeIn();
$("#titulo_cad").fadeOut('fast');

}

var dados = $(this).serialize();
$("#form_cad").submit(function(){

$.ajax({
	url: cad-usu-mytask.php,
	type: 'POST',
	data: dados,
	beforeSend: loading,
	success: function(){
		
	}


})



return false;
});




});