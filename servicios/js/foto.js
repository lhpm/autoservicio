	function InsertarFoto(){

        var id_foto = $("#id_foto").attr("value");
		var foto = $('#foto').attr('value');

		$.ajax({
			url: 'foto.php',
			type: "POST",
			data: "submit=&id_foto="+id_foto+"&foto="+foto,
			success: function(datos){
				ConsultaDatos();
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
	}