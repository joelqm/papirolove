$(document).on("ready",function() {
	//iniciarTabla();

	var URLactual = window.location.pathname;
	/* /florever_solinsoft/acl/rolesUsuario/11111111 */
	var raizURL = URLactual.split('/');


	var habilitar = function(valor, idpermiso) {
		$.post("/"+raizURL[1]+"/acl/habilitar", "valor=" + valor + "&idpermiso=" + idpermiso + "&idrole=" + $("#idrole").val(), function(datos)
		{

		}, 'json');
	}

	var denegar = function(valor, idpermiso) {
		$.post("/"+raizURL[1]+"/acl/denegar", "valor=" + valor + "&idpermiso=" + idpermiso + "&idrole=" + $("#idrole").val(), function(datos)
		{

		}, 'json');
	}

	var ignorar = function(valor, idpermiso) {
		$.post("/"+raizURL[1]+"/acl/ignorar", "valor=" + valor + "&idpermiso=" + idpermiso + "&idrole=" + $("#idrole").val(), function(datos)
		{

		}, 'json');
	}

	function comprobarValor(campo, valor) {
		var clase = "." + campo;
		$("." + campo).each(function() {
			if($(this).val() == valor) {
				$(this).attr("checked", "checked");
			}
		});
	}

	var mostrarPermisos = function(id) {
		$("#tb_permisos tbody").html("");
		var _valorHab = "";
		var _valorDen = "";
		var _valorIgn = "";
		$.post('/'+raizURL[1]+'/acl/verPermisos', 'id=' + id, function(datos) {
			for(var x = 0; x < datos.length; x++) {
				comprobarValor(datos[x].key, datos[x].valor);
				/*if(datos[x].key == 'add_con') {
					$(".add_con").each(function() {
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}
				
				if(datos[x].key == 'edit_con') {
					$(".edit_con").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'del_con') {
					$(".del_con").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'ing_con') {
					$(".ing_con").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'add_serv') {
					$(".add_serv").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'edit_serv') {
					$(".edit_serv").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'del_serv') {
					$(".del_serv").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'add_syc') {
					$(".add_syc").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'add_syr') {
					$(".add_syr").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'ing_serv') {
					$(".ing_serv").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'add_req') {
					$(".add_req").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'edit_req') {
					$(".edit_req").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'del_req') {
					$(".del_req").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'ing_req') {
					$(".ing_req").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'add_cot') {
					$(".add_cot").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'ver_cot') {
					$(".ver_cot").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'ing_cot') {
					$(".ing_cot").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'add_pag') {
					$(".add_pag").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'ver_pag') {
					$(".ver_pag").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'ver_liq') {
					$(".ver_liq").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'add_user') {
					$(".add_user").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'ed_per_r') {
					$(".ed_per_r").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}

				if(datos[x].key == 'ed_per_u') {
					$(".ed_per_u").each(function()
					{
						if($(this).val() == datos[x].valor)
							$(this).attr("checked", "checked");
					});
				}*/
			}

		}, 'json');
	}

	mostrarPermisos($("#idrole").val());

	/*$(".gPerm").on("click",function() {
		var clase = $(this).attr("class");
		var cl = clase.split(" ");
		$("#idrole").val("");
		$("#idrole").val(cl[1]);
	});*/

	$("body").on("click",".habilitar", function() {
		habilitar($(this).val(), $(this).attr("name"));
	});

	$("body").on("click",".denegar", function()
	{
		denegar($(this).val(), $(this).attr("name"));
	});

	$("body").on("click",".ignorar", function()
	{
		ignorar($(this).val(), $(this).attr("name"));
	});

	/*$("body").on("click", ".editar", function()
	{
		cargarDatos($(this).attr("id"));
	});*/

	/*$("#btnActualizar").on("click", function()
	{
		actualizar($("#e_idrole").val(), $("#e_descripcion").val());
	});*/

	function iniciarTabla(){
        /*return $("#tbData").dataTable({
            //"destroy": true
        });*/
    }
});