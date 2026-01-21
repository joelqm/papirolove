$(document).on("ready",function() {
	$("#editar").hide();
	$("#nuevo").hide();

	var URLactual = window.location.pathname;
	/* /florever_solinsoft/acl/rolesUsuario/11111111 */
	var raizURL = URLactual.split('/');

	
	var guardar = function()
	{
		var campos = $("#frm_campos").serialize();
		$.post("/"+raizURL[1]+"/acl/guardar", campos, function(datos)
		{
			if(datos == true)
			{
				deshabilitar();
				$("#msjOk").modal('show');
				setTimeout(function(){
					$("#msjOk").modal('hide').fadeOut(1500);
				},1000);
			} else {
				$("#msjErr").modal('show');
				setTimeout(function()
				{
					$("#msjErr").modal('hide').fadeOut(1500);
				},1000);
			}
		}, 'json');
	}

	function deshabilitar()
	{
		$("#nombre").attr("disabled", "true");
		$("#app").attr("disabled", "true");
		$("#apm").attr("disabled", "true");
		$("#dni").attr("disabled", "true");
		$("#rol").attr("disabled", "true");
		$("#nuevo").show(300);
		$("#guardar").hide(300);
	}

	function habilitar()
	{
		$("#nombre").removeAttr("disabled", "false");
		$("#app").removeAttr("disabled", "false");
		$("#apm").removeAttr("disabled", "false");
		$("#dni").removeAttr("disabled", "false");
		$("#rol").removeAttr("disabled", "false");
		$("#nombre").val("");
		$("#app").val("");
		$("#apm").val("");
		$("#dni").val("");
		$("#rol").select2("val",-1);
		$("#nuevo").hide(300);
		$("#guardar").show(300);
	}

	$("#guardar").on("click", function()
	{
		guardar();
	});

	$("#nuevo").on("click", function()
	{
		habilitar();
	});
});