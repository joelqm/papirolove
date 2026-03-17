$(function() {

    var ruta = $("#root").val();

    /*
    var data = [
        [
            "Tiger Nixon",
            "System Architect",
            "Edinburgh",
            "5421",
            "2011/04/25",
            "$3,120"
        ],
        [
            "Garrett Winters",
            "Director",
            "Edinburgh",
            "8422",
            "2011/07/25",
            "$5,300"
        ]
    ];

    $('#myTable').DataTable( {
        data: data
    } );
    */

    // iniciarTabla();

    function iniciarTabla(tipbus = null,value = null) {

        // " + ver + "  " + eli + " " + print + " " + track + " " + option +"

        var ver = "<a href='#' class='badge badge-primary badge-pill' id='btn_ver' >Ver mensaje</a>";

        // https://datatables.net/forums/discussion/66814/searching-input-field-filter-in-datatables-not-work-for-1-10
        var tabla = $("#tb_data").DataTable({
            "dom": 'frltp',
            "processing": true,
            "serverSide": true,
            "retrieve": true,
            "responsive": true,
            'pageLength': 25,
            "order": [[0, 'desc']],
            "ajax": ruta+"richiymili/mostrarListaRegistros/",
            "columnDefs": [
                { responsivePriority: 1, targets: 1 },
                //{ responsivePriority: 2, targets: -1 },
                {
                "targets": -1,
                "data": null,
                "defaultContent": "<div class='list-icons'>" + ver + "</div>"
                }
            ],
            "language": {
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }

            }

        });

    }
   
    async function getGifts(id) {
        try {
            const response = await $.ajax({
                type: "POST",
                url: ruta + "obsequio/obtenerObsequiosRecibidos",
                data: { id },
                dataType: "json" // Asegúrate de recibir la respuesta como JSON
            });
    
            if (response.length === 0) {
                return `<p>No hay obsequios en este mensaje</p>`;
            }
    
            // Genera el HTML para la tabla de regalos
            let tablaRegalos = `
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>item</th>
                                <th>units</th>
                                <th>Valor</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
            `;
    
            response.forEach((regalo) => {
                tablaRegalos += `
                    <tr>
                        <td>${regalo.nombre}</td>
                        <td>${regalo.cantidad}</td>
                        <td>S/.${regalo.valorUnitario}</td>
                        <td>S/.${regalo.valortotal}</td>
                    </tr>
                `;
            });
    
            tablaRegalos += `
                        </tbody>
                    </table>
                </div>
            `;
    
            return tablaRegalos;
        } catch (error) {
            console.error("Error al obtener los obsequios: ", error);
            return "<p>Hubo un error al cargar los obsequios.</p>";
        }
    }
    
    $("#tb_data").on("click", "#btn_ver", async function() {
        const tabla = $("#tb_data").DataTable();
        const data = tabla.row($(this).parents('tr')).data();
        if (data == undefined) {
            tabla = $("#tb_data").DataTable();
            data = tabla.row($(this).parents('tr')).data();
        }
    
        const tableRowId = $(this).closest('tr').attr('id').split('_')[1];
        const giftsHtml = await getGifts(tableRowId); // Espera el HTML de la tabla
    
        bootbox.dialog({
            title: " ",
            message: `
                <div class="row" id="contenedor_modal_sino">
                    <div class="col-lg-12">
                        <div class="neela-style text-center" style="padding: 30px 30px;">
                            <h3 class="section-title" style="margin: 0px !important;">${data[1]}</h3>
                            <p>${data[7]}</p>
                            <div id="giftsContainer">${giftsHtml}</div>
                        </div>
                    </div>
                </div>
            `,
            size: 'medium',
            className: 'rubberBand animated',
            buttons: {
                ok: {
                    label: "Cerrar",
                    className: 'colorone',
                    callback: function() {
                        bootbox.hideAll();
                    }
                }
            }
        });
    
        $('.modal-footer').addClass('text-center');
        $(".modal-footer").css({ "display": "block" });
        $(".modal-header").hide();
    });
    





    /*
    switch($("#resultPaymentCode").val()){
        case '01':
            title = '¡Ocurrió un error!';
            message = $("#resultPayment").val();
            resultdiv(title,message);
        break;
        case '00':
            title = '¡Muchas gracias!';
            message = 'Tu mensaje y tu obsequio, sido enviados y registrados.';
            resultdiv(title,message);
        break;
        case '2300':
            title = '¡Pedido cancelado!';
            message = $("#resultPayment").val();
            resultdiv(title,message);
        break;
    }

    function resultdiv(title,message){

		bootbox.dialog({
			title: " ",
			message: '<div class="row"><div class="col-lg-12">'+ //offset-lg-1 col-xl-8 offset-xl-2  col-xxl-6 offset-xxl-3
			'<div class="form-wrapper neela-style text-center" style="padding: 0px 10px;margin-bottom: 0px;">'+
			'<h2 class="section-title" style="margin: 0 auto 20px;">'+title+'</h2>'+
			'<p class="cta">'+message+'</p>'+
			'</div>'+
			'</div>'+
			'</div>',
			size: 'medium',
			className: 'rubberBand animated',
			buttons: {
				ok: {
					label: "Cerrar",
					className: 'colorone',
					callback: function(){
						//location.reload();
						window.location.href = ruta+'
                        
                        
                        /';
					}
				}
			}
		});

		$('.modal-footer').addClass('text-center');
		$(".modal-footer").css({"display": "block"});
		$(".modal-header").hide();

        // bootbox.alert({
        //     title: " ",
        //     message: '<div class="container">'+
        //     '<div class="row text-center" style="align-items: center;">'+
        //     '<div class="col-md-12 blog-main">'+
        //     '<img class="figure-img img-fluid" src="https://floreverperu.com/views/layout/bootstrap/img/logo-icono-floreverperu.png" width="110px">'+
        //     '</div>'+
        //     '<div class="col-md-12 blog-main text-center">'+
        //     '<span class="card-title tit_flo_25">'+title+'</span>'+
        //     '<p class="lead tit_flo_14">'+
        //     message+
        //     '</p>'+
        //     '</div>'+
        //     '</div>'+
        //     '</div>',
        //     size: 'medium',
        //     className: 'rubberBand animated',
        //     callback: function() {
        //         window.location.href = ruta+'tienda/';
        //     }
        // });

    }

    */

});