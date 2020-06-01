const BASE_URL = "http://localhost/";

function clearErrors(){
	$('.has-error').removeClass("has-error");
	$(".help-block").html("");
}


function showErros(error_lista){
	clearErrors();

	$.each(error_lista, function (id, message){
		$(id).parent().parent().addClass("has-error");
		$(id).parent().siblings(".help-block").html(message);
	});
}


function loadingImg(message =""){
	return "<i class='fa fa-circle-o-notch fa fa-spin></i> &nbsp;'" + message 
}