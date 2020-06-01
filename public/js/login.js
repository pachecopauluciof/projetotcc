$(function(){

	$("#login_form").submit(function () {

		var username = $("#username").val();
		var senha = $("#senha").val();

		$.ajax({
			type: 'POST',
			url: BASE_URL + "login/ajax_login",
			dataType: "json",
			data: {username : username, password: senha},
			success: function (json){
				if(json["status"] == 1){
					window.location = BASE_URL + "home";
				}else{
					alert("Não foi possivel fazer login!");
				}

				//alert('Entrou');
			}
		});


		return false;
	})
})