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

    <div class="wedding-grid">

        <!-- Columna izquierda -->
        <div class="col-left">
            <img src="{$_layoutParams.root}views/sofiaygabriel/imgs/logo_02.webp" alt="logo" class="logo">

            <audio id="myAudio" src="{$_layoutParams.root}views/sofiaygabriel/sound/song.mp3"></audio>

            <button id="player" class="button-2">
                <i class="fa-solid fa-play play-icon"></i>
                <i class="fa-solid fa-pause pause-icon" style="display:none"></i>
                NUESTRA CANCIÓN
            </button>

        </div>

        <!-- Columna central (solo espacio para ver imagen) -->
        <div class="col-center"></div>

        <!-- Columna derecha -->
        <div class="col-right">

            <p class="wedding-date">SÁBADO, 02 DE MAYO DEL 2026</p>

            <div class="count" id="countdown">
                <div class="countdown-item">
                    <span class="countdown-number" id="counter1">00</span>
                    <span class="countdown-label">DÍAS</span>
                </div>

                <div class="countdown-item">
                    <span class="countdown-number" id="counter2">00</span>
                    <span class="countdown-label">HORAS</span>
                </div>

                <div class="countdown-item">
                    <span class="countdown-number" id="counter3">00</span>
                    <span class="countdown-label">MINUTOS</span>
                </div>
            </div>

            <button class="button button-calendar">
                AGREGAR A CALENDARIO
            </button>
        </div>
    </div>
</div>

<div class="navigation">
    <a href="javascript:void(0);" class="icon" id="hamburger-icon">
        <i class="fas fa-bars"></i>
    </a>
    <div class="menu" id="menu">
        <!-- <a data-id="new-history" href="#new-history" class="nav-item">NUESTRA HISTORIA</a> -->
        <a data-id="info" class="nav-item">INFORMACIÓN</a>
        <a data-id="galery" class="nav-item">NUESTRAS FOTOS</a>
        <a data-id="dresscode" class="nav-item">CÓDIGO DE VESTIMENTA</a>
        <a data-id="attendance" class="nav-item">ASISTENCIA</a>
        <a data-id="gifts" class="nav-item">REGALOS</a>
    </div>
</div>