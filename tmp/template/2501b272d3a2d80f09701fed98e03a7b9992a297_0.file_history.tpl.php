<?php
/* Smarty version 5.5.1, created on 2026-05-01 17:55:22
  from 'file:views/fernandayromme/components/history.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69f52f5a691bd7_71694966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2501b272d3a2d80f09701fed98e03a7b9992a297' => 
    array (
      0 => 'views/fernandayromme/components/history.tpl',
      1 => 1777676121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f52f5a691bd7_71694966 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\fernandayromme\\components';
?>
<style>
    .song-card {
        background: #b8bfa6;
        border-radius: 28px;
        padding: 5px;
        width: 100%;
        max-width: 420px;
        margin: 0rem auto;
    }
    .song-card-inner {
      background: #f9f4ef;
      border-radius: 22px;
      padding: 22px 26px 18px;
    }
    .song-card-title {
      font-family: "Baskervville-Regular", serif;
      color: #646B5A;
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
      background: #646B5A;
      border-radius: 2px;
    }
    .song-card-progress-thumb {
      position: absolute;
      left: 55%;
      top: 50%;
      width: 12px;
      height: 12px;
      background: #646B5A;
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
      color: #646B5A;
      font-size: 1.1rem;
    }
    .song-card-play {
      background: #646B5A;
      color: #fff;
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
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
      transition: transform 0.2s ease;
    }
    .song-card-play:hover {
      transform: scale(1.05);
    }
    .song-card-play .play-icon {
      margin-left: 3px;
    }
  </style>

<section class="history-section">

    <audio id="myAudio" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayromme/sound/song.mp3" preload="auto"></audio>

    <div class="song-card" data-aos="fade-up">
        <div class="song-card-inner">
            <p class="song-card-title font-NewAthenaUnicode">Nuestra canción</p>
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


      <!-- <button id="player" class="button-2">
        <i class="fa-solid fa-play play-icon"></i>
        <i class="fa-solid fa-pause pause-icon" style="display:none"></i>
        NUESTRA CANCIÓN
    </button> -->

    <!-- <div class="flower-left"></div> -->
    <div class="container-history" id="new-history">

        

        <div class="section">
            <div class="history-title" data-aos="fade-up">
                <!-- <h1 class="history-title-small">NUESTRA HISTORIA</h1> -->
                <p class="history-title-big">Nuestra Historia</p>
            </div>
            <p class="text-body" data-aos="fade-up">
                Si alguien nos hubiera dicho aquella noche que una foto
                nos llevaría hasta aquí, quizás no lo habríamos creído.
                Pero aquí estamos, demostrando que el amor aparece cuando menos lo esperas… y se queda cuando es
                de verdad.Lo que comenzó como una curiosidad, se convirtió en conversaciones, risas, miradas cómplices…
                y poco a poco, sin darnos cuenta, en un amor profundo. Un amor que creció con el tiempo, que aprendió a ser paciente, fuerte y verdadero.
            </p>
            <p class="text-body" data-aos="fade-up">
                Han pasado 9 años desde ese primer paso. 9 años de momentos que nos han construido: alegrías inmensas, desafíos que nos hicieron más fuertes, sueños compartidos y un camino que nunca dejamos de recorrer juntos. Hoy no solo celebramos una historia bonita, celebramos una historia real. De esas que se eligen todos los días. De esas que no se rinden.
            </p>
            <p class="text-body" data-aos="fade-up">
                Porque amarnos no fue casualidad… fue destino.
                Hoy, con la bendición de Dios, frente a todos, daremos el paso más importante: prometernos seguir caminando juntos, seguir creciendo, seguir soñando… pero ahora como esposos.
            </p>

            <div style="display: flex; flex-direction: column; align-items: flex-end; width: 100%;">
                <p class="wedding-date" style="margin: 26px 0 0 auto;">Faltan</p>
                <div class="count" id="countdown" style="justify-content: flex-end;">
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
            </div>

            <br><br>

        </div>

        <!-- <div class="rm-container">
            <img class="history-logo" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayromme/imgs/logo.webp" alt="logo">
        </div> -->
        <div class="divider"></div>

        <div class="history-images" data-aos="fade-up">
            <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayromme/imgs/preboda-2.webp" alt="Foto de la pareja"
                class="circular-image">
            <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayromme/imgs/preboda-1.webp" alt="Pareja en las vías del tren"
                class="rectangular-image">
        </div>


        


    </div>


    
    
</section><?php }
}
