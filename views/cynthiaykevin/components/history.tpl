<style>
  .song-card {
    background: #525432;
    border-radius: 28px;
    padding: 0;
    width: 100%;
    max-width: 340px;
    margin: 0 auto;
  }

  .song-card-inner {
    background: #525432;
    border-radius: 28px;
    padding: 22px 26px 18px;
  }

  .song-card-title {
    font-family: "newyork_personal", serif;
    color: #fff;
    font-size: 1.4rem;
    text-align: center;
    margin: 0 0 16px;
    font-weight: bold;
  }

  .song-card-progress {
    position: relative;
    height: 2px;
    background: rgba(255, 255, 255, 0.35);
    border-radius: 2px;
    margin: 0 4px 22px;
  }

  .song-card-progress-fill {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 55%;
    background: #fff;
    border-radius: 2px;
  }

  .song-card-progress-thumb {
    position: absolute;
    left: 55%;
    top: 50%;
    width: 12px;
    height: 12px;
    background: #fff;
    border-radius: 50%;
    transform: translate(-50%, -50%);
  }

  .song-card-controls {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
  }

  .song-card-icon {
    color: #fff;
    font-size: 1.1rem;
  }

  .song-card-play {
    background: #fff;
    color: #525432;
    border: none;
    width: 56px;
    height: 56px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    cursor: pointer;
    padding: 0;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
    transition: transform 0.2s ease;
  }

  .song-card-play:hover {
    transform: scale(1.05);
  }

  .song-card-play .play-icon {
    margin-left: 3px;
  }

  .decor-left {
    position: absolute;
    top: auto;
    left: 0;
    bottom: 0;
    width: 26%;
    height: 52%;
    transform: none;
    background-image: url('{$_layoutParams.root}views/cynthiaykevin/imgs/nuestra_historia_flores.webp');
    background-size: contain;
    background-position: bottom left;
    background-repeat: no-repeat;
    z-index: 0;
    pointer-events: none;
  }

  .history-section .section,
  .history-section .history-images {
    position: relative;
    z-index: 2;
  }

  .history-section .circular-image,
  .history-section .rectangular-image {
    border-color: #525432;
  }

  .history-section .wedding-date,
  .history-section .countdown-item,
  .history-section .countdown-number,
  .history-section .countdown-label {
    color: #525432;
  }

  .history-section .countdown-label {
    -webkit-text-stroke: 0.5px #525432;
  }

  @media (max-width: 992px) {

    .decor-left {
      width: 42%;
      height: 28%;
      top: auto;
      bottom: 0;
      transform: none;
      background-position: bottom left;
      opacity: 0.85;
    }

    .song-card {
      background: #525432;
      border-radius: 28px;
      padding: 0;
      width: 97%;
      max-width: 300px;
      margin: 1.5rem auto 2rem;
      top: auto;
      position: relative;
    }

    .countdown-wrapper {
      top: auto;
      margin-top: 0;
      margin-bottom: 1.25rem;
    }

    #new-history .count {
      margin-top: 0.5rem !important;
    }

    .history-images {
      margin-top: 0;
      padding-top: 0;
    }

  }


  @media (max-width: 480px) {

    .decor-left {
      width: 38%;
      height: 24%;
      opacity: 0.75;
    }

    .song-card-title {
      font-size: 1.2rem;
    }

    .song-card {
      margin-bottom: 1.75rem;
    }
  }

  /* --- ESTILOS DEL CONTADOR --- */
  .countdown-wrapper {
    display: block;
    flex-direction: column;
    align-items: center;
    margin-bottom: 40px;
    top: auto;
    position: relative;
    z-index: 3;
  }

  .photo-stack {
    position: relative;
    z-index: 1;
  }

  /* Solo escritorio: subir contador sobre las fotos */
  @media (min-width: 993px) {
    .countdown-wrapper {
      top: -140px;
    }
  }
</style>


<section class="history-section">



  <div class="decor-left" aria-hidden="true"></div>


  <div class="container-history" id="new-history">

    <div class="section">
      <div class="history-title" data-aos="fade-up">
        <p class="history-title-big">Nuestra Historia</p>
      </div>
      <p class="text-body" data-aos="fade-up">
        Hace seis años, Dios y el universo hicieron posible que
        nuestras vidas se encontraran.
      </p>
      <p class="text-body" data-aos="fade-up">
        Desde entonces, hemos escrito una historia
        llena de amor, aprendizajes y sueños que,
        paso a paso, nos ha traído hasta este momento.
      </p>
      <p class="text-body" data-aos="fade-up">
        Hoy comprendemos que el verdadero "para siempre"
        no se encuentra, sino que se construye con
        paciencia, confianza y la decisión de
        elegirnos día tras día.
      </p>

      <br>

      <div class="audio-container-history" style="margin: 0px auto;">
        <audio id="myAudio" src="{$_layoutParams.root}views/cynthiaykevin/sound/song.mp3" preload="auto"></audio>
      </div>

      <div class="song-card" data-aos="fade-up">
        <div class="song-card-inner">
          <p class="song-card-title newyork_personal">Nuestra canción</p>
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
      </div>

    </div>

    <div class="divider"></div>

    <div class="history-images" data-aos="fade-up">



      <!-- Contenedor del contador -->
      <div class="countdown-wrapper">
        <p class="wedding-date">Faltan</p>
        <div class="count" id="countdown">
          <div class="countdown-item">
            <span class="countdown-number" id="counter1">10</span>
            <span class="countdown-label">DÍAS</span>
          </div>
          <div class="countdown-item">
            <span class="countdown-number" id="counter2">10</span>
            <span class="countdown-label">HORAS</span>
          </div>
          <div class="countdown-item">
            <span class="countdown-number" id="counter3">10</span>
            <span class="countdown-label">MINUTOS</span>
          </div>
        </div>
      </div>

      <!-- Contenedor de las fotos -->
      <div class="photo-stack">
        <img src="{$_layoutParams.root}views/cynthiaykevin/imgs/preboda-2.webp" alt="Foto de la pareja"
          class="circular-image">
        <img src="{$_layoutParams.root}views/cynthiaykevin/imgs/preboda-1.webp" alt="Pareja en las vías del tren"
          class="rectangular-image">
      </div>

    </div>

  </div>

</section>
