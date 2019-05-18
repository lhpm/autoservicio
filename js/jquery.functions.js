	function ActualizarDatos(){
		var cliente_id = $('#cliente_id').attr('value');
		var nombres = $('#nombres').attr('value');
	    var tipo_doc = $('#tipo_doc').attr('value');
		var documento = $('#documento').attr('value');
		var ciudad = $('#ciudad').attr('value'); 
		var alternativas = $("input[@name='alternativas']:checked").attr("value");
		var telefono = $("#telefono").attr("value");
		var celular = $("#celular").attr("value");
        var correo = $('#correo').attr('value');
		var oficio = $('#oficio').attr('value');
		var empresa = $('#empresa').attr('value');
		var fecha_nacimiento = $("#fecha_nacimiento").attr("value");
		var edad = $("#edad").attr("value");
		var seguro = $('#seguro').attr('value');
		var observaciones = $("#observaciones").attr("value");
		var fecha_registro = $("#fecha_registro").attr("value");

		$.ajax({
			url: 'actualizar.php',
			type: "POST",
			data: "submit=&nombres="+nombres+"&tipo_doc="+tipo_doc+"&documento="+documento+"&ciudad="+ciudad+"&alternativas="+alternativas+"&telefono="+telefono+"&correo="+correo+"&oficio="+oficio+"&empresa="+empresa+"&celular="+celular+"&fecha_nacimiento="+fecha_nacimiento+"&edad="+edad+"&seguro="+seguro+"&observaciones="+observaciones+"&fecha_registro="+fecha_registro+"&cliente_id="+cliente_id,
			success: function(datos){
				alert(datos);
				ConsultaDatos();
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
	}
	
		function ActualizarCita(){
		var cliente_id = $('#cliente_id').attr('value');
		var id_cita = $('#id_cita').attr('value');
		var documento_cita = $('#documento_cita').attr('value');
		var nombres_cita = $('#nombres_cita').attr('value');
		var cod_cita = $('#cod_cita').attr('value');
		var motivo_cita = $('#motivo_cita').attr('value');
	    var fecha_cita = $('#fecha_cita').attr('value');
		var hora_cita = $('#hora_cita').attr('value');
		var obs_cita = $('#obs_cita').attr('value');
		var asistio_cita = $('#asistio_cita').attr('value');

		$.ajax({
			url: 'actualizar_cita.php',
			type: "POST",
			data: "submit=&id_cita="+id_cita+"&documento_cita="+documento_cita+"&nombres_cita="+nombres_cita+"&cod_cita="+cod_cita+"&motivo_cita="+motivo_cita+"&fecha_cita="+fecha_cita+"&hora_cita="+hora_cita+"&obs_cita="+obs_cita+"&asistio_cita="+asistio_cita+"&cliente_id="+cliente_id,
			success: function(datos){
				alert(datos);
				ConsultaDatos();
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
	}

	function HistoriaDatos(){
		var cliente_id = $('#cliente_id').attr('value');
		var nombres = $('#nombres').attr('value');
		var tipo_doc = $('#tipo_doc').attr('value');
		var documento = $('#documento').attr('value');
		var ciudad = $('#ciudad').attr('value'); 
		var alternativas = $("input[@name='alternativas']:checked").attr("value");
		var telefono = $("#telefono").attr("value");
		var celular = $("#celular").attr("value");
        var correo = $('#correo').attr('value');
		var oficio = $('#oficio').attr('value');
		var empresa = $('#empresa').attr('value');
		var fecha_nacimiento = $('#fecha_nacimiento').attr('value');
		var seguro = $('#seguro').attr('value');
		var observaciones = $("#observaciones").attr("value");
		var padre = $('#padre').attr('value');
		var madre = $('#madre').attr('value');
		var motivo_consulta = $('#motivo_consulta').attr('value');
		var anamnesis_proxima = $('#anamnesis_proxima').attr('value');
		var ante_morbico = $('#ante_morbico').attr('value');
		var ante_gine = $('#ante_gine').attr('value');
		var ante_medicamentos = $('#ante_medicamentos').attr('value');
		var alergias = $('#alergias').attr('value');
		var ante_personal = $('#ante_personal').attr('value');
		var ante_familiar = $('#ante_familiar').attr('value');
		var inmunizaciones = $('#inmunizaciones').attr('value');
		var fecha_registro = $("#fecha_registro").attr("value");

		$.ajax({
			url: 'historia.php',
			type: "POST",
			data: "submit=&nombres="+nombres+"&tipo_doc="+tipo_doc+"&documento="+documento+"&ciudad="+ciudad+"&alternativas="+alternativas+"&telefono="+telefono+"&celular="+celular+"&correo="+correo+"&oficio="+oficio+"&empresa="+empresa+"&fecha_nacimiento="+fecha_nacimiento+"&seguro="+seguro+"&observaciones="+observaciones+"&padre="+padre+"&madre="+madre+"&motivo_consulta="+motivo_consulta+"&anamnesis_proxima="+anamnesis_proxima+"&ante_morbico="+ante_morbico+"&ante_gine="+ante_gine+"&ante_medicamentos="+ante_medicamentos+"&alergias="+alergias+"&ante_personal="+ante_personal+"&ante_familiar="+ante_familiar+"&inmunizaciones="+inmunizaciones+"&fecha_registro="+fecha_registro+"&cliente_id="+cliente_id,
			success: function(datos){
				alert(datos);
				ConsultaDatos();
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
	}
	
	function ConsultaDatos(){
		$.ajax({
			url: 'consulta.php',
			cache: false,
			type: "GET",
			success: function(datos){
				$("#tabla").html(datos);
			}
		});
	}
	
	function EliminarDato(cliente_id){
		var msg = confirm("Desea eliminar este dato?")
		if ( msg ) {
			$.ajax({
				url: 'eliminar.php',
				type: "GET",
				data: "id="+cliente_id,
				success: function(datos){
					alert(datos);
					$("#fila-"+cliente_id).remove();
				}
			});
		}
		return false;
	}
	
	function GrabarDatos(){
	    var tipo_doc = $('#tipo_doc').attr('value');
		var documento = $('#documento').attr('value');
		var nombres = $('#nombres').attr('value');
		var ciudad = $('#ciudad').attr('value'); 
		var alternativas = $("input[@name='alternativas']:checked").attr("value");
		var telefono = $("#telefono").attr("value");
		var celular = $("#celular").attr("value");
        var correo = $('#correo').attr('value');
		var oficio = $('#oficio').attr('value');
		var empresa = $('#empresa').attr('value');
		var fecha_nacimiento = $("#fecha_nacimiento").attr("value");
		var edad = $("#edad").attr("value");
		var seguro = $('#seguro').attr('value');
		var fecha_registro = $("#fecha_registro").attr("value");

		$.ajax({
			url: 'nuevo.php',
			type: "POST",
			data: "submit=&tipo_doc="+tipo_doc+"&documento="+documento+"&nombres="+nombres+"&ciudad="+ciudad+"&alternativas="+alternativas+"&telefono="+telefono+"&correo="+correo+"&oficio="+oficio+"&empresa="+empresa+"&celular="+celular+"&fecha_nacimiento="+fecha_nacimiento+"&edad="+edad+"&seguro="+seguro+"&fecha_registro="+fecha_registro,
			
			success: function(datos){
				ConsultaDatos();
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
	}

  function InsertarHistoria(){

        var id_h = $("#id_h").attr("value");
		var documento_consulta = $('#documento_consulta').attr('value');
		var nombres_consulta = $('#nombres_consulta').attr('value');
		var cod_consulta = $('#cod_consulta').attr('value');
		var motivo_consultah = $('#motivo_consultah').attr('value');
		var fecha_consulta = $("#fecha_consulta").attr("value");
		var obs_consulta = $('#obs_consulta').attr('value');
		var diagnostico = $('#diagnostico').attr('value');

		$.ajax({
			url: 'insertarhistoria.php',
			type: "POST",
			data: "submit=&id_h="+id_h+"&documento_consulta="+documento_consulta+"&nombres_consulta="+nombres_consulta+"&cod_consulta="+cod_consulta+"&motivo_consultah="+motivo_consultah+"&fecha_consulta="+fecha_consulta+"&obs_consulta="+obs_consulta+"&diagnostico="+diagnostico,
			success: function(datos){
				ConsultaDatos();
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
	}
	
	function InsertarCita(){

        var id_cita = $("#id_cita").attr("value");
		var documento_cita = $('#documento_cita').attr('value');
		var nombres_cita = $('#nombres_cita').attr('value');
		var cod_cita = $('#cod_cita').attr('value');
		var motivo_cita = $('#motivo_cita').attr('value');
		var fecha_cita = $('#fecha_cita').attr('value');
		var hora_cita = $('#hora_cita').attr('value');
		var obs_cita = $('#obs_cita').attr('value');
		var asistio_cita = $('#asistio_cita').attr('value');

		$.ajax({
			url: 'insertarcita.php',
			type: "POST",
			data: "submit=&id_cita="+id_cita+"&documento_cita="+documento_cita+"&nombres_cita="+nombres_cita+"&cod_cita="+cod_cita+"&motivo_cita="+motivo_cita+"&fecha_cita="+fecha_cita+"&hora_cita="+hora_cita+"&obs_cita="+obs_cita+"&asistio_cita="+asistio_cita,
			success: function(datos){
				ConsultaDatos();
				alert(datos);
				$("#formulario").hide();
				$("#tabla").show();
			}
		});
		return false;
	}
	
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

	function Cancelar(){
		$("#formulario").hide();
		$("#tabla").show();
		return false;
	}
	
	// funciones del calendario
	function update_calendar(){
		var month = $('#calendar_mes').attr('value');
		var year = $('#calendar_anio').attr('value');
	
		var valores='month='+month+'&year='+year;
	
		$.ajax({
			url: 'calendario.php',
			type: "GET",
			data: valores,
			success: function(datos){
				$("#calendario_dias").html(datos);
			}
		});
	}
	
	function set_date(date){
		$('#fecha_nacimiento').attr('value',date);
		show_calendar();
	}
	
	function show_calendar(){
		$('#calendario').toggle();
	}
	