<style>
    .container-page {
        display: flex;
        justify-content: space-between;
        align-items: center;
        min-height: 100vh;
    }

    .header {
        padding-top: 2rem;
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
            color: #8192A0 !important;
            -webkit-text-stroke: 1.1px #8192A0;
            paint-order: stroke fill;
            text-shadow: none;
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
            background: #8192A0 !important;
            color: #fff !important;
        }

        .hero-action-icon {
            width: 22px;
            height: 22px;
        }

        .couple-name {
            font-size: 4rem;
            color: #8192A0 !important;
            -webkit-text-stroke: 1.6px #8192A0;
            paint-order: stroke fill;
            text-shadow: none;
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
        <h1 class="couple-name" data-aos="fade-up" data-aos-delay="80">Milagros <span style="margin-left: 1rem;">&</span>
            Marcelo</h1>
        <p class="wedding-date-2" data-aos="fade-up" data-aos-delay="140">
            S&#193;BADO <span class="date-num">05</span> DE DICIEMBRE DE <span class="date-num">2026</span>
        </p>
    </div>

    <div class="hero-actions">
        <button type="button"
                id="btnMilagrosSong"
                class="hero-action-btn hero-action-btn--song js-song-player"
                aria-label="Reproducir nuestra canción"
                aria-pressed="false"
                onclick="return window.toggleMilagrosSong(event);">
            <span>Nuestra canción</span>
            <img class="hero-action-icon"
                 src="{$_layoutParams.root}views/milagrosymarcelo/imgs/icono_cancion.svg"
                 alt=""
                 aria-hidden="true">
        </button>

        <button type="button"
                class="hero-action-btn hero-action-btn--calendar button-calendar"
                aria-label="Agregar a tu calendario"
                onclick="if (typeof crearEventoEnGoogleCalendar === 'function') { crearEventoEnGoogleCalendar(); } return false;">
            <img class="hero-action-icon"
                 src="{$_layoutParams.root}views/milagrosymarcelo/imgs/icono_calendario.svg"
                 alt=""
                 aria-hidden="true">
            <span>Agrega a tu calendario</span>
        </button>
    </div>
</div>

<audio id="milagrosSongAudio"
       class="hero-audio"
       src="{$_layoutParams.root}views/milagrosymarcelo/sound/song.mp3"
       preload="auto"
       playsinline
       webkit-playsinline></audio>

<script>
window.toggleMilagrosSong = function (event) {
    if (event) {
        event.preventDefault();
        event.stopPropagation();
        if (typeof event.stopImmediatePropagation === 'function') {
            event.stopImmediatePropagation();
        }
    }

    var audio = document.getElementById('milagrosSongAudio');
    var btn = document.getElementById('btnMilagrosSong');
    if (!audio) {
        return false;
    }

    // Evita que el navegador haga scroll al elemento audio
    try { audio.blur(); } catch (err) {}

    if (audio.paused || audio.ended) {
        var playPromise = audio.play();
        if (playPromise && typeof playPromise.then === 'function') {
            playPromise.then(function () {
                if (btn) {
                    btn.classList.add('is-playing');
                    btn.setAttribute('aria-pressed', 'true');
                }
            }).catch(function (err) {
                console.log('No se pudo reproducir song.mp3:', err);
                if (btn) {
                    btn.classList.remove('is-playing');
                    btn.setAttribute('aria-pressed', 'false');
                }
            });
        } else if (btn) {
            btn.classList.add('is-playing');
            btn.setAttribute('aria-pressed', 'true');
        }
    } else {
        audio.pause();
        if (btn) {
            btn.classList.remove('is-playing');
            btn.setAttribute('aria-pressed', 'false');
        }
    }

    return false;
};
</script>

<div class="navigation">
    <a href="javascript:void(0);" class="icon" id="hamburger-icon">
        <i class="fas fa-bars"></i>
    </a>
    <div class="menu" id="menu">
        <a href="javascript:void(0);" data-id="new-history" class="nav-item">Nuestra Historia</a>
        <a href="javascript:void(0);" data-id="info" class="nav-item">Detalles</a>
        <a href="javascript:void(0);" data-id="galery" class="nav-item">Fotos</a>
        <a href="javascript:void(0);" data-id="dresscode" class="nav-item">Dress Code</a>
        <a href="javascript:void(0);" data-id="attendance" class="nav-item">Asistencia</a>
        <a href="javascript:void(0);" data-id="gifts" class="nav-item">Regalos</a>
    </div>
</div>
