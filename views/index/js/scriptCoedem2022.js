$(function () {

	/*
	g_ao();
    
    function g_ao(){

        var numPosibilidades = 99999999;
        var random = Math.random() * numPosibilidades ;
        random = Math.round(random) ;
        ao = parseInt(1) + random;

        $.post("index/g_ao", 'ao=' + ao, function(respuesta){

            if(respuesta == true)
            {
                g_ao();
            }
            else if(respuesta == false)
            {
                $("#hdn_ao").val(ao);
            }

        }, 'json');

    }
	*/

	var ruta = $("#root").val();


	// CIERRE DE PREVENTA
	var fechaCierrePreventa = new Date();

	//fechaCierrePreventa = new Date(2022, 5, 30); // PRIMERCIERRE - 6 AL 30 DE JUNIO
	//fechaCierrePreventa = new Date(2022, 7, 1); // SEGUNDO CIERRE - 1 AL 31 DE JULIO
	fechaCierrePreventa = new Date(2022, 7, 28); // TERCER CIERRE - 2 AL 28 de AGOSTO
	$('.cierre_preventa').countdown({
		until: fechaCierrePreventa,
		padZeroes: true,
		format: 'DHMS'
	});


	var austDay = new Date();
	//Set counter date
	austDay = new Date(2022, 9, 10); //set the time from here
	$('.defaultCountdown').countdown({
		until: austDay,
		padZeroes: true,
		format: 'DHMS'
	});

	//jQuery('#year').text(austDay.getFullYear());

	//austDay =  new Date(2020,9,24); //set the time from here
	/*jQuery('.countdownEtapa').countdown({
	  until: austDay, padZeroes: true,format: 'DHMS'});*/

	//austDay =  new Date(2020,9,24); //set the time from here

	/*

	$('.countdownEtapa').countdown({
		until: austDay,
		padZeroes: true,
		format: 'DHM'
	});

	function makeTimer() {

		//var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
		var endTime = new Date("24 August 2022 23:59:59 GMT-05:00");
		endTime = (Date.parse(endTime) / 1000);

		var now = new Date();
		now = (Date.parse(now) / 1000);

		var timeLeft = endTime - now;

		var days = Math.floor(timeLeft / 86400);
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));


		if (endTime < now) {

			days = "00";
			hours  = "00";
			minutes  = "00";
			seconds  = "00";

		}else{

			if (hours < "10") { hours = "0" + hours; }
			if (minutes < "10") { minutes = "0" + minutes; }
			if (seconds < "10") { seconds = "0" + seconds; }

		}

		$(".days").html(days + "<span>Dias</span>");
		$(".hours").html(hours + "<span>Horas</span>");
		$(".minutes").html(minutes + "<span>Minutos</span>");
		$(".seconds").html(seconds + "<span>Segundos</span>");

	}

	setInterval(function () { makeTimer(); }, 1000);

	/*


	//$('#btn-comprar').attr('href', "https://api.whatsapp.com/send?phone=51987166000&text=Hola,%20deseo%20m%C3%A1s%20detalles");




	/*
	$("#swag-two").modal({
		escapeClose: false,
		clickClose: false,
		showClose: false
	});
	*/

	$('#btn-cerpu').on('click', function () {

		$.modal.close();
		
	});


	$('#btn-aceptar').on('click', function () {

		$.modal.close();

	});

	function limpiarContacto(){
		
		$("#txt_nombre_mod").val("");
		$("#txt_celular_mod").val("");
		$("#txt_correo_mod").val("");

	}

	$('.btn-procom').on('click', function () {

		var origen = $(this).data("id");

		if (origen == 1){
			$("#col-slc-ent").hide();
		}else{
			$("#col-slc-ent").show();
		}

		//window.open('comprar/individual', '_self');
		/*Culqi.open();
		e.preventDefault();*/

		$("#st1").addClass("active");
		$("#st2").removeClass("active");
		$("#st3").removeClass("active");

		$("#step1").show(200);
		$("#step2").hide(200);
		$("#step3").hide();

		$("#t_totfin_mon").val("");
		$("#t_totfin_eta").val("");
		$("#t_totfin_ind_c").val("");

		$("#t_origen").val("");

		$("#txt_dni").val("");
		$("#txt_nombre").val("");
		$("#txt_correo").val("");
		$("#txt_celular").val("");
		$("#txt_codigo").val("");

		$.post("index/comTotIniInd", "moniniind="+$("#t_totini_ind").val()+"&origen="+origen+"&moninicom="+$("#t_totini_com").val(), function (rpta) {

			if (rpta[0] == 'true' || rpta[0] == true) {

				$("#proPag").modal({
					escapeClose: false,
					clickClose: false,
					showClose: false
				});

				//$("#t_totfin_ind_c").val(parseFloat($("#t_totini_ind").val()).toFixed(0)+"00");

				var nroTot = rpta[1];
				nroTot = nroTot.replace(".","");

				$("#t_totfin_ind_c").val(nroTot);
				$("#t_totfin_mon").val(rpta[1]);
				$("#t_totfin_eta").val(rpta[2]);

				$("#t_origen").val(origen);

			}else{

				alert("Ocurrió un error al continuar con la compra, por favor envíanos un mensaje al siguiente número 915344861 para poder ayudarte.");

			}

		}, 'json');

	});

	$('.btn_cerpropag').on('click', function () {
		
		$("#st1").addClass("active");
		$("#st2").removeClass("active");
		$("#st3").removeClass("active");

		$("#step1").show(200);
		$("#step2").hide(200);
		$("#step3").hide();

		$("#t_totfin_mon").val("");
		$("#t_totfin_eta").val("");
		$("#t_totfin_ind_c").val("");

		$("#txt_dni").val("");
		$("#txt_nombre").val("");
		$("#txt_apellido").val("");
		$("#txt_correo").val("");
		$("#txt_celular").val("");
		$("#txt_codigo").val("");

		var validator = $("#form-datper").validate();
 		validator.resetForm();

		$.modal.close();

	});

	$("#form-datper").validate();

    $("#txt_nombre").rules("add",{
    	required: true,
    	messages: {
    		required: "Completar campo"
    	}
    });

    $("#txt_apellido").rules("add",{
    	required: true,
    	messages: {
    		required: "Completar campo"
    	}
    });

    $("#txt_dni").rules("add",{
    	required: true,
    	number: true,
        min: 8,
    	messages: {
    		required: "Completar campo",
    		number: "Solo este permitido números",
    		min: "Mínimo 8 caracteres"
    	}
    });

    $("#txt_correo").rules("add",{
    	required: true,
    	email: true,
    	messages: {
    		required: "Completar campo",
    		email: "Debe ingresar un correo válido"
    	}
    });

    $("#txt_celular").rules("add",{
    	required: true,
    	number: true,
    	messages: {
    		required: "Completar campo",
    		number: "Solo este permitido números"
    	}
    });

	$('#btn_sig1').on('click',function(){
	
		/*	
		var nombre = $("#txt_nombre").val();
		var apellido = $("#txt_apellido").val();
		var dni = $("#txt_dni").val();
		var correo = $("#txt_correo").val();
		var celular = $("#txt_celular").val();
		*/

		if ($("#form-datper").valid()) {

			$("#st1").addClass("active");
			$("#st2").addClass("active");
			$("#st3").removeClass("active");

			$("#step1").hide(200);
			$("#step2").show(200);
			$("#step3").hide();

			if ($("#t_origen").val() == 2){

				var canEnt = $("#txt_canent").val();
				var preEtapa = $("#t_totfin_mon").val();

				var precEntr = canEnt * preEtapa;

				var precEntr2 = precEntr.toFixed(2);

				$("#t_totfin_mon").val(precEntr2);

				var nroTot = precEntr2.toString();
				nroTot = nroTot.replace(".","");

				$("#t_totfin_ind_c").val(nroTot);

			}

        }

        //location.reload()

	});

	$('#btn_sig2').on('click', function () {

		if ($("#t_origen").val() == 1){

			// $("#txt_entrada").html("S/ "+$("#t_totini_ind").val()+" x Entrada");

			// $("#txt-tittotent").html("Total <br> Entrada individual");

		}else{

			$("#txt_entrada").html("S/ "+$("#t_totini_com").val()+" x Entrada");

			$("#txt-tittotent").html("Total <br> Entrada paquete delegación X "+$("#txt_canent").val());

		}

		if($("#txt_codigo").val() == ""){

			if ($("#t_origen").val() == 1){
				
				/*
				switch($("#t_totfin_eta").val()) {
					case '1':
					$("#txt-dsct").html("Dscto preventa (40%) <br>(Hasta el 06 de Setiembre)");
					break;
					case '2':
					$("#txt-dsct").html("Dscto 2da preventa (33.30%) <br>(Hasta el 30 de Setiembre)");
					break;
					case '3':
					$("#txt-dsct").html("Dscto preventa (10%) <br>(Hasta el 21 de Octubre)");
					break;
					case '4':
					$("#txt-dsct").html("");
					break;
				}
				*/

				$("#txt-dsct").html("Entrada Individual");

			}else{

				/*
				switch($("#t_totfin_eta").val()) {
					case '1':
					$("#txt-dsct").html("Dscto preventa (50%) <br>(Hasta el 06 de Setiembre)");
					break;
					case '2':
					$("#txt-dsct").html("Dscto 2da preventa (55.66%) <br>(Hasta el 30 de Setiembre)");
					break;
					case '3':
					$("#txt-dsct").html("Dscto preventa (20%) <br>(Hasta el 21 de Octubre)");
					break;
					case '4':
					$("#txt-dsct").html("");
					break;
				}
				*/

				$("#txt-dsct").html("Dscto 3ra preventa (55.66%) <br>(Hasta el 18 de Octubre)");

			}

			$("#txt-total").html("S/ "+$("#t_totfin_mon").val());

			$("#st1").addClass("active");
			$("#st2").addClass("active");
			$("#st3").addClass("active");

			$("#step1").hide();
			$("#step2").hide(200);
			$("#step3").show(200);

			c_o($("#t_totfin_ind_c").val());

		}else{

			if ($("#t_origen").val() == 1){
				
				/*
				switch($("#t_totfin_eta").val()){
					case '1':
					$("#txt-dsct").html("Dscto preventa (40%) <br>(Hasta el 06 de Setiembre) <br> + Dscto código (10%)");
					break;
					case '2':
					$("#txt-dsct").html("Dscto 2da preventa (33.30%) <br>(Hasta el 30 de Setiembre) <br> + Dscto código (10%)");
					break;
					case '3':
					$("#txt-dsct").html("Dscto preventa (0%) <br>(Hasta el 21 de Octubre) <br> + Dscto código (10%)");
					break;
					case '4':
					$("#txt-dsct").html("");
					break;
				}
				*/

				$("#txt-dsct").html("Precio regular - S/ 145.99 <br> Dscto código (10%)");

			}else{

				/*
				switch($("#t_totfin_eta").val()){
					case '1':
					$("#txt-dsct").html("Dscto preventa (50%) <br>(Hasta el 06 de Setiembre) <br> + Dscto código (10%)");
					break;
					case '2':
					$("#txt-dsct").html("Dscto 2da preventa (55.66%) <br>(Hasta el 30 de Setiembre) <br> + Dscto código (10.00%)");
					break;
					case '3':
					$("#txt-dsct").html("Dscto preventa (0%) <br>(Hasta el 21 de Octubre) <br> + Dscto código (10%)");
					break;
					case '4':
					$("#txt-dsct").html("");
					break;
				}
				*/

				$("#txt-dsct").html("Dscto 3ra preventa <br>(Hasta el 18 de Octubre) <br> + Dscto código (19.54%)");
			
			}

			$.post("index/comcod", "cod="+$("#txt_codigo").val(), function (rpta) {

				if (rpta == "") {

					alert("Código de comisión inválido");

				}else{

					if (rpta[0][2] == 1 || rpta[0][2] == '1') {

						alert("Código de comisión válido - " + rpta[0][0] + " - " + rpta[0][1]);

						var precio = $("#t_totfin_mon").val();


						if ($("#t_origen").val() == 1){

							var precioFinal = precio - (precio * 0.1);

						}else{

							var precioFinal = precio - (precio * 0.1954);

						}

						var decimal = precioFinal.toFixed(2);

						var nroTot = decimal.toString();

						nroTot = nroTot.replace(".","");

						$("#t_totfin_ind_c").val(nroTot);
						$("#t_totfin_mon").val(decimal);

						$("#txt-total").html("S/ "+decimal);

						$("#st1").addClass("active");
						$("#st2").addClass("active");
						$("#st3").addClass("active");

						$("#step1").hide();
						$("#step2").hide(200);
						$("#step3").show(200);

						c_o(nroTot);

					}else {

						alert("Código de comisión inválido");

					}

				}

			}, 'json');

		}

	});

	function c_o(monFinCul){

		var datper = $("#form-datper").serialize();
		//var datos = $("#form-c").serialize();

		var totini_ind = $("#t_totini_ind").val();
		var totini_com = $("#t_totini_com").val();
		var totfin_mon = $("#t_totfin_mon").val();
		var totfin_eta = $("#t_totfin_eta").val();
		var totfin_ind_c = $("#t_totfin_ind_c").val();
		var odncul = $("#t_odncul").val();
		var origen = $("#t_origen").val();
		var codigo = $("#txt_codigo").val();
		var ao = $("#hdn_ao").val();

		$.post("index/c_o", "monto="+monFinCul+"&"+datper+"&totini_ind="+totini_ind+"&totini_com="+totini_com+"&totfin_mon="+totfin_mon+"&totfin_eta="+totfin_eta+"&totfin_ind_c="+totfin_ind_c+"&odncul="+odncul+"&origen="+origen+"&codigo="+codigo+"&ao="+ao, function (rpta) {
		
			$("#t_odncul").val(rpta['id']);

		}, 'json');
	
	}

	$('#btn_atr2').on('click', function () {

		$("#st1").addClass("active");
		$("#st2").removeClass("active");
		$("#st3").removeClass("active");

		$("#step1").show(200);
		$("#step2").hide(200);
		$("#step3").hide();

	});	

	$('#btn_atr3').on('click', function () {

		$("#st1").addClass("active");
		$("#st2").addClass("active");
		$("#st3").removeClass("active");

		$("#step1").hide(200);
		$("#step2").show(200);
		$("#step3").hide();

	});


	/*

	function culqi() {

		var datos = $("#form-c").serialize();


		if (Culqi.token) {


			console.log("Token obtenido"); 
    		console.log(Culqi.token);  
    		console.log("Respuesta desde iframe: " + Culqi.token);  

			$.ajax({
				type: 'POST',
				url: 'index/c_c',
				
				data: datos+"token="+Culqi.token.id+"&cuotas="+Culqi.token.metadata.installments,
				datatype: 'json',
				success: function(data) {

					alert(data)


				},
				error: function(error) {
					alert(error)
				}
			});
		} else {
			alert("noexiste token")
		}
	};

	*/

	$('#btn_entrada_action').on('click', function () {

		$("#comprar-entrada").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});

		$("#hdn_tipent").val("");
		$("#step1_ent").show(200);
		$("#step2_ent").hide(200);

		$("#step2_ent_1").hide(200);

		$("#st1_ent").addClass("active");
		$("#st2_ent").removeClass("active");
		$("#st3_ent").removeClass("active");

		$("#precio_total_entrada").html("");
		$("#precio_total_entrada_grupal").html("");

	});

	$('#btn_individual').on('click', function (e) {

		$("#hdn_tipent").val(1);
		$("#step1_ent").hide(200);
		$("#step2_ent").show(200);

		$("#step2_ent_1").show(200);

		$("#st1_ent").addClass("active");
		$("#st2_ent").addClass("active");
		$("#st3_ent").removeClass("active");

	});

	$('#btn_grupal').on('click', function (e) {

		$("#hdn_tipent").val(2);
		$("#step1_ent").hide(200);
		$("#step2_ent").show(200);

		$("#step2_ent_1").show(200);

		$("#st1_ent").addClass("active");
		$("#st2_ent").addClass("active");
		$("#st3_ent").removeClass("active");

	});

	$('#btn_step2_atras').on('click', function (e) {

		$("#hdn_tipent").val("");
		$("#step1_ent").show(200);
		$("#step2_ent").hide(200);

		$("#step2_ent_1").hide(200);

		$("#st1_ent").addClass("active");
		$("#st2_ent").removeClass("active");
		$("#st3_ent").removeClass("active");

	});
	
	/* BOTNES SI - NO - CODIGO DE COMISION */

	$('#btn_cod_si').on('click', function (e) {

		$("#hdn_codest").val(1);

		$("#step2_ent_1").hide(200);
		$("#step2_ent_2").show(200);

		$("#st1_ent").addClass("active");
		$("#st2_ent").addClass("active");
		$("#st3_ent").removeClass("active");

	});

	$('#btn_cod_no').on('click', function (e) {

		// COMPRUEBA SI EL GRUPAL O INDIVIDUAL
		// TIPO DE ENTRADA INDIVIDUAL = 1 - GRUPAL 2
		if ($("#hdn_tipent").val() == 1) {
			
			$("#hdn_codest").val(0);

			$("#step1_ent").hide(200);
			$("#step2_ent").hide(200);
			$("#step2_ent_1").hide(200);
			$("#step2_ent_2").hide(200);
			$("#step3_ent").show(200);
	
			$("#st1_ent").addClass("active");
			$("#st2_ent").addClass("active");
			$("#st3_ent").addClass("active");
	
			mostrarPE($("#hdn_tipent").val(),$("#hdn_codest").val(),1);// 1 = una entrada

		}else{

			//alert("grupal - sin codigo")
			
			$("#hdn_codest").val(0);// TIPO DE ESTADO SI = 1 - NO = 0 = CON O SIN CODIGO DE COMISION

			$("#step1_ent").hide(200);
			$("#step2_ent").show(200);
			$("#step2_ent_1").hide(200);
			$("#step2_ent_2").hide(200);
			$("#step2_ent_3").show(200);
			//$("#step3_ent").show(200);
	
			$("#st1_ent").addClass("active");
			$("#st2_ent").addClass("active");
			$("#st3_ent").removeClass("active");

		}

	});

	/* BOTON CON CODIGO */

	$('#btn_step2_2_atras').on('click', function (e) {

		$("#hdn_codest").val("");
		$("#txt_codigo_comision").val("");

		$("#step2_ent_1").show(200);
		$("#step2_ent_2").hide(200);

		$("#st1_ent").addClass("active");
		$("#st2_ent").addClass("active");
		$("#st3_ent").removeClass("active");

	});

	$('#btn_step2_2_siguiente').on('click', function (e) {

		// COMPROBAR CODIGO DE COMISION

		if ($("#txt_codigo_comision").val() == "") {
			
			alert("Es necesario ingresar un código para poder continuar.");

		}else{
			
			comprobarCodigo($("#txt_codigo_comision").val());

		}

	});

	function comprobarCodigo(codcom){

		$.post("index/comprobarCodigo", "codcom="+codcom, function(rpta) {

			if (rpta == false) {

				alert("El código ingresado es inválido. Puedes ver los precios sin código en el botón de abajo.");
				
			}else{

				// COMPRUEBA SI ES GRUPAL O INDIVIDUAL
				// TIPO DE ENTRADA INDIVIDUAL = 1 - GRUPAL 2
				if ($("#hdn_tipent").val() == 1) {

					$("#hdn_codest").val(1);// TIPO DE ESTADO SI = 1 - NO = 0 = CON O SIN CODIGO DE COMISION

					$("#step1_ent").hide(200);
					$("#step2_ent").hide(200);
					$("#step2_ent_1").hide(200);
					$("#step2_ent_2").hide(200);
					$("#step2_ent_3").hide(200);
					$("#step3_ent").show(200);
			
					$("#st1_ent").addClass("active");
					$("#st2_ent").addClass("active");
					$("#st3_ent").addClass("active");
			
					mostrarPE($("#hdn_tipent").val(),$("#hdn_codest").val(),1);// 1 = una entrada
					
				}else{

					$("#hdn_codest").val(1);// TIPO DE ESTADO SI = 1 - NO = 0 = CON O SIN CODIGO DE COMISION

					$("#step1_ent").hide(200);
					$("#step2_ent").show(200);
					$("#step2_ent_1").hide(200);
					$("#step2_ent_2").hide(200);
					$("#step2_ent_3").show(200);
					//$("#step3_ent").show(200);
			
					$("#st1_ent").addClass("active");
					$("#st2_ent").addClass("active");
					$("#st3_ent").removeClass("active");

				}

			}

		}, 'json');

	}

	$('#btn_step2_3_siguiente').on('click', function (e) {

		// COMPROBAR CODIGO DE COMISION
		if ($("#slc_canent").val() == "") {

			alert("Es necesario elegir una cantidad de entradas para poder continuar.");

		}else{

			// TIPO DE CODIGO - CON CODIGO 1 - SIN CODIGO 0
			//$("#hdn_codest").val(1);

			$("#step1_ent").hide(200);
			$("#step2_ent").hide(200);
			$("#step2_ent_1").hide(200);
			$("#step2_ent_2").hide(200);
			$("#step2_ent_3").hide(200);
			$("#step3_ent").show(200);

			$("#st1_ent").addClass("active");
			$("#st2_ent").addClass("active");
			$("#st3_ent").addClass("active");

			mostrarPE($("#hdn_tipent").val(),$("#hdn_codest").val(),$("#slc_canent").val());

		}

	});


	$('.btn_precios_sc').on('click', function (e) {

		// VER PRECIOS SIN CODIGO
		$("#hdn_codest").val(0);

		$("#step1_ent").hide(200);
		$("#step2_ent").hide(200);
		$("#step2_ent_1").hide(200);
		$("#step2_ent_2").hide(200);
		$("#step3_ent").show(200);

		$("#st1_ent").addClass("active");
		$("#st2_ent").addClass("active");
		$("#st3_ent").addClass("active");

		//mostrarPE($("#hdn_tipent").val(),0,);

	});

	/* ******************************************************************** */

	$('.btn_cerrar_modal').on('click', function (e) {

		$("#hdn_tipent").val("");
		$("#hdn_codest").val("");
		$("#txt_codigo_comision").val("");

		$("#step1_ent").hide(200);
		$("#step2_ent").hide(200);
		$("#step2_ent_1").hide(200);
		$("#step2_ent_2").hide(200);
		$("#step3_ent").hide(200);
		
		$("#st1_ent").removeClass("active");
		$("#st2_ent").removeClass("active");
		$("#st3_ent").removeClass("active");

		$("#imagenes_metodos_pago").html("");

		$.modal.close();

	});

	function mostrarPE(tipent,codest,cant){

		$("#imagenes_metodos_pago").html("");

		$.post("index/mostrarPE", "tipent="+tipent+"&codest="+codest+"&cant="+cant, function(rpta) {

			$("#btn_realice_pago").attr("href","https://api.whatsapp.com/send?phone=51987166000&text=Hola,%20ya%20realice%20el%20pago%20para%20Coedem%202022,%20aqu%C3%AD%20adjunto%20mi%20boucher%20o%20comprobante");

			// TIPO DE ENTRADA INDIVIDUAL = 1 - GRUPAL 2
			if ($("#hdn_tipent").val() == 1) {
				
				$("#imagenes_metodos_pago").html('<img src="'+$("#root").val()+'views/layout/assets/img/metodos_de_pago_coedem_2022.jpg" width="100%">');

				$("#precio_total_entrada").html("S/. "+rpta['precio']);

			}else{

				//$("#precio_total_entrada").html("S/. "+rpta['precio']+ " c/u");

				$("#imagenes_metodos_pago").html(
				'<img src="'+$("#root").val()+'views/layout/assets/img/metodos_de_pago_coedem_2022.jpg" width="100%">' +
				'<img src="'+$("#root").val()+'views/layout/assets/img/arma_tu_delegacion_1.jpeg" width="100%">' +
				'<img src="'+$("#root").val()+'views/layout/assets/img/arma_tu_delegacion_2.jpeg" width="100%">' +
				'<img src="'+$("#root").val()+'views/layout/assets/img/arma_tu_delegacion_3.jpeg" width="100%">' +
				'<img src="'+$("#root").val()+'views/layout/assets/img/arma_tu_delegacion_4.jpeg" width="100%">'
				);
				
				$("#precio_total_entrada_grupal").html("S/. "+rpta['precioGrupal']);

			}

		}, 'json');

	}



	


	/*

	$("#formulario-datos").modal({
		escapeClose: false,
		clickClose: false,
		showClose: false
	});

	$('#btn_cancelar_fd').on('click', function (e) {

		$("#hdn_tipent").val("");
		$("#hdn_codest").val("");
		$.modal.close();

		return false;

	});

	*/


	$('#btn-envfor').on('click', function () {

		if($("#txt_nombre_mod").val() == "" || $("#txt_celular_mod").val() == ""){

			let timerInterval
			Swal.fire({
				icon: 'error',
				title: '¡Error!',
				html: 'Por favor complete todos los campos, si no desea llenar el formulario presione el botón “Cerrar”',
				onClose: () => {
					//limpiarContacto();
					//$.modal.close();
				}
			})

		}else{

			var datos = $("#form_datper").serialize();
			envfor(datos,"envfor");

		}

	});

	$('#btn-envfor-cont').on('click', function () {

		var datos = $("#nl-form").serialize();
		envfor(datos,"envfort");


	});

	function envfor(datos,form){

		$.post("index/"+form, datos, function (rpta) {

			if(rpta == true) {

				let timerInterval
				Swal.fire({
					icon: 'success',
					title: '¡Gracias!',
					html: 'Tus datos se registraron con éxito, en breve uno de nuestros asesores se comunicará con usted.',
					onClose: () => {
						$.modal.close();
					}
				})

			}else if(rpta == 'existe'){

				let timerInterval
				Swal.fire({
					icon: 'success',
					title: '¡Gracias!',
					html: 'Tus datos ya fueron registrados con anterioridad, en breve uno de nuestros asesores se comunicará con usted.',
					onClose: () => {
						$.modal.close();
					}
				})

			}else {

				let timerInterval
				Swal.fire({
					icon: 'error',
					title: 'Ocurrio un error!',
					html: 'Estamos presentando un error, actualice la página y vuelva a intentarlo nuevamente si el error persiste por favor intente dentro de unos minutos. ¡Gracias!',
					onClose: () => {
						$.modal.close();
					}
				})

			}

		}, 'json');

	}

	/*
	limpiarContacto();

	$("#txt_nombre_cont").val("");
	$("#txt_celular_cont").val("");
	$("#txt_correo_cont").val("");
	*/

	$('#conocer_horas').on('click', function () {

		$("#modal_horas").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});

		return false;

	});

	$('#btn_cerrar_modal_horas').on('click', function (e) {

		$.modal.close();
		return false;

	});

	/* CERTIFICADOS COEDEM */
	/*
	let timerInterval
	Swal.fire({
		icon: 'success',
		title: '¡Gracias!',
		html: 'Tus datos ya fueron registrados con anterioridad, en breve uno de nuestros asesores se comunicará con usted.',
		onClose: () => {
			$.modal.close();
		}
	})
	*/

	/*  *********************************************************************  */

	
	$("#modal_certificado").modal({
		escapeClose: false,
		clickClose: false,
		showClose: false
	});
	
	/*

	$("#modal_coedem_2023").modal({
		escapeClose: false,
		clickClose: false,
		showClose: false
	});
	*/

	/*  *********************************************************************  */

	$('#ir_a_web').on('click', function (e) {

		$.modal.close();
		return false;

	});

	$('#btn_vamos_certificados').on('click', function (e) {

		$("#modal_certificado_2").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});

	});

	$('#btn_vamos_certificados_2').on('click', function (e) {

		$("#modal_certificado_3").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});

	});
	
	$('#btn_certificado_digital').on('click', function (e) {

		$("#modal_certificado_3_1").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});

	});

	$('#btn_buscar_ip_sorteo').on('click', function (e) {

		getIpClient();

		$("#modal_certificado_3_1_2").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});

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

	/* BUSCA CERTIFICADO 1 */

	$('#btn_solo_certificado_digital').on('click', function (e) {

		$("#modal_certificado_3_1_3").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});

	});

	$("#form-buscar-certificado").validate();

    $("#txt_dni_usuario").rules("add",{
    	required: true,
		number: true,
    	messages: {
    		required: "Completar campo",
			number: "Solo esta permitido números"
    	}
    });

	$('#btn_buscar_certificado').on('click',function(){
	
		if ($("#form-buscar-certificado").valid()) {

			buscar_certificado_dni($("#txt_dni_usuario").val());

        }/*else{

			alert("Ocurrio un error al consultar, refresca y vuelva a intentarlo...")
			location.reload();

		}*/

	});

	$('#btn_descargar_solo_certificados').on('click',function(){

		$("#modal_certificado_felicidades").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});
	
	});

	$('#btn_ok_final').on('click',function(){

		$("#modal_final").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});
	
	});


	function buscar_certificado_dni(dni){

		//var datper = $("#form-datper").serialize();
		//var origen = $("#t_origen").val();
		//var codigo = $("#txt_codigo").val();

		$.post(ruta+"index/buscar_certificado_dni","dni="+dni, function (rpta) {

			if(rpta == false) {

				$("#modal_finalizar").modal({
					escapeClose: false,
					clickClose: false,
					showClose: false
				});
				
			}else{

				//alert(rpta['cantidadCertificadosDisponibles'])

				$("#modal_certificado_3_1_4").modal({
					escapeClose: false,
					clickClose: false,
					showClose: false
				});
			
				$("#txt_disponibles_certificados").html("Tienes "+rpta['cantidadCertificadosDisponibles']+"/3 Certificados disponibles y <br> 0 Cartas de recomendación.")

				//alert(rpta['c1'])
				//$("#d_c1").val(rpta['c1']);

				if (rpta['c1'] != "") {
					var cert1 = "button_popup_3";
					var archivo1 = rpta['c1'];
				} else {
					var cert1 = "button_popup_4";
					var archivo1 = "#";
				}

				//alert(rpta['c1']+' ---- '+cert1)

				/*
				if (rpta['c2'] =! "false") {
					var cert2 = "button_popup_3";
				} else {
					var cert2 = "button_popup_4";
				}
				*/

				//alert(rpta['c3']);

				if (rpta['c3'] != "") {
					var cert3 = "button_popup_3";
					var target3 = "_blank";
					var archivo3 = rpta['c3'];
				} else {
					var cert3 = "button_popup_4";
					var target3 = "";
					var archivo3 = "#";
				}

				if (rpta['c4'] != "") {
					var cert4 = "button_popup_3";
					var target4 = "_blank";
					var archivo4 = rpta['c4'];
				} else {
					var cert4 = "button_popup_4";
					var target4 = "";
					var archivo4 = "#";
				}

				if (rpta['c5'] != "") {
					var cert5 = "button_popup_3";
					var target5 = "_blank";
					var archivo5 = rpta['c5'];
				} else {
					var cert5 = "button_popup_4";
					var target5 = "";
					var archivo5 = "#";
				}

				if (rpta['c6'] != "") {
					var cert6 = "button_popup_3";
					var target6 = "_blank";
					var archivo6 = rpta['c6'];
				} else {
					var cert6 = "button_popup_4";
					var target6 = "";
					var archivo6 = "#";
				}
				
				fila = '<div class="col-md-12 col-sm-12 col-xs-12">';
                fila += '<a href="'+archivo1+'" target="_blank" class="'+cert1+'" >Participante Estándar</a>';
                //fila += '<a href="#" class="'+cert2+'">Participante Destacado</a>';
                fila += '<a href="'+archivo3+'" target="'+target3+'" class="'+cert3+'" >Participante Destacado</a>';
                fila += '<a href="'+archivo4+'" target="'+target4+'" class="'+cert4+'" >Marketing Digital LimaTech</a>';
				//fila += '<a href="#" class="'+cert5+'">Comisión organizadora</a>';
				fila += '<a href="'+archivo5+'" target="'+target5+'" class="'+cert6+'" >Carta de Recomendación</a>';
                fila += '</div>';

				$("#contener_certificados_1").append(fila);

			}

		}, 'json');
	
	}

	$('#btn_cerrar_final').on('click', function (e) {

		location.reload();

	});

	$("#btn_descargar_solo_certificados").click(function (e) {

		$("#modal_certificado_felicidades").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});


		/*
		$("#modal_finalizar").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});
		*/

		/*

		$.post(ruta+"index/buscar_certificado_dni","dni="+$("#txt_dni_usuario").val(), function (rpta) {

			if(rpta == false) {

				$("#modal_finalizar").modal({
					escapeClose: false,
					clickClose: false,
					showClose: false
				});

			}else{
				if (rpta['c1'] != "") {
					window.open(rpta['c1'] , '_blank');
					//window.location.href = rpta['c1'];

				}
				if (rpta['c3'] != "") {
					window.open(rpta['c3'] , '_blank');
					//window.location.href = rpta['c3'];

				}
				if (rpta['c4'] != "") {
					window.open(rpta['c4'] , '_blank');
					//window.location.href = rpta['c4'];

				}
				if (rpta['c5'] != "") {
					window.open(rpta['c5'] , '_blank');
					//window.location.href = rpta['c5'];
					
				}
			}

		}, 'json');

		*/

	});
	
	function buscar_certificado_dni_exportar(dni){
		//var datper = $("#form-datper").serialize();
		//var origen = $("#t_origen").val();
		//var codigo = $("#txt_codigo").val();
	}
	
	$('#btn_buscar_ip_sorteo_pack').on('click', function (e) {

		$("#modal_certificado_pack").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});

	});

	$('#btn_lo_quiero').on('click', function (e) {

		$("#modal_certificado_pack").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});

	});
	
	$('#btn_descargar_solo_certificados_pack').on('click', function (e) {

		$("#modal_certificado_pack").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});

	});

	$('#btn_certificado_pack').on('click', function (e) {

		$("#modal_certificado_pack").modal({
			escapeClose: false,
			clickClose: false,
			showClose: false
		});

	});
	
	/* BUSCA CERTIFICADO 2 */

	$("#form-buscar-certificado-2").validate();

    $("#txt_dni_usuario_pack").rules("add",{
    	required: true,
		number: true,
    	messages: {
    		required: "Completar campo",
			number: "Solo esta permitido números"
    	}
    });

	$('#btn_buscar_certificado_2').on('click',function(){

		if ($("#form-buscar-certificado-2").valid()) {

			buscar_certificado_dni_pack($("#txt_dni_usuario_pack").val());

			/*
			$("#modal_descargar_certificado_pack").modal({
				escapeClose: false,
				clickClose: false,
				showClose: false
			});
			*/

        }

	});

	function buscar_certificado_dni_pack(dni){

		//var datper = $("#form-datper").serialize();
		//var origen = $("#t_origen").val();
		//var codigo = $("#txt_codigo").val();

		$.post(ruta+"index/buscar_certificado_dni","dni="+dni, function (rpta) {

			if(rpta == false) {

				$("#modal_finalizar").modal({
					escapeClose: false,
					clickClose: false,
					showClose: false
				});

			}else{

				window.location.href = ruta+"comprar/pack/"+$("#txt_dni_usuario_pack").val();

			}

		}, 'json');

	}

	$('#btn_comprar_pack').on('click',function(){

		//window.location.href = ruta+"comprar/pack/"+$("#txt_dni_usuario_pack").val();

	});
	


















});