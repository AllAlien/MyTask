$(document).ready(function(){

$("#form_cad").submit(function(e){
	e.preventDefault();


function loading(){
	$("#loading").fadeIn();
	$("#titulo_cad").css('display', 'none');
	$("#send").val("Enviando dados...");

}
	var dada = {
		nome: $("#nome").val(),
		email: $("#email").val(),
		senha: $("#senha").val(),
	}
	$.ajax({
		url: 'cad-usu-mytask.php',
		dataType: 'json',
		type: 'post',
		data: dada,
		beforeSend: loading,
		}).done(function(){ 
			setTimeout(function(){
			$("#loading").css('display', 'none');
			$("#cad_success").css('display', 'inline');
			$("#send").val("Realizar cadastro");

			}, 3000);
			setTimeout(function(){
			$("#loading").css('display', 'none');
			$("#cad_success").css('display', 'none');
			$("#send").val("Aguardando...");
			$("#mg-info-login").css('display', 'inline');
			},4000);
			setTimeout(function(){
				window.location="log.php";
			}, 6000);
		
		}).fail(function(){
			$("#loading").css('display', 'none');
			$("#cad_fail").css('display', 'inline');
			$("#send").val("Realizar cadastro");

		});



});




});