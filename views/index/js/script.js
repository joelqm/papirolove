$(function () {

	var ruta = $("#root").val();

	/*
	$('.tab-coedem').on('dblclick', function() { 

		// $('#carousel-coedem-24-2').flickity('resize');

		var  carousel2 = $('#carousel-coedem-24-2').flickity();

		carousel2.toggleClass('is-expanded')
		.flickity('resize');

	});
	*/

	$("#one").click(function(e) {
		var  carousel = $('.carousel-coedem-24-1').flickity();
		carousel.toggleClass('is-expanded')
		.flickity('resize');
	});

	$("#two").click(function(e) {
		var  carousel = $('.carousel-coedem-24-2').flickity();
		carousel.toggleClass('is-expanded')
		.flickity('resize');
	});

	$("#three").click(function(e) {
		var  carousel = $('.carousel-coedem-24-3').flickity();
		carousel.toggleClass('is-expanded')
		.flickity('resize');
	});

	$("#four").click(function(e) {
		var  carousel = $('.carousel-coedem-24-4').flickity();
		carousel.toggleClass('is-expanded')
		.flickity('resize');
	});

	$('.carousel-coedem-24-1').flickity({
		// options
		cellAlign: 'left',
		// contain: true,
		//groupCells: 1,
		autoPlay: true,
        // setGallerySize: true,
        wrapAround: true,
        imagesLoaded: true,
		fullscreen: true,
		lazyLoad: 1,
		adaptiveHeight: true,
		contain: true,
  		pageDots: false
	});

	$('.carousel-coedem-24-2').flickity({
		// options
		cellAlign: 'left',
		// contain: true,
		//groupCells: 1,
		autoPlay: true,
        // setGallerySize: true,
        wrapAround: true,
        imagesLoaded: true,
		fullscreen: true,
		lazyLoad: 1,
		adaptiveHeight: true,
		contain: true,
  		pageDots: false
	});

	$('.carousel-coedem-24-3').flickity({
		// options
		cellAlign: 'left',
		// contain: true,
		//groupCells: 1,
		autoPlay: true,
        // setGallerySize: true,
        wrapAround: true,
        imagesLoaded: true,
		fullscreen: true,
		lazyLoad: 1,
		adaptiveHeight: true,
		contain: true,
  		pageDots: false
	});

	$('.carousel-coedem-24-4').flickity({
		// options
		cellAlign: 'left',
		// contain: true,
		//groupCells: 1,
		autoPlay: true,
        // setGallerySize: true,
        wrapAround: true,
        imagesLoaded: true,
		fullscreen: true,
		lazyLoad: 1,
		adaptiveHeight: true,
		contain: true,
  		pageDots: false
	});


	$('.carousel-comision').flickity({
		// options
		cellAlign: 'left',
		// contain: true,
		groupCells: 2,
		autoPlay: true,
        setGallerySize: true,
        wrapAround: true,
        imagesLoaded: true,
		fullscreen: true,
		lazyLoad: 1,
		adaptiveHeight: true,
		contain: true,
  		pageDots: false
	});
	
	$(".custom-owl-slider").owlCarousel({
		items:1,
		autoplay:true,
		autoplayTimeout:4000,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		loop:true,
		margin:0,
		//responsiveClass:true,
		nav:true,
	});

	// custom navigation for slider
	var ows = $('.custom-owl-slider');
	var arr = $('.owl-slider-nav');
	var doc_height = $(window).innerHeight();
	arr.css("top", (doc_height / 2) - 25);
	ows.owlCarousel();
	// Custom Navigation Events
	arr.find(".next").on("click", function() {
		ows.trigger('next.owl.carousel');
	});
	arr.find(".prev").on("click", function() {
		ows.trigger('prev.owl.carousel');
	});
	
	$(".owl-slide-wrapper").on("mouseenter", function() {
		arr.find(".next").css("right","40px");
		arr.find(".prev").css("left","40px");
	}).on("mouseleave", function() {
		arr.find(".next").css("right","-50px");
		arr.find(".prev").css("left","-50px");
	})

    generarAleatorioOrden();

	/*
	$("#modal_promociones").modal('show');

	$("#btn_cerrar_modal_promociones").click(function(e) {
		$("#modal_promociones").modal('hide');
	});
	*/

	$("#btn_promociones").click(function(e) {
		url = "https://api.whatsapp.com/send?phone=51987166000&text=Hola%2C%20deseo%20recibir%20mas%20informaci%C3%B3n%20de%20las%20promociones%20COEDEM%202024%20%F0%9F%98%84";
		$(location).attr('href',url);
	});

	/* TERMINOS Y CONDICIONES */

	$("#btn_tyc").click(function(e) {
		$("#modal_tyc").modal('show');
	});

	$("#btn_cerrar_modal_tyc").click(function(e) {
		$("#modal_tyc").modal('hide');
	});

	/* REGISTRO DE PRE-INSCRITOS */

    $('.frm_validatejs').validate({
        ignore: 'input[type=hidden], .select2-search__field, :not(:visible)',
        errorClass: 'validation-invalid-label',
        successClass: 'validation-valid-label',
        validClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        errorPlacement: function(error, element) {
            if (element.parents().hasClass('form-check')) {
                error.appendTo(element.parents('.form-check').parent());
            }
            else if (element.parents().hasClass('form-group-feedback') || element.hasClass('select2-hidden-accessible')) {
                error.appendTo(element.parent());
            }
            else if (element.parent().is('.uniform-uploader, .uniform-select') || element.parents().hasClass('input-group')) {
                error.appendTo(element.parent().parent());
            }
            else {
                error.insertAfter(element);
            }
        }
    });


	$("#form-pre-registro").validate();

	$("#txt_nombre_registro").rules("add",{
    	required: true,
    	messages: {
    		required: "Completar campo..."
    	}
    });

    $("#txt_celular_registro").rules("add",{
    	required: true,
		number: true,
    	messages: {
    		required: "Completar campo...",
			number: "Solo esta permitido números..."
    	}
    });

	$("#btn_atencion_registro").click(function(e) {
		
		if ($("#form-pre-registro").valid()) {

			let datos = $("#form-pre-registro").serialize();

			$.post("index/guardarPreRegistro", datos, function (rpta) {

				if (rpta == true || rpta == "true") {

					$("#txt_nombre_registro").val("");
					$("#txt_celular_registro").val("");
					$("#modal_promociones").modal("hide");

					alert("Tus datos fueron registrados con éxito...")

				}else{

					alert("Ocurrio un error al registrar la orden, por favor intentar nuevamente...")

				}

				//alert(rpta);
		
			}, 'json');
			
		}else{

			alert("Falta completar algunos campos...")

		}

	});
    
	/* ******************************************************** */

    function generarAleatorioOrden(){

        $.post('index/generarAleatorioOrden', function(respuesta){

            $("#hdn_codigo").val(respuesta);

        }, 'json');

    }

	$("#btn_entrada_individual").click(function(e) {

		e.preventDefault();

		// $("#panel-botones-principales").hide(200);
		// $("#panel-dni").show(200);

		$("#modal-texto-principal").hide(200);
		$("#panel-botones-principales").hide(200);
		$("#panel-pregunta-comision").show(200);

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
		$(".totalPagoPre").html("S/. 167.00");
		$("#hdn_total").val(167);

	});

	/* VALIDACION FORMULARIO DE INDIVIDUAL  */

	$("#frm_registro_individual").validate();

	$("#txt_dni_individual").rules("add",{
    	required: true,
		number: true,
    	messages: {
    		required: "Completar campo...",
			number: "Solo esta permitido números..."
    	}
    });

	$("#txt_nombre").rules("add",{
    	required: true,
    	messages: {
    		required: "Completar campo..."
    	}
    });

	$("#txt_apepat").rules("add",{
    	required: true,
    	messages: {
    		required: "Completar campo..."
    	}
    });

	$("#txt_apemat").rules("add",{
    	required: true,
    	messages: {
    		required: "Completar campo..."
    	}
    });

    $("#txt_celular").rules("add",{
    	required: true,
		number: true,
    	messages: {
    		required: "Completar campo...",
			number: "Solo esta permitido números..."
    	}
    });
	
	$("#txt_corele").rules("add",{
    	required: true,
    	messages: {
    		required: "Completar campo..."
    	}
    });

	$("#btn_registrar_datos").click(function(e) {

		e.preventDefault();

		if ($("#frm_registro_individual").valid()) {
			guardarOrdenIndividual($("#txt_nombre").val(),$("#txt_apepat").val(),$("#txt_apemat").val(),$("#txt_celular").val(),$("#txt_corele").val(),$("#txt_dni_individual").val());
		}else{
			alert("Falta completar algunos campos...")
		}

		/*
		if ($("#txt_nombre").val() == "" || $("#txt_apepat").val() == "" || $("#txt_apemat").val() == "" || $("#txt_celular").val() == "" || $("#txt_corele").val() == "") {
			alert("Es necesario registrar todos los campos")
		}else{
			guardarOrdenIndividual($("#txt_nombre").val(),$("#txt_apepat").val(),$("#txt_apemat").val(),$("#txt_celular").val(),$("#txt_corele").val(),$("#txt_dni").val());
		}
		*/

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



	/* VALIDACION FORMULARIO GRUPO COEDEM */
	
	/*
    $('.frm_validatejs').validate({
        ignore: 'input[type=hidden], .select2-search__field, :not(:visible)',
        errorClass: 'validation-invalid-label',
        successClass: 'validation-valid-label',
        validClass: 'validation-valid-label',
        highlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function(element, errorClass) {
            $(element).removeClass(errorClass);
        },
        errorPlacement: function(error, element) {
            if (element.parents().hasClass('form-check')) {
                error.appendTo(element.parents('.form-check').parent());
            }
            else if (element.parents().hasClass('form-group-feedback') || element.hasClass('select2-hidden-accessible')) {
                error.appendTo(element.parent());
            }
            else if (element.parent().is('.uniform-uploader, .uniform-select') || element.parents().hasClass('input-group')) {
                error.appendTo(element.parent().parent());
            }
            else {
                error.insertAfter(element);
            }
        }
    });
	*/

	$("#frm_datos_lider").validate();

	$("#txt_dni_lider").rules("add",{
    	required: true,
		number: true,
    	messages: {
    		required: "Completar campo...",
			number: "Solo esta permitido números..."
    	}
    });

    $("#txt_nombre_lider").rules("add",{
    	required: true,
    	messages: {
    		required: "Completar campo..."
    	}
    });

	$("#txt_apepat_lider").rules("add",{
    	required: true,
    	messages: {
    		required: "Completar campo..."
    	}
    });

	$("#txt_apemat_lider").rules("add",{
    	required: true,
    	messages: {
    		required: "Completar campo..."
    	}
    });

	$("#txt_celular_lider").rules("add",{
    	required: true,
    	messages: {
    		required: "Completar campo..."
    	}
    });

	$("#txt_corele_lider").rules("add",{
    	required: true,
    	messages: {
    		required: "Completar campo..."
    	}
    });

	$("#btn_continuar_grupo").click(function(e) {
		e.preventDefault();

		//alert($("#slc_cantidad_grupo").val());

		/*
		if ( $("#slc_cantidad_grupo").val() == "" || $("#txt_dni_lider").val() == "" || $("#txt_nombre_lider").val() == "" || $("#txt_apepat_lider").val() == "" || $("#txt_apemat_lider").val() == "" || $("#txt_celular_lider").val() == "" || $("#txt_corele_lider").val() == "") {
			alert("Es necesario registrar todos los campos...");
		}else{
			guardarOrdenGrupal($("#slc_cantidad_grupo").val(),$("#hdn_codigo").val());	
		}
		*/

		if ($("#frm_datos_lider").valid()) {

			guardarOrdenGrupal($("#slc_cantidad_grupo").val(),$("#hdn_codigo").val());

		}else{

			alert("Es necesario registrar todos los campos...");

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

	/*
	$("#btn-entrada").click(function(e) {
		$("#form").modal("show");
	});
	*/

	$('.btn_cerrefres').click(function(e) {
		location.reload();
	});








































	/* CERTIFICADOS */

	$("#modal_certificado").modal("show");

	$('.clock-class-certificate').countdown('2024/07/25').on('update.countdown', function(event) {
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

	$('#btn_seguir_navegando_2').click(function(e) {

		//alert("asd")
		location.reload();
		// $("#modal_certificado").modal("hide");

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

		$.post(ruta+"index/buscar_cer_dni_24","dni="+dni, function (rpta) {

			if(rpta == false) {

				// alert("Ingresa un DNI válido...");
				
				$("#modal_c1_cuatro").modal("hide");
				$("#modal_error_dni").modal("show");

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
					fila += '<a href="'+rpta['c1']+'" target="_blank" class="button_popup_3" >Certificado de Participante UCSM</a>';
				}else{
					fila += '<a href="#" class="button_popup_4" >Certificado de Participante UCSM (No disponbible)</a>';
				}

				if (rpta['c2'] != 'false') {
					fila += '<a href="'+rpta['c2']+'" target="_blank" class="button_popup_3" >Certificado de Líderes Estrategas</a>';
				}else{
					fila += '<a href="#" class="button_popup_4" >Certificado de Líderes Estrategas (No disponbible)</a>';
				}

                if (rpta['c3'] != 'false') {
					fila += '<a href="'+rpta['c3']+'" target="_blank" class="button_popup_3" >Certificado de Líderes Emprendedores</a>';
				}else{
					fila += '<a href="#" class="button_popup_4" >Certificado de Líderes Emprendedores (No disponbible)</a>';
				}

				if (rpta['c4'] != 'false') {
					fila += '<a href="'+rpta['c4']+'" target="_blank" class="button_popup_3" >Certificado de Líderes Creativos</a>';
				}else{
					fila += '<a href="#" class="button_popup_4" >Certificado de Líderes Creativos (No disponbible)</a>';
				}

				if (rpta['c5'] != 'false') {
					fila += '<a href="'+rpta['c5']+'" target="_blank" class="button_popup_3" >Carta de recomendación</a>';
				}else{
					fila += '<a href="#" class="button_popup_4" >Carta de recomendación (No disponbible)</a>';
				}

				if (rpta['c6'] != 'false') {
					fila += '<a href="'+rpta['c6']+'" target="_blank" class="button_popup_3" >Certificado de Comisión Organizadora</a>';
				}

				/*
				if (rpta['c7'] != 'false') {
					fila += '<a href="'+rpta['c7']+'" target="_blank" class="button_popup_3" >Carta de Recomendación</a>';
				}
					*/

				$("#txt_nombre_cp").val(rpta['nombre']);

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
		
		$("#modal_c1_cert").modal("hide");
		$("#modal_c2_uno").modal("show");

		$("#hdn_pretot").val(2);

		//redcercom();

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

		$.post(ruta+"index/buscar_cer_dni_24","dni="+dni, function (rpta) {

			if(rpta == false) {

				//alert("Ingresa un DNI válido...");
				$("#txt_dni_usu_c2").val("");

				$("#modal_c2_uno").modal("hide");
				$("#modal_error_dni").modal("show");

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
				fila += '<a href="#" class="button_popup_3" >Certificado de Lideres Emprendedores</a>';
				fila += '<a href="#" class="button_popup_3" >Certificado de Lideres Creativos</a>';

				// if (rpta['c5'] != 'false') {
				// 	fila += '<a href="#" class="button_popup_3" >Certificado de Miembro De La Comisión Organizadora</a>';
				// }

				if (rpta['c6'] != 'false') {
					fila += '<a href="#" class="button_popup_3" >Certificado de Comisión Organizadora</a>';
				}

				fila += '<a href="#" class="button_popup_3" >Carta de Recomendación</a>';
				fila += '</div>';

				$(".contener_certificados_2").append(fila);

				$("#txt_nombre_cp").val(rpta['nombre'])

			}

		}, 'json');

	}

	$('#btn_c2_cert').click(function(e) {

		// window.location.href = ruta+"comprar/cer/"+$("#hdn_curso_ad").val()+"/"+$("#txt_dni_usu_c2").val()+"/"+$("#hdn_pretot").val();

		$("#txt_dni_cp").val($("#txt_dni_usu_c2").val())

		if ($("#hdn_curso_ad").val() == 1) {
			// SIN CURSO	
			var precioCurso = 0;
			var nombreCurso = "";

		}else{
			// CON CURSO
			var precioCurso = 19.90;
			var nombreCurso = "<br/> + CURSO PROGRAMA MARKA (DIEGO POLAR)"
		}

		if ($("#hdn_pretot").val() == 1) {
			var precioFinal = 29.90;
		} else if ($("#hdn_pretot").val() == 2){
			var precioFinal = 39.90;
		} else {
			var precioFinal = 39.90;
		}

		var precioMostrar = precioFinal + precioCurso;

		$(".totalPagoTotalCer").html("S/. "+precioMostrar+"0");
		$("#hdn_totalPagoTotalCer").val(precioMostrar);

		$(".nombreTotalPrecio").html("CERTIFICADOS DIGITALES <br/> + CERTIFICADOS FÍSICOS <br/> + CARTA DE RECOMENDACIÓN "+nombreCurso);
		

		$("#modal_c2_cert").modal("hide");
		$("#modal_confirmar_pago").modal("show");

	});

	$('#btn_registrar_solicitud_certificados').click(function(e) {

		$.post(ruta+"index/guardarOrdenEntradas","dni="+$("#txt_dni_cp").val()+"&curso="+$("#hdn_curso_ad").val()+"&pretot="+$("#hdn_pretot").val()+"&codigo="+$("#hdn_codigo").val()+"&celular="+$("#txt_celular_cp").val()+"&corele="+$("#txt_corele_cp").val()+"&sede="+$("#slc_sede_cp").val()+"&totalPagoTotalCer="+$("#hdn_totalPagoTotalCer").val()+"&nombre_cp="+$("#txt_nombre_cp").val(), function (rpta) {

			if(rpta == false) {

				alert("Ocurrió un error al registrar la solicitud, por favor comunícate al número 987166000, para verificar tu solicitud.")

				location.reload();

			}else{

				alert("¡TU SOLICITUD SE REGISTRÓ CON ÉXITO!, no te olvides de enviar el pantallazo de tu TRANSFERENCIA, YAPE O FOTO DEL VOUCHER DEL DEPÓSITO BANCARIO al número 987166000 con tu nombre completo, Una vez que hayas enviado tu pantallazo o voucher de depósito, una de nuestras asesoras validará tu pago y te confirmará el día para recoger tus certificados físicos.")

				location.reload();

			}

		}, 'json');

	});

	

	$('#btn_cerrar_error_dni').click(function(e) {
		location.reload();
	});

	






});