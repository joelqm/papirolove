$(function () {

	var ruta = $("#root").val();

    //generarAleatorioOrden();
    
    function generarAleatorioOrden(){

        $.post('index/generarAleatorioOrden', function(respuesta){

            $("#hdn_codigo").val(respuesta);

        }, 'json');

    }

	$("#btn_entrada_individual").click(function(e) {
		e.preventDefault();

		$("#panel-botones-principales").hide(200);
		$("#panel-dni").show(200);

		
		$("#hdn_tipoentrada").val(1)
		
	});

	// $("#btn_entrada_grupal").click(function(e) {
	// 	e.preventDefault();

	// 	$("#panel-botones-principales").hide(200);
	// 	$("#panel-dni").show(200);

		
	// 	$("#hdn_tipoentrada").val(2)
		
	// });

	$("#btn_regresar_btnpri").click(function(e) {
		e.preventDefault();

		$("#panel-botones-principales").show(200);
		$("#panel-dni").hide(200);
		
		$("#hdn_tipoentrada").val("")

	});

	$("#btn_buscar_array").click(function(e) {
		e.preventDefault();

		if ($("#txt_dni").val() == "") {

			alert("Es necesario ingresar un número de DNI")
			
		}else{

			buscarPreRegistrados($("#txt_dni").val());

		}

	});

	function buscarPreRegistrados(dni){
		
		$.post("index/buscarPreRegistrados", "dni="+dni, function (rpta) {

			if (rpta['existe'] == false || rpta['existe'] == "false") {

				$("#modal-texto-principal").hide(200);
				$("#panel-dni").hide(200);
				$("#panel-pregunta-comision").show(200);
				
				$("#hdn_listapreregistro").val(3)


			}else{
				
				// 1 - SI 0 - NO
				if (rpta['estado'] == 1) {

					$("#modal-texto-principal").hide(200);
					$("#panel-dni").hide(200);
					$("#panel-completar-datos").show(200);
					$("#texto-especial").show(200);
					
					$("#hdn_listapreregistro").val(1);

					$(".totalPagoPre").html("S/. "+rpta['precio']+".00");

					$("#hdn_total").val(rpta['precio']);
					
				}else{

					$("#modal-texto-principal").hide(200);
					$("#panel-dni").hide(200);
					$("#panel-completar-datos").show(200);
					$("#texto-especial").show(200);
					
					$("#hdn_listapreregistro").val(0);
					
					$(".totalPagoPre").html("S/. "+rpta['precio']+".00");

					$("#hdn_total").val(rpta['precio']);

				}

			}

			//alert(rpta);

		}, 'json');

	}

	$("#btn_entrada_individual_comision_si").click(function(e) {
		e.preventDefault();

		$("#panel-pregunta-comision").hide(200);
		$("#panel-codigo-comision").show(200);
		
	});

	$("#btn_entrada_individual_comision_no").click(function(e) {
		e.preventDefault();

		$("#panel-pregunta-comision").hide(200);
		$("#panel-completar-datos").show(200);

		$("#hdn_id_comision").val("");
		$(".totalPagoPre").html("S/. 207.00"); // 147
		$("#hdn_total").val(207);

	});

	$("#btn_registrar_datos").click(function(e) {
		e.preventDefault();

		if ($("#txt_nombre").val() == "" || $("#txt_apepat").val() == "" || $("#txt_apemat").val() == "" || $("#txt_celular").val() == "" || $("#txt_corele").val() == "") {

			alert("Es necesario registrar todos los campos")

		}else{

			guardarOrdenIndividual($("#txt_nombre").val(),$("#txt_apepat").val(),$("#txt_apemat").val(),$("#txt_celular").val(),$("#txt_corele").val(),$("#txt_dni").val());

		}

	});

	function guardarOrdenIndividual(nombre,apepat,apemat,celular,corele,dni){

		let datos = $("#frm_orden").serialize();

		$.post("index/guardarOrdenIndividual", datos+"&nombre="+nombre+"&apepat="+apepat+"&apemat="+apemat+"&celular="+celular+"&corele="+corele+"&dni="+dni, function (rpta) {

			if (rpta == true || rpta == "true") {

				$("#texto-especial").hide(200);
				$("#panel_datos").hide(200);
				$("#panel_metodos_pago").show(200);

			}else{
				
				alert("Ocurrio un error al registrar la orden, por favor intentar nuevamente...")

			}

			//alert(rpta);
	
		}, 'json');

	}

	/*

	//$('#clock').countdown('2020/10/10 12:34:56')
	$('#clock').countdown('2023/05/21')
	.on('update.countdown', function(event) {
	  //var format = '%H:%M:%S';
	  var format = ' %S Segundos';
	  if(event.offset.totalDays > 0) {
		format = '%-d Día%!d ' + format;
	  }
	  if(event.offset.weeks > 0) {
		format = ' %-w Semana%!w ' + format;
	  }
	  $(this).html(event.strftime(format));
	}).on('finish.countdown', function(event) {
	  $(this).html('This offer has expired!')
		.parent().addClass('disabled');
	
	});
	*/

	$('.clock-class').countdown('2023/06/27').on('update.countdown', function(event) {
		var $this = $(this).html(event.strftime(''
			/*+ '<span>%w</span> weeks '*/
			+ '<div class=\'box-hora\'><h2 style=\'\'>%D</h2><span style=\'\'> Días </span><br><br></div>'
			+ '<div class=\'box-hora\'><h2 style=\'\'>%H</h2><span style=\'\'> Horas </span><br><br></div>'
			+ '<div class=\'box-hora\'><h2 style=\'\'>%M</h2><span style=\'\'> Minutos </span><br><br></div>'
			+ '<div class=\'box-hora\'><h2 style=\'\'>%S</h2><span style=\'\'> Segundos </span><br><br></div>'
		));
	});

	/*
	$('#clock').countdown('2020/10/10').on('update.countdown', function(event) {
		var $this = $(this).html(event.strftime(''
		+ '<span>%-w</span> week%!w '
		+ '<span>%-d</span> day%!d '
		+ '<span>%H</span> hr '
		+ '<span>%M</span> min '
		+ '<span>%S</span> sec'));
	});
	*/

	$("#btn_buscar_codigo_comision").click(function(e) {
		e.preventDefault();

		if ($("#txt_codigo_comision").val() == "") {

			alert("Es necesario ingresar un código de comisión")

		}else{

			buscarCodigoComision($("#txt_codigo_comision").val());

		}

	});

	function buscarCodigoComision(codcom){

		$.post("index/buscarCodigoComision", "codcom="+codcom, function (rpta) {

			//alert(rpta['estado']);

			if (rpta['estado'] == false || rpta['estado'] == "false") {

				alert("El código ingresado no es válido...")

				/*
				$("#modal-texto-principal").hide(200);
				$("#panel-dni").hide(200);
				$("#panel-pregunta-comision").show(200);
				
				$("#hdn_listapreregistro").val(1)
				*/

			}else{

				var precioTotal = rpta['precio'];
				
				$("#hdn_id_comision").val(rpta['idcom']);
				$("#panel-codigo-comision").hide(200);
				$("#panel-completar-datos").show(200);

				$(".totalPagoPre").html("S/. "+precioTotal+".00"); // 127.00
				$("#hdn_total").val(precioTotal); // 127

			}

			//alert(rpta);
	
		}, 'json');

	}
	
	$("#btn_yape_deposito").click(function(e) {
		e.preventDefault();

		$("#panel-yape-deposito").show(200);
		
	});
	
	$("#btn_tarjeta").click(function(e) {
		e.preventDefault();

		window.open('zona_segura/pago/'+$("#hdn_codigo").val()+'/'+1, '_top');
		
	});

	// location.reload();
	/*

	btn_entrada_grupal

	swal({
		title: "Looks like you're from . ",
		text: "Go to our International Store? ",
		imageUrl: 'https://www.countryflags.io/flat/64.png',
		imageWidth: 128,
		imageHeight: 128,
		showCancelButton: true,
		showConfirmButton: true,
		confirmButtonText: 'Yes take me there',
		cancelButtonText: 'Stay on U.S.A Site',
		imageAlt: 'Custom image',
		dangerMode: false,
	})

	*/


	// VENTA GRUPAL

	$("#btn_entrada_grupal").click(function(e) {
		e.preventDefault();

		$("#modal-texto-principal").hide(200);
		$("#panel-botones-principales").hide(200);
		$("#panel-codigo-comision-grupal").show(200);
		
		$("#hdn_tipoentrada").val(2);
		
	});

	

	
	$("#btn_buscar_codigo_comision_grupal").click(function(e) {
		e.preventDefault();

		if ($("#txt_codigo_comision_grupal").val() == "") {

			alert("Es necesario ingresar un código de comisión")
			
		}else{

			buscarCodigoComisionGrupal($("#txt_codigo_comision_grupal").val());

		}
		
	});

	function buscarCodigoComisionGrupal(codcom){
		
		$.post("index/buscarCodigoComision", "codcom="+codcom, function (rpta) {

			//alert(rpta['estado'])

			if (rpta['estado'] == false || rpta['estado'] == "false") {

				alert("El código ingresado no es válido...");

				/*
				$("#modal-texto-principal").hide(200);
				$("#panel-dni").hide(200);
				$("#panel-pregunta-comision").show(200);
				
				$("#hdn_listapreregistro").val(1)
				*/

			}else{
				
				$("#panel-codigo-comision-grupal").hide(200);
				$("#panel-cantidad-grupal").show(200);

				$("#hdn_id_comision").val(rpta['idcom'])

			}

			//alert(rpta);
	
		}, 'json');

	}


	$("#slc_cantidad_grupo").change(function() {

		if ($(this).val() == "") {

			alert("Es necesario elegir la cantidad de tu delegación...");

			$("#panel_precio_cantidad_grupo").hide(200);
			$(".totalPagoPre_grupo").html("");
			$("#hdn_total").val("");
			
		} else {
			
			var totalGrupo = parseInt($(this).val()) * parseInt(97); // PRE 97

			$("#panel_precio_cantidad_grupo").show(200);
			$(".totalPagoPre_grupo").html("S/. "+totalGrupo+".00");
			$("#hdn_total").val(totalGrupo);
			
		}

    })


	

	


	$("#btn_continuar_grupo").click(function(e) {
		e.preventDefault();

		//alert($("#slc_cantidad_grupo").val());

		if ( $("#slc_cantidad_grupo").val() == "" || $("#txt_dni_lider").val() == "" || $("#txt_nombre_lider").val() == "" || $("#txt_apepat_lider").val() == "" || $("#txt_apemat_lider").val() == "" || $("#txt_celular_lider").val() == "" || $("#txt_corele_lider").val() == "") {
			
			alert("Es necesario registrar todos los campos...");

		}else{

			guardarOrdenGrupal($("#slc_cantidad_grupo").val(),$("#hdn_codigo").val());
			
		}

	});

	function guardarOrdenGrupal(cantidad,codigo){

		let datos = $("#frm_orden").serialize();
		let datosLider = $("#frm_datos_lider").serialize();

		$.post("index/guardarOrdenGrupal", datos+"&cantidad="+cantidad+"&"+datosLider, function (rpta) {

			if (rpta == true || rpta == "true") {

				//window.open('grupal/delegacion/'+codigo+'/'+cantidad, '_top');
				
				$("#panel-cantidad-grupal").hide(200);
				$("#panel_metodos_pago_lider").show(200);

				// window.open('zona_segura/pago/'+codigo+'/'+2, '_top');

			}else{
				
				alert("Ocurrio un error al registrar la orden, por favor intentar nuevamente...")

			}

			//alert(rpta);
	
		}, 'json');

	}

	$("#btn_yape_deposito_grupal").click(function(e) {
		e.preventDefault();

		$("#panel-yape-deposito-grupal").show(200);
		
	});

	$("#btn_tarjeta_grupal").click(function(e) {
		
		e.preventDefault();
		window.open('zona_segura/pago/'+$("#hdn_codigo").val()+'/'+2, '_top');

	});

	/* ********************************************* */

	$("#btn-entrada").click(function(e) {
		$("#form").modal("show");
	});

	$('.btn_cerrefres').click(function(e) {
		location.reload();
	});








































	/* CERTIFICADOS */

	// $("#modal_certificado").modal("show");

	$('.clock-class-certificate').countdown('2023/08/30').on('update.countdown', function(event) {
		var $this = $(this).html(event.strftime(''
			/*+ '<span>%w</span> weeks '*/
			+ '<div class=\'box-hora\'><h2 style=\'margin:0px;\'>%D</h2><span style=\'\'> Días </span><br><br></div>'
			+ '<div class=\'box-hora\'><h2 style=\'margin:0px;\'>%H</h2><span style=\'\'> Horas </span><br><br></div>'
			+ '<div class=\'box-hora\'><h2 style=\'margin:0px;\'>%M</h2><span style=\'\'> Minutos </span><br><br></div>'
			+ '<div class=\'box-hora\'><h2 style=\'margin:0px;\'>%S</h2><span style=\'\'> Segundos </span><br><br></div>'
		));
	});

	$('#btn_seguir_navegando').click(function(e) {
		$("#modal_certificado").modal("hide");
	});

	$('#btn_bienvenido').click(function(e) {
		$("#modal_certificado").modal("hide");
		$("#modal_bienvenidos").modal("show");
	});

	$('.btn_cerrar_modal').click(function(e) {

		$("#modal_certificado").modal("hide");

		$("#modal_bienvenidos").modal("hide");
		$("#modal_c1_uno").modal("hide");
		$("#modal_c1_dos").modal("hide");
		$("#modal_c1_tres").modal("hide");
		$("#modal_c1_cert").modal("hide");
		$("#modal_c1_curso").modal("hide");
		$("#modal_c1_cuatro").modal("hide");

		$("#modal_c2_uno").modal("hide");
		$("#modal_c2_curso").modal("hide");
		$("#modal_c2_cert").modal("hide");

		$("#hdn_curso_ad").val("");
		$("#txt_dni_usu_c2").val("");
	});

	$('#btn_c1_uno').click(function(e) {
		$("#modal_bienvenidos").modal("hide");
		$("#modal_c1_uno").modal("show");
	});

	$('#btn_c1_dos').click(function(e) {
		$("#modal_c1_uno").modal("hide");
		$("#modal_c1_dos").modal("show");
	});

	async function getIpClient() {

		let v;

		try {
			const response = await axios.get('https://api.ipify.org?format=json');
			// console.log(response.data['ip']);
			// v = await response.data['ip'];
			$("#data-ip-sorteo").html(response.data['ip'])
		} catch (error) {
			// console.error(error);
			// v = await response.data['ip'];
			$("#data-ip-sorteo").html(error)
		}

	}

	$('#btn_c1_tres').click(function(e) {

		getIpClient();

		$("#modal_c1_dos").modal("hide");
		$("#modal_c1_tres").modal("show");

	});

	$('#btn_c1_cuatro').click(function(e) {

		$("#modal_c1_tres").modal("hide");
		$("#modal_c1_curso").modal("show");
		//$("#modal_c1_cuatro").modal("show");

	});

	/* BUSCAR CERTIFICADO  */

	$('#btn_buscar_cer_f').on('click',function(){

		if ($("#txt_dni_usu").val() != "") {

			buscar_certificado_dni($("#txt_dni_usu").val());

        }else{

			alert("Ingresa tu número de DNI...")

		}

	});

	function buscar_certificado_dni(dni){

		//var datper = $("#form-datper").serialize();
		//var origen = $("#t_origen").val();
		//var codigo = $("#txt_codigo").val();

		$.post(ruta+"index/buscar_cer_dni_23","dni="+dni, function (rpta) {

			if(rpta == false) {

				alert("Ingresa un DNI válido...");
				$("#txt_dni_usu").val("");

			}else{

				$("#modal_c1_cuatro").modal("hide");
				$("#modal_c1_cert").modal("show");

				if ($("#hdn_pretot").val() == 1) {
					$(".preFin").html("S/. 29.90");
				} else if ($("#hdn_pretot").val() == 2){
					$(".preFin").html("S/. 39.90");
				} else {
					$(".preFin").html("S/. 39.90");
				}
				


				if (rpta['c7'] != 'false') {
					var htmlCarta  = "y <br> una carta de recomendación.";
				} else {
					var htmlCarta  = "";
				}

				if (rpta['cantidadCertificadosDisponibles'] > 5) {
					var cantCert = 6
					var htmlCert = "Tienes "+rpta['cantidadCertificadosDisponibles']+"/"+cantCert+" Certificados disponibles "+htmlCarta;
				} else {
					var cantCert = 4
					var htmlCert = "Tienes "+rpta['cantidadCertificadosDisponibles']+"/"+cantCert+" Certificados disponibles "+htmlCarta;
				}

				$("#txt_disponibles_certificados").html(htmlCert);

				fila = '<div class="col-md-12 col-sm-12 col-xs-12">';

				if (rpta['c1'] != 'false') {
					fila += '<a href="'+rpta['c1']+'" target="_blank" class="button_popup_3" >Certificado de Participante</a>';
				}

				if (rpta['c2'] != 'false') {
					fila += '<a href="'+rpta['c2']+'" target="_blank" class="button_popup_3" >Certificado de Lideres Estrategas</a>';
				}

                if (rpta['c3'] != 'false') {
					fila += '<a href="'+rpta['c3']+'" target="_blank" class="button_popup_3" >Certificado de Lideres Creativos</a>';
				}

				if (rpta['c4'] != 'false') {
					fila += '<a href="'+rpta['c4']+'" target="_blank" class="button_popup_3" >Certificado de Lideres Emprendedores</a>';
				}

				if (rpta['c5'] != 'false') {
					fila += '<a href="'+rpta['c5']+'" target="_blank" class="button_popup_3" >Certificado de Miembro De La Comisión Organizadora</a>';
				}

				if (rpta['c6'] != 'false') {
					fila += '<a href="'+rpta['c6']+'" target="_blank" class="button_popup_3" >Certificado de Presidente De La Comisión Organizadora</a>';
				}

				if (rpta['c7'] != 'false') {
					fila += '<a href="'+rpta['c7']+'" target="_blank" class="button_popup_3" >Carta de Recomendación</a>';
				}

                fila += '</div>';

				$(".contener_certificados_1").append(fila);

			}

		}, 'json');

	}

	$('#btn_c1_no_curso').click(function(e) {

		$("#modal_c1_curso").modal("hide");
		$("#modal_c1_cuatro").modal("show");

		$("#hdn_curso_ad").val(1);

	});

	$('#btn_c1_curso').click(function(e) {

		$("#modal_c1_curso").modal("hide");
		$("#modal_c1_cuatro").modal("show");

		$("#hdn_curso_ad").val(2);

		alert("Curso agregado con exito...")

	});

	$('#btn_c1_cert').click(function(e) {

		$("#hdn_pretot").val(2);
		redcercom();

	});

	function redcercom(){

		window.location.href = ruta+"comprar/cer/"+$("#hdn_curso_ad").val()+"/"+$("#txt_dni_usu").val()+"/"+$("#hdn_pretot").val();

	}

	/* ********************************************************************************************************************************** */

	$('#btn_c2_dos').click(function(e) {
		$("#modal_c1_uno").modal("hide");
		$("#modal_c2_uno").modal("show");

		$("#hdn_pretot").val(2);
	});

	$('#btn_c2_tres').click(function(e) {
		$("#modal_c1_dos").modal("hide");
		$("#modal_c2_uno").modal("show");

		$("#hdn_pretot").val(2);
	});

	$('#btn_c2_cuatro').click(function(e) {
		$("#modal_c1_tres").modal("hide");
		$("#modal_c2_uno").modal("show");

		$("#hdn_pretot").val(1);
	});

	/*
	$('#btn_buscar_cer_f_c2').click(function(e) {

		$("#modal_c2_uno").modal("hide");
		$("#modal_c2_curso").modal("show");

	});
	*/

	$('#btn_c2_no_curso').click(function(e) {

		$("#modal_c2_curso").modal("hide");
		$("#modal_c2_cert").modal("show");

		$("#hdn_curso_ad").val(1);

		if ($("#hdn_pretot").val() == "1") {
			$(".preFin").html("S/. 29.90");
		} else if ($("#hdn_pretot").val() == "2"){
			$(".preFin").html("S/. 39.90");
		} else {
			$(".preFin").html("S/. 39.90");
		}

		//$(".preFin").html("S/. 29.90");

	});

	$('#btn_c2_curso').click(function(e) {

		$("#modal_c2_curso").modal("hide");
		$("#modal_c2_cert").modal("show");

		$("#hdn_curso_ad").val(2);

		if ($("#hdn_pretot").val() == "1") {
			$(".preFin").html("S/. 29.90");
		} else if ($("#hdn_pretot").val() == "2"){
			$(".preFin").html("S/. 39.90");
		} else {
			$(".preFin").html("S/. 39.90");
		}

		//$(".preFin").html("S/. 39.90");

		alert("Curso agregado con éxito...")

	});

	/* BUSCAR CERTIFICADO  */

	$('#btn_buscar_cer_f_c2').on('click',function(){

		if ($("#txt_dni_usu_c2").val() != "") {

			buscar_certificado_dnic2($("#txt_dni_usu_c2").val());

		}else{

			alert("Ingresa tu número de DNI...")

		}

	});

	function buscar_certificado_dnic2(dni){

		//var datper = $("#form-datper").serialize();
		//var origen = $("#t_origen").val();
		//var codigo = $("#txt_codigo").val();

		$.post(ruta+"index/buscar_cer_dni_23","dni="+dni, function (rpta) {

			if(rpta == false) {

				alert("Ingresa un DNI válido...");
				$("#txt_dni_usu_c2").val("");

			}else{

				$("#modal_c2_uno").modal("hide");
				$("#modal_c2_curso").modal("show");

				
				/*
				if (rpta['c7'] != 'false') {
					var htmlCarta  = "y <br> una carta de recomendación.";
				} else {
					var htmlCarta  = "";
				}

				if (rpta['cantidadCertificadosDisponibles'] > 5) {
					var cantCert = 6
					var htmlCert = "Tienes "+rpta['cantidadCertificadosDisponibles']+"/"+cantCert+" Certificados disponibles "+htmlCarta;
				} else {
					var cantCert = 4
					var htmlCert = "Tienes "+rpta['cantidadCertificadosDisponibles']+"/"+cantCert+" Certificados disponibles "+htmlCarta;
				}

				$("#txt_disponibles_certificados").html(htmlCert);
				*/

				fila = '<div class="col-md-12 col-sm-12 col-xs-12">';
				fila += '<a href="#" class="button_popup_3" >Certificado de Participante</a>';
				fila += '<a href="#" class="button_popup_3" >Certificado de Lideres Estrategas</a>';
				fila += '<a href="#" class="button_popup_3" >Certificado de Lideres Creativos</a>';
				fila += '<a href="#" class="button_popup_3" >Certificado de Lideres Emprendedores</a>';

				if (rpta['c5'] != 'false') {
					fila += '<a href="#" class="button_popup_3" >Certificado de Miembro De La Comisión Organizadora</a>';
				}

				if (rpta['c6'] != 'false') {
					fila += '<a href="#" class="button_popup_3" >Certificado de Presidente De La Comisión Organizadora</a>';
				}

				fila += '<a href="#" class="button_popup_3" >Carta de Recomendación</a>';
				fila += '</div>';

				$(".contener_certificados_2").append(fila);

			}

		}, 'json');

	}

	$('#btn_c2_cert').click(function(e) {

		window.location.href = ruta+"comprar/cer/"+$("#hdn_curso_ad").val()+"/"+$("#txt_dni_usu_c2").val()+"/"+$("#hdn_pretot").val();

	});

	

});