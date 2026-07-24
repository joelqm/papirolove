<section class="history-section" id="new-history">

    <img class="history-flower history-flower-tl"
         src="{$_layoutParams.root}views/julissayruben/imgs/imagen_historia_flores_superior_izq.webp"
         alt=""
         aria-hidden="true">

    <img class="history-flower history-flower-br"
         src="{$_layoutParams.root}views/julissayruben/imgs/imagen_historia_flores_inferior_der.webp"
         alt=""
         aria-hidden="true">

    <audio id="myAudio" src="{$_layoutParams.root}views/julissayruben/sound/song.mp3" preload="auto"></audio>

    <div class="song-card" data-aos="fade-up">
        <p class="song-card-title">Nuestra canción</p>
        <div class="song-card-progress">
            <span class="song-card-progress-fill"></span>
            <span class="song-card-progress-thumb"></span>
        </div>
        <div class="song-card-controls">
            <i class="fa-solid fa-bars song-card-icon"></i>
            <i class="fa-solid fa-backward-step song-card-icon"></i>
            <button id="player" class="song-card-play" aria-label="Reproducir">
                <i class="fa-solid fa-play play-icon"></i>
                <i class="fa-solid fa-pause pause-icon" style="display:none"></i>
            </button>
            <i class="fa-solid fa-forward-step song-card-icon"></i>
            <i class="fa-regular fa-heart song-card-icon"></i>
        </div>
    </div>

    <div class="container-history">

        <div class="section">
            <div class="history-title" data-aos="fade-up">
                <p class="history-title-big">Nuestra Historia</p>
            </div>

            <p class="text-body" data-aos="fade-up">
              Hay encuentros que parecen casualidad, pero terminan
              siendo el comienzo de una gran historia.
              Así empezó la nuestra. Nos conocimos
              mientras estudiábamos inglés y, aunque en ese momento
              nuestros caminos siguieron direcciones distintas,
              dos años después, la vida volvió a reunirnos.
              Desde entonces hemos compartido una década
              de amor, sueños y momentos inolvidables.
            </p>
            <p class="text-body" data-aos="fade-up">
              Hoy comenzamos el capítulo más importante
              en nuestra historia, y no podríamos imaginar este
              día sin quienes han sido parte de nuestro camino.
            </p>

            <div class="history-countdown" data-aos="fade-up">
                <p class="faltan-label">Faltan</p>
                <div class="count" id="countdown">
                    <div class="countdown-item">
                        <span class="countdown-number" id="counter1">00</span>
                        <span class="countdown-label">Días</span>
                    </div>
                    <div class="countdown-item">
                        <span class="countdown-number" id="counter2">00</span>
                        <span class="countdown-label">Horas</span>
                    </div>
                    <div class="countdown-item">
                        <span class="countdown-number" id="counter3">00</span>
                        <span class="countdown-label">Minutos</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="history-images" data-aos="fade-up">
            <img src="{$_layoutParams.root}views/julissayruben/imgs/preboda-5.webp" alt="Foto de la pareja"
                class="circular-image">
            <img src="{$_layoutParams.root}views/julissayruben/imgs/preboda-4.webp" alt="Pareja en las vías del tren"
                class="rectangular-image">
        </div>

    </div>

</section>

{literal}
<style>
    .history-section .song-card {
        background: #6D8397;
        border-radius: 28px;
        padding: 18px 26px 16px;
        width: 100%;
        max-width: 380px;
        margin: 0 auto 1.5rem;
        box-shadow: 0 8px 20px rgba(109, 131, 151, 0.25);
    }
    .history-section .song-card-title {
        font-family: "Baskervville-Regular", serif;
        color: #fff;
        font-size: 1.25rem;
        text-align: center;
        margin: 0 0 14px;
        font-weight: normal;
        letter-spacing: 0.5px;
    }
    .history-section .song-card-progress {
        position: relative;
        height: 2px;
        background: rgba(255, 255, 255, 0.35);
        border-radius: 2px;
        margin: 0 4px 18px;
    }
    .history-section .song-card-progress-fill {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 55%;
        background: #fff;
        border-radius: 2px;
    }
    .history-section .song-card-progress-thumb {
        position: absolute;
        left: 55%;
        top: 50%;
        width: 11px;
        height: 11px;
        background: #fff;
        border-radius: 50%;
        transform: translate(-50%, -50%);
    }
    .history-section .song-card-controls {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
    }
    .history-section .song-card-icon {
        color: #fff;
        font-size: 1.05rem;
    }
    .history-section .song-card-play {
        background: transparent;
        color: #fff;
        border: 2px solid #fff;
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        cursor: pointer;
        padding: 0;
        transition: transform 0.2s ease;
    }
    .history-section .song-card-play:hover {
        transform: scale(1.05);
    }
    .history-section .song-card-play .play-icon {
        margin-left: 3px;
    }
</style>
{/literal}
