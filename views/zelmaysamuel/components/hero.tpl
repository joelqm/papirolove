<style>
    .couple-name {
        position: relative;
        margin: 0;
        padding: 0;
        display: inline-block;
    }

    .name-top {
        font-size: 120px;
        /* Tamaño grande para Samuel */
        color: #ffffff;
        /* Blanco según la imagen */
        font-weight: 400;
        line-height: 1;
        /* Sombras suaves para que se lea sobre fondos claros */
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 2;
        margin-bottom: -74px;
        left: -50px;
        /* Hace que el segundo nombre suba y se solape */
    }

    .name-bottom {
        font-size: 60px;
        /* Zelma un poco más pequeño que Samuel */
        text-transform: uppercase;
        letter-spacing: 5px;
        color: #ffffff;
        font-weight: 300;
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        gap: 15px;
        left: 50px;
    }

    .ampersand {
        font-size: 40px;
        /* El símbolo & más pequeño */
        vertical-align: middle;
    }
</style>

<div class="container-page">
    <div class="background" data-aos="fade-up"></div>

    <div class="header" style="justify-items: center;">

        <div class="container">
            <h1 class="couple-name">
                <div class="name-top font-switzerland">Samuel</div>
                <div class="name-bottom font-qafinte">
                    <span class="ampersand ">&</span> ZELMA
                </div>
            </h1>
        </div>

    </div>

    <div class="content">

        <button id="player" class="button-2 button-hovers font-qafinte">
            <i class="fa-solid fa-play play-icon"></i>
            <i class="fa-solid fa-pause pause-icon" style="display: none;"></i>
            <p>NUESTRA CANCIÓN</p>
        </button>

        <p class="wedding-date font-qafinte" data-aos="fade-up">SÁBADO, 01 DE AGOSTO DEL 2026</p>

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


        <div class="buttons">

            <button class="button button-hover button-calendar font-qafinte">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                </svg>
                <p>AGREGAR A CALENDARIO</p>
            </button>

            <audio id="myAudio" src="{$_layoutParams.root}views/zelmaysamuel/sound/song.mp3"></audio>

            <!-- <button id="player" class="button-2 button-hovers">
                <i class="fa-solid fa-play play-icon"></i>
                <i class="fa-solid fa-pause pause-icon" style="display: none;"></i>
                <p>NUESTRA CANCIÓN</p>
            </button> -->
        </div>
    </div>
</div>
<div class="navigation">
    <a href="javascript:void(0);" class="icon" id="hamburger-icon">
        <i class="fas fa-bars"></i> <!-- Ícono de hamburguesa -->
    </a>
    <div class="menu" id="menu">
        <a data-id="new-history" href="#new-history" class="nav-item">NUESTRA HISTORIA</a>
        <a data-id="info" class="nav-item">INFORMACIÓN</a>
        <a data-id="galery" class="nav-item">NUESTRAS FOTOS</a>
        <a data-id="dresscode" class="nav-item">CÓDIGO DE VESTIMENTA</a>
        <a data-id="attendance" class="nav-item">ASISTENCIA</a>
        <a data-id="gifts" class="nav-item">REGALOS</a>
    </div>
</div>