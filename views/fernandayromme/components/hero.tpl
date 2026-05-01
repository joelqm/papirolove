<style>
    #player {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        /* Espacio entre el icono y el texto */
        margin: 20px auto 0;
        /* Centrado horizontal automático */
        cursor: pointer;
    }

    .container-page {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .wedding-grid {

        width: 1200px;
        /* no ocupa toda la pantalla */

        display: grid;
        grid-template-columns: 1fr 1fr 1fr;

        align-items: center;
    }

    /* columna izquierda */

    .col-left {
        text-align: right;
        transform: translateY(-60px);
    }

    /* columna centro (solo deja ver la foto) */

    .col-center {
        height: 400px;
    }

    /* columna derecha */

    .col-right {
        max-width: 420px;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* centra verticalmente */
        align-items: center;
        /* centra horizontalmente */

        text-align: center;
        /* centra el texto */
        height: 100%;
        transform: translateY(60px);
    }

    .logo {
        width: 380px;
        margin-bottom: 20px;
    }

    /* contador */

    .count {
        display: flex;
        gap: 30px;
        justify-content: center;
        margin: 20px 0;
    }

    .countdown-number {
        font-size: 40px;
    }

    .countdown-label {
        font-size: 14px;
    }

    /* Media Query para Tablets y Celulares */
    @media (max-width: 992px) {
        .wedding-grid {
            width: 100%;
            /* Ocupa todo el ancho */
            grid-template-columns: 1fr;
            /* Una sola columna */
            gap: 40px;
            padding: 20px;
        }

        .col-left,
        .col-right {
            text-align: center;
            transform: translateY(0);
            /* Eliminamos el desfase vertical */
            max-width: 100%;
        }

        .col-center {
            display: none;
            /* Opcional: ocultar el espacio vacío en móviles si no hay foto */
            height: auto;
        }

        .logo {
            width: 80%;
            /* Logo más pequeño en móviles */
            max-width: 300px;
            top: -125px;
            position: relative;
        }

        .count {
            gap: 15px;
            /* Menos espacio entre números del contador */
        }

        .countdown-number {
            font-size: 30px;
        }

        /* Ajuste para el menú de navegación si es necesario */
        .menu {
            flex-direction: column;
            display: none;
            /* Se activaría con tu JS del hamburguesa */
        }

    }

    /* Ajuste extra para celulares muy pequeños */
    @media (max-width: 480px) {
        .countdown-number {
            font-size: 24px;
        }

        .countdown-label {
            font-size: 11px;
        }
    }
</style>
<div class="container-page">

    <div class="background" data-aos="fade-up"></div>

    <div style="display: flex; justify-content: center; margin-bottom: 1rem;">
        <img class="|" src="{$_layoutParams.root}views/fernandayromme/imgs/logo.webp" alt="logo" style="width: 75px;margin-top:30px">
    </div>

    <div class="header" style="justify-items: center;">
        <h1 class="couple-name font-Alana" data-aos="fade-up">FERNANDA <span style="margin-left: 1rem;">&</span>
            ROMMEL</h1>
            <p class="wedding-date font-Baskervville" data-aos="fade-up">
            30<span style="display:inline-block; margin: 0 0.4em; font-size: 1.2em; line-height: 1; vertical-align: middle;">·</span>05<span style="display:inline-block; margin: 0 0.4em; font-size: 1.2em; line-height: 1; vertical-align: middle;">·</span>26
            </p>

    </div>

    <div class="wedding-grid">

        <!-- Columna izquierda -->
        <!-- <div class="col-left">
            <img src="{$_layoutParams.root}views/fernandayromme/imgs/logo_02.webp" alt="logo" class="logo">

            <audio id="myAudio" src="{$_layoutParams.root}views/fernandayromme/sound/song.mp3"></audio>

        </div> -->

        <!-- Columna central (solo espacio para ver imagen) -->
        <div class="col-center"></div>

        <!-- Columna derecha -->
        <div class="col-right">

            <!--  -->

            <button class="button button-calendar">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                </svg>
                Agrega a tu calendario
            </button>

            
        </div>
    </div>
</div>

<div class="navigation">
    <a href="javascript:void(0);" class="icon" id="hamburger-icon">
        <i class="fas fa-bars"></i>
    </a>
    <div class="menu" id="menu">
        <a data-id="new-history" href="#new-history" class="nav-item">Nuestra Historia</a>
        <a data-id="info" class="nav-item">Detalles</a>
        <a data-id="galery" class="nav-item">Fotos</a>
        <a data-id="dresscode" class="nav-item">Dress Code</a>
        <a data-id="attendance" class="nav-item">Asistencia</a>
        <a data-id="gifts" class="nav-item">Regalos</a>
    </div>
</div>