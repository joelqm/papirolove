<style>
    .container-page {
        display: flex;
        justify-content: space-between;
        align-items: center;
        min-height: 100vh;
    }

    .header {
        padding-top: 5rem;
    }

    @media (max-width: 700px) {
        .container-page {
            justify-content: space-between !important;
            padding-top: 5rem !important;
            padding-bottom: 1.75rem !important;
        }

        .header {
            padding-top: 2.5rem !important;
            top: 0 !important;
        }

        .wedding-date-2 {
            margin-top: 0.85rem !important;
            font-size: 0.92rem !important;
            letter-spacing: 1.5px !important;
            -webkit-text-stroke: 0.45px #fff;
            paint-order: stroke fill;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.18);
        }

        .hero-actions {
            display: grid !important;
            grid-template-columns: minmax(0, 1fr) minmax(0, 1fr) !important;
            width: 100%;
            max-width: 96vw;
            gap: 0.65rem;
            margin-bottom: 1.75rem;
            padding: 0 0.35rem;
        }

        .hero-action-btn {
            font-size: 0.78rem;
            min-height: 46px;
            padding: 0.55rem 0.4rem;
            gap: 0.4rem;
        }

        .hero-action-icon {
            width: 22px;
            height: 22px;
        }

        .couple-name {
            font-size: 4rem;
            -webkit-text-stroke: 1px #fff;
            paint-order: stroke fill;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }
    }

    @media (max-width: 420px) {
        .hero-actions {
            gap: 0.5rem;
        }

        .hero-action-btn {
            font-size: 0.72rem;
            padding: 0.5rem 0.3rem;
            min-height: 44px;
        }

        .hero-action-icon {
            width: 20px;
            height: 20px;
        }
    }
</style>
<div class="container-page">

    <div class="background" data-aos="fade-in" data-aos-duration="600"></div>

    <div class="header" style="justify-items: center;">
        <h1 class="couple-name" data-aos="fade-up" data-aos-delay="80">Lizeth <span style="margin-left: 1rem;">&</span>
            Erick</h1>
        <p class="wedding-date-2" data-aos="fade-up" data-aos-delay="140">
            S&#193;BADO <span class="date-num">24</span> DE OCTUBRE DE <span class="date-num">2026</span>
        </p>
    </div>

    <div class="hero-actions" data-aos="fade-up" data-aos-delay="200">
        <button type="button" class="hero-action-btn hero-action-btn--song js-song-player" aria-label="Reproducir nuestra canción">
            <span>Nuestra canción</span>
            <img class="hero-action-icon"
                 src="{$_layoutParams.root}views/lizethyerick/imgs/icono_cancion.svg"
                 alt=""
                 aria-hidden="true">
        </button>

        <button type="button" class="hero-action-btn hero-action-btn--calendar button-calendar" aria-label="Agregar a tu calendario">
            <img class="hero-action-icon"
                 src="{$_layoutParams.root}views/lizethyerick/imgs/icono_calendario.svg"
                 alt=""
                 aria-hidden="true">
            <span>Agrega a tu calendario</span>
        </button>
    </div>

    <audio id="myAudio"
           src="{$_layoutParams.root}views/lizethyerick/sound/song.mp3"
           preload="auto"></audio>
</div>

<div class="navigation" data-aos="fade-down" data-aos-delay="260">
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
