$(function () {

    var code = $("#resultPaymentCode").val();
    var messageText = $("#resultPayment").val();

    var title = '';
    var message = '';

    switch (code) {
        case '01':
            title = '¡Ocurrió un error!';
            message = messageText;
            break;
        case '00':
            title = '¡Muchas gracias!';
            message = 'Tu mensaje y obsequio para Sofia y Gabriel han sido enviados';
            break;
        case '2300':
            title = '¡Pedido cancelado!';
            message = messageText;
            break;
        default:
            title = 'Estado desconocido';
            message = 'No pudimos determinar el resultado del proceso.';
    }

    // Inserta los textos en los elementos del HTML ya existente
    $(".section-title").text(title);
    $(".section-message").text(message);
});