$(function(){
	renderCartTable();
	var ruta = $("#root").val();

	preloader_fast();

	function preloader_fast() {
		var isLoaded = setInterval(function () {
			if (/loaded|complete/.test(document.readyState)) {
				clearInterval(isLoaded);
				$("#section_form_mensaje").show();
				$("#preloader").fadeOut(1000);
			}
		}, 10);
	}

	$('.back-button').on('click',function () {

            window.history.back();
   
	})

	const cachedValue = localStorage.getItem('cachedHiddenInput');
    console.log('Valor guardado en cache:', cachedValue);
});

function renderCartTable() {
	const cart = new Map(Object.entries(JSON.parse(localStorage.getItem('cart')) || {}));
	console.log('cart', cart);
	const $tbody = $('.table-container table tbody');
	$tbody.empty(); // Limpiar la tabla antes de llenarla

	cart.forEach((entry, obsequioId) => {
		const item = entry[1]; // Obtener el objeto { id, price, name, quantity }

		const $row = $('<tr>');

		const $cantidadCell = $('<td>').text(item.quantity);
		$row.append($cantidadCell);

		const $itemCell = $('<td>').text(item.name);
		$row.append($itemCell);

		const $valorCell = $('<td>').text("S/. " + Number(item.price) * Number(item.quantity));
		$row.append($valorCell);

		$tbody.append($row);
	});
}