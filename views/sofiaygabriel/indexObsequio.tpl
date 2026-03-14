<style>
    body {
        visibility: hidden;
    }
</style>
<script>
    window.addEventListener('load', function () {
        document.body.style.visibility = 'visible';
    });
</script>

<section id="section_form_mensaje" class="section-bg-color" style="display: none;">
    <!-- Notification Bar -->
    <div class="notification-bar">
        <div class="notification-content">
            <span class="heart-icon">♥</span> Deslízate hacia abajo y presiona
            el botón <strong>Obsequiar y enviar</strong> para completar el
            registro y hacer llegar tu presente a Sofia y Gabriel
        </div>
    </div>

    <div class="main-container">
        <!-- Gift Form Card -->
        <div class="gift-card">
            <div class="card-header">
                <span class="font-titulo-obsequio">Sofia y Gabriel</span>
            </div>

            <div class="card-body">
                <!-- Stepper -->
                <!-- <button class="back-button">
                    &lt; Editar
                </button> -->

                <!-- Gift Message -->
                <div class="message-container">
                    <h3 class="section-title">Tu mensaje para los novios</h3>
                    <div class="message-content">
                        <span class="sender-name">{$nombre}</span>
                        <p class="message-text">"{$mensaje}"</p>
                    </div>
                </div>

                <!-- Gift Table -->
                <div class="table-container">
                    <h3 class="section-title">Detalle de tu regalo</h3>
                    <table class="gift-table">
                        <thead>
                            <tr>
                                <th>Cantidad</th>
                                <th>Item</th>
                                <th>Valor del obsequio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table content will be filled dynamically -->
                        </tbody>
                    </table>
                </div>

                <!-- Payment Form -->
                <div class="payment-container">
                    <!-- <h3 class="section-title">Información de pago</h3> -->

                    <div class="payment-note">
                        <i class="fa-solid fa-bell"></i>
                        <span>Recuerda activar tu tarjeta para compras por internet desde la plataforma de tu
                            banco.</span>
                    </div>

                    <div class="kr-embedded" kr-popin kr-form-token="{$crearToken}">
                        <!-- payment form fields -->
                        <div class="kr-pan"></div>
                        <div class="kr-expiry"></div>
                        <div class="kr-security-code"></div>
                        <!-- payment form submit button -->
                        <button class="kr-payment-button ">Obsequiar
                            (%amount-and-currency%)</button>
                        <!-- error zone -->
                        <div class="kr-form-error"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thank You Note -->
        <div class="thank-you-note">
            <p>Gracias por ser parte de nuestro día especial</p>
            <span class="heart-icon">♥</span>
        </div>
    </div>
</section>

<!-- Footer -->
<footer id="footer-onepage">
    <div class="footer-content">
        <p>¿Quieres tu propio espacio de Celebremos? Contáctanos al <a href="https://wa.me/51941034307">941034307</a>
        </p>
    </div>
</footer>

<!-- IZIPAY -->
<link rel="stylesheet" href="https://api.payzen.eu/static/js/krypton-client/V4.0/ext/classic-reset.css">
<script src="https://api.payzen.eu/static/js/krypton-client/V4.0/ext/classic.js"></script>
<script src="https://api.micuentaweb.pe/static/js/krypton-client/V4.0/stable/kr-payment-form.min.js"
    kr-public-key="{$pk}" kr-post-url-success="{$_layoutParams.root}sofiaygabriel/estado/{$codigo}">
    </script>
{block name="styles"}
<style>
    /* General Styles */

    :root {
        --primary-color: #737D5F;
        /* Muted sage green */
        --primary-light: #8F9A7F;
        /* Lighter shade of primary */
        --primary-lighter: #B0B9A9;
        /* Even lighter shade */
        --primary-dark: #5A634D;
        /* Darker shade of primary */
        --accent-color: #D4D8C9;
        /* Light sage for accents */
        --background-color: #F8F9F5;
        /* Very light sage background */
        --text-color: #333333;
        /* Dark gray for text */
        --text-light: #666666;
        /* Lighter text */
        --border-color: #D9D9D9;
        /* Light gray for borders */
        --white: #FFFFFF;
    }


    .font-bellisia {
        font-family: 'Bellisia' !important;
    }

    @font-face {
        font-family: 'Bellisia';
        src: url("../fonts/Bellisia.otf");
    }

    @font-face {
        font-family: 'Dulcinea';
        src: url("../fonts/Dulcinea.ttf");
    }

    @font-face {
        font-family: 'Forum';
        src: url("../fonts/Forum-Regular.ttf");
    }

    @font-face {
        font-family: 'Abramo';
        src: url("../fonts/AbramoSerif.otf");
    }

    /* .font-abramo {
        font-family: 'Abramo' !important;
    } */

    .font-dulcinea {
        font-family: 'Dulcinea' !important;
        font-weight: normal !important;
    }

    body {
        font-family: 'Forum', serif;
        background-color: var(--background-color);
        margin: 0;
        padding: 0;
        color: var(--text-color);
        line-height: 1.6;
    }

    * {
        box-sizing: border-box;
    }

    /* Notification Bar */
    .notification-bar {
        background-color: var(--primary-light);
        color: white;
        padding: 15px;
        text-align: center;
        margin-bottom: 30px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .notification-content {
        max-width: 800px;
        margin: 0 auto;
    }

    .heart-icon {
        color: var(--accent-color);
        font-size: 18px;
        margin-right: 5px;
    }

    /* Main Container */
    .main-container {
        width: 90%;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px 0 50px;
    }

    /* Gift Card */
    .gift-card {
        background-color: var(--white);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    .card-header {
        font-size: 2.5rem;
        background-color: var(--primary-color);
        color: white;
        padding: 40px;
        text-align: center;
    }

    .couple-logo {
        max-height: 80px;
    }

    .card-body {
        padding: 30px;
    }

    /* Stepper */
    .stepper-container {
        margin-bottom: 30px;
    }

    .back-button {
        background: none;
        border: 1px solid var(--primary-light);
        color: var(--primary-dark);
        padding: 8px 15px;
        border-radius: 20px;
        cursor: pointer;
        font-size: 14px;
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }

    .back-button:hover {
        background-color: var(--primary-lighter);
        border-color: var(--primary-color);
    }

    .back-button:hover {
        background-color: #f5f5f5;
    }

    .stepper {
        display: flex;
        justify-content: center;
    }

    .step-list {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
        width: 80%;
        justify-content: space-between;
    }

    .step {
        margin: 0 10px;
    }

    .step-circle {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #5d4037;
        color: white;
        font-weight: bold;
    }

    /* Message Container */
    .message-container {
        background-color: var(--primary-lighter);
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 30px;
        text-align: center;
    }

    .section-title {
        color: var(--border-color);
        margin-top: 0;
        margin-bottom: 15px;
        font-size: 18px;
    }

    .sender-name {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .message-text {
        font-style: italic;
        color: var(--text-light);
        margin: 0;
    }

    /* Gift Table */
    .table-container {
        margin-bottom: 40px;
        padding: 0 10px;
    }

    .gift-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        font-family: 'Forum', serif;
    }

    .gift-table thead {
        background: linear-gradient(to right, var(--primary-color), var(--primary-dark));
    }

    .gift-table th {
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 14px;
        padding: 16px 20px;
        text-align: center;
        border: none;
        position: relative;
    }

    .gift-table th:not(:last-child)::after {
        content: '';
        position: absolute;
        right: 0;
        top: 25%;
        height: 50%;
        width: 1px;
        background-color: rgba(93, 64, 55, 0.2);
    }

    .gift-table td {
        padding: 16px 20px;
        text-align: center;
        color: #5d4037;
        border: none;
        border-bottom: 1px solid #f0e6e6;
        font-size: 15px;
    }

    .gift-table tr:last-child td {
        border-bottom: none;
    }

    .gift-table tbody tr {
        transition: all 0.3s ease;
    }

    .gift-table tbody tr:hover {
        background-color: #faf6f6;
    }

    .gift-table tbody tr:nth-child(even) {
        background-color: #fcf9f9;
    }

    .gift-table tbody tr:nth-child(even):hover {
        background-color: #f7f2f2;
    }

    /* Estilos para valores monetarios */
    .gift-table td:last-child {
        font-weight: 600;
        color: #9c7373;
    }

    /* Estilos para cantidades */
    .gift-table td:first-child {
        font-weight: 600;
    }

    /* Estilos responsivos */
    @media (max-width: 768px) {

        .gift-table th,
        .gift-table td {
            padding: 12px 15px;
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        .gift-table {
            box-shadow: none;
            border: 1px solid #e8d7d7;
        }

        .gift-table th,
        .gift-table td {
            padding: 10px;
            font-size: 13px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 15px;
            font-size: 18px;
            color: #9c7373;
            letter-spacing: 1px;
        }
    }

    /* Payment Container */
    .payment-container {
        background-color: #f9f7f7;
        padding: 20px;
        border-radius: 10px;
        margin-top: 30px;
        text-align: center;
    }

    /* Thank You Note */
    .thank-you-note {
        text-align: center;
        margin-top: 30px;
    }

    .thank-you-note p {
        margin-bottom: 10px;
    }

    /* Preloader */
    #preloader {
        background: #fff;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loading-heart {
        stroke: #e8d7d7 !important;
        text-align: center;
    }

    .preloader-title {
        color: #5d4037 !important;
        font-family: Brittany, cursive !important;
        margin-top: 15px;
    }

    /* Footer */
    #footer-onepage {
        background-color: var(--primary-dark);
        color: white;
        padding: 15px 0;
        text-align: center;
        position: relative;
        bottom: 0;
        width: 100%;
    }

    .footer-content {
        max-width: 800px;
        margin: 0 auto;
    }

    #footer-onepage a {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }

    #footer-onepage a:hover {
        text-decoration: underline;
    }

    /* Payment Button Customization */
    .kr-payment-button {
        background-color: var(--primary-color) !important;
        border-radius: 30px !important;
        padding: 12px 30px !important;
        font-family: 'Forum', sans-serif !important;
        font-weight: 600 !important;
        font-size: 16px !important;
        border: none !important;
        cursor: pointer !important;
        transition: all 0.3s ease !important;
        width: 100% !important;
        max-width: 300px !important;
        color: white !important;
    }

    .kr-payment-button:hover {
        background-color: var(--primary-dark) !important;
        transform: translateY(-2px) !important;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .main-container {
            width: 95%;
        }

        .card-body {
            padding: 20px;
        }

        .step-list {
            width: 100%;
        }

        .gift-table {
            font-size: 14px;
        }

        .gift-table th,
        .gift-table td {
            padding: 8px;
        }
    }

    @media (max-width: 480px) {
        .step-circle {
            width: 35px;
            height: 35px;
            font-size: 14px;
        }

        .section-title {
            font-size: 16px;
        }
    }

    .kr-popin-button {
        width: 100% !important;
        background: var(--primary-color) !important;
        color: white !important;
    }

    .kr-popin-utils {
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
    }



    .checkbox-group .custom-checkbox {
        position: relative;
    }

    .kr-popin-modal-header-background-image {
        background-color: var(--primary-color) !important;
        color: white;
    }


    /*.kr-header-border {
        background-color: transparent !important;
    }*/

    .kr-embedded[kr-popin] .kr-popin-modal-header .kr-popin-modal-header-image .kr-header-border {
        width: 80px;
        height: 80px;
        background-color: transparent !important;
        margin-top: 2px;
        margin-left: 2px;
        border: 0px solid transparent !important;
    }

    .kr-popin-shop-name span {
        color: white !important;
    }

    .kr-popin-modal-footer {
        background-color: var(--primary-color) !important;
    }

    /*
    .kr-logo-mcw {
        display: none !important;
    }
    */

    .kr-header-logo {
        background-color: var(--primary-color) !important;
    }


    .icon-close-popup path {
        fill: white !important;
    }

    .kr-popin-shop-name {
        display: none !important;
    }

    /*
    .kr-embedded[kr-popin] div.kr-popin-modal-header .kr-popin-modal-header-image img.kr-header-logo {
        content: url("https://celebremos.pe/views/layout/neela/images/izipay.png");
        object-fit: contain !important;
        filter: brightness(0) invert(1);
    }

    .kr-embedded[kr-popin].kr-help-button-inner-field .kr-popin-modal-footer .kr-whitelabel-logo img.kr-logo-mcw {
        content: url("https://celebremos.pe/views/layout/neela/images/izipay.png");
    }
    */

    .kr-embedded[kr-popin] .kr-header-logo {
        content: url("https://celebremos.pe/views/layout/neela/images/izipay.png") !important;
        background-color: var(--primary-color) !important;
        object-fit: contain !important;
        padding: 5px;
        /* Ajusta según necesites */
    }

    .kr-embedded[kr-popin] .kr-popin-modal-header {
        height: 70px !important;
    }

    .payment-note {
        display: flex;
        align-items: center;
        background: #fff8e1;
        /* color suave tipo aviso */
        border-left: 4px solid #fbc02d;
        padding: 8px 12px;
        border-radius: 6px;
        font-size: 0.95rem;
        color: #444;
        margin-bottom: 15px;
    }

    .payment-note i {
        color: #fbc02d;
        margin-right: 8px;
        font-size: 1.1rem;
    }

    .font-titulo-obsequio {
        font-family: "Bellisia" !important;
        font-weight: normal !important;
    }
</style>
{/block}