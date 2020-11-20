$(function(){
	$('#registration').on('submit', function(e){
		e.preventDefault();
		var formData = new FormData(this);
		$.ajax({
			url: 'handler.php',
			type: "POST",
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			success: function(data){
				swal({
					title: "Отлично!",
					text: "Пользователь успешно зарегистрирован!",
					icon: "success",
				}).then(() => {
					location.reload();
				});
			},
			error: function(response, status, error){
				var data = JSON.parse(response.responseText);
				var errors = data.errors;
				if (errors){
					$.each(errors, function(index, data){
						var name = Object.getOwnPropertyNames(data);
						var value = data[name];
						var div = $('#' + name[0]).parent('div');
						console.log(div);
						div.addClass('has-danger');
						div.children('.form-control-feedback').text(value);
					});
				}
			}
		})
	});
});