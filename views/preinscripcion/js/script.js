$(function () {

	let ruta = $('#root').val();
	let enviado = false; // bandera anti-doble-click

	$('#btn_enviar').on('click', function () {

		if (enviado) return; // bloqueo total

		$('.error-text').hide().text('');

		let btn = $(this);
		let textoOriginal = btn.html();

		// BLOQUEO VISUAL + FUNCIONAL
		btn.prop('disabled', true)
			.html('Enviando...')
			.css('cursor', 'not-allowed');

		enviado = true;

		$.ajax({
			url: ruta + 'preinscripcion/enviar/',
			type: 'POST',
			data: $('#frm_preinscripcion').serialize(),
			dataType: 'json'
		})
			.done(function (res) {

				if (res.status) {

					$('#frm_preinscripcion')[0].reset();

					Swal.fire({
						icon: 'success',
						/*title: 'Registro exitoso',*/
						html: res.msg, // 👈 AQUÍ ESTÁ LA CLAVE
						showCancelButton: true,
						confirmButtonText: '👉 Unirme al grupo privado de WhatsApp',
						cancelButtonText: 'Cerrar',
						confirmButtonColor: '#25D366',
						cancelButtonColor: '#6c757d'
					}).then((result) => {
						if (result.isConfirmed) {
							window.open(
								'https://chat.whatsapp.com/G3qukXlQUUG0nFLyAEY5DD',
								'_blank'
							);
						}
					});

					// 🔒 Se queda bloqueado (evita reenvío)
					btn.html('Enviado ✔');

				} else if (res.errors) {

					enviado = false; // permitir corregir

					btn.prop('disabled', false)
						.html(textoOriginal)
						.css('cursor', 'pointer');

					$.each(res.errors, function (campo, mensaje) {
						$('#error_' + campo).text(mensaje).show();
					});

				} else {

					enviado = false;

					btn.prop('disabled', false)
						.html(textoOriginal)
						.css('cursor', 'pointer');

					Swal.fire('Error', 'No se pudo procesar la solicitud', 'error');
				}
			})
			.fail(function () {

				enviado = false;

				btn.prop('disabled', false)
					.html(textoOriginal)
					.css('cursor', 'pointer');

				Swal.fire('Error', 'El servidor no respondió', 'error');
			});

	});
});
