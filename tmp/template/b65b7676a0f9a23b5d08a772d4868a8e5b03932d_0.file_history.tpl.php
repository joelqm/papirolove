<?php
/* Smarty version 5.5.1, created on 2026-07-08 09:20:05
  from 'file:views/jesykaygustavo/components/history.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a4e5c95455416_30627883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b65b7676a0f9a23b5d08a772d4868a8e5b03932d' => 
    array (
      0 => 'views/jesykaygustavo/components/history.tpl',
      1 => 1783520349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a4e5c95455416_30627883 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\jesykaygustavo\\components';
?><style>
  .song-card {
    background: #868a6f;
    border-radius: 28px;
    padding: 5px;
    width: 100%;
    max-width: 340px;
    margin: 0 auto 30px;
    position: relative;
    z-index: 2;
  }

  .song-card-inner {
    background: #787D63;
    border-radius: 22px;
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
    background: #c9cdb8;
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
    color: #787D63;
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
    bottom: 0;
    left: -2px;
    width: 26%;
    height: 85%;
    background-image: url('<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/jesykaygustavo/imgs/decoracion_historia_izq.webp');
    background-size: contain;
    background-position: bottom left;
    background-repeat: no-repeat;
    z-index: 1;
    pointer-events: none;
  }

  .decor-right {
    position: absolute;
    top: 0;
    right: -2px;
    width: 26%;
    height: 85%;
    background-image: url('<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/jesykaygustavo/imgs/decoracion_historia_der.webp');
    background-size: contain;
    background-position: top right;
    background-repeat: no-repeat;
    z-index: 1;
    pointer-events: none;
  }

  .photo-stack {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
  }

  .novios-image {
    width: 100%;
    max-width: 480px;
    height: auto;
    object-fit: contain;
    position: relative;
    top: 0;
  }

  /* --- FUENTES SECCIÓN HISTORIA --- */
  #new-history .history-title-big {
    font-family: 'CastelaMolgate';
    color: #293E59;
    font-size: var(--fs-section-title);
    line-height: 1.15;
  }

  #new-history .text-body {
    font-family: 'Humanist521';
    color: #293E59;
    font-size: var(--fs-body);
    line-height: 1.55;
    -webkit-text-stroke: 0;
  }

  /* --- ESTILOS DEL CONTADOR --- */
  .countdown-wrapper {
    display: block;
    text-align: center;
    margin: 22px auto 0;
    position: relative;
    top: 0;
  }

  .countdown-wrapper .wedding-date {
    font-family: 'Noteworthy';
    color: #293E59;
    font-size: 1.5rem;
    margin-top: 0;
  }

  .countdown-wrapper .count {
    gap: 16px;
    margin-top: 6px;
    margin-bottom: 0;
    justify-content: center;
  }

  .countdown-wrapper .countdown-item {
    color: #293E59;
  }

  .countdown-wrapper .countdown-number {
    font-family: 'Noteworthy';
    font-size: 22px;
  }

  .countdown-wrapper .countdown-label {
    font-family: 'Noteworthy';
    font-size: 13px;
    color: #293E59;
    -webkit-text-stroke: 0.3px #293E59;
  }


  @media (max-width: 992px) {

    .song-card {
      background: #868a6f;
      border-radius: 28px;
      padding: 0px;
      width: 97%;
      max-width: 300px;
      margin: 0 auto 20px;
      position: relative;
      top: 0;
    }

    .song-card-title {
      font-size: 1.2rem;
    }

    .decor-left,
    .decor-right {
      width: 32%;
    }

    .history-images {
      height: auto !important;
      margin-top: 0.5rem;
    }

    .photo-stack {
      position: static;
    }

    .novios-image {
      max-width: 320px;
      top: 0;
    }

    #new-history .history-title-big {
      font-size: var(--fs-section-title-sm);
    }

    #new-history .text-body {
      font-size: var(--fs-body-sm);
      padding: 0 8px;
    }

    .countdown-wrapper .wedding-date {
      font-size: 1.3rem;
    }

    .countdown-wrapper .countdown-number {
      font-size: 18px;
    }

    .countdown-wrapper .countdown-label {
      font-size: 12px;
    }

  }
</style>


<section class="history-section">



  <div class="decor-left"></div>
  <div class="decor-right"></div>


  <div class="audio-container-history" style="margin: 0px auto;">
    <audio id="myAudio" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/jesykaygustavo/sound/song.mp3" preload="auto"></audio>
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

  <!-- <div class="flower-left"></div> -->
  <div class="container-history" id="new-history">

    <div class="section">
      <div class="history-title" data-aos="fade-up">
        <!-- <h1 class="history-title-small">NUESTRA HISTORIA</h1> -->
        <p class="history-title-big">Nuestra Historia</p>
      </div>
      <p class="text-body" data-aos="fade-up">
        A veces, los encuentros más extraordinarios
        nacen de la manera más inesperada. Lo que
        comenzó como una coincidencia
        entre dos personas de países y culturas
        distintas, se convirtió en la historia más hermosa
        de nuestras vidas. Porque cuando dos almas
        están destinadas a encontrarse, no
        existen fronteras ni distancias.
      </p>

      <!-- Contenedor del contador -->
      <div class="countdown-wrapper" data-aos="fade-up">
        <p class="wedding-date">Solo faltan</p>
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

    </div>

    <div class="divider"></div>

    <div class="history-images" data-aos="fade-up">

      <!-- Contenedor de las fotos -->
      <div class="photo-stack">
        <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/jesykaygustavo/imgs/novios.webp" alt="Jesyka y Gustavo"
          class="novios-image">
      </div>

    </div>

  </div>

</section><?php }
}
