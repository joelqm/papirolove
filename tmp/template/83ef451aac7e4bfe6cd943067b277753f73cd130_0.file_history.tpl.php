<?php
/* Smarty version 5.5.1, created on 2026-05-06 12:37:37
  from 'file:views/mariaalejandraydiego/components/history.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69fb7c617531f0_14066762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83ef451aac7e4bfe6cd943067b277753f73cd130' => 
    array (
      0 => 'views/mariaalejandraydiego/components/history.tpl',
      1 => 1778088868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb7c617531f0_14066762 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\mariaalejandraydiego\\components';
?>
<style>
    .song-card {
        background: #ba8d72;
        border-radius: 28px;
        padding: 5px;
        width: 100%;
        max-width: 340px;
        margin: 0rem auto;
    }
    .song-card-inner {
      background: #BB8465;
      border-radius: 22px;
      padding: 22px 26px 18px;
    }
    .song-card-title {
      font-family: "Baskervville-Regular", serif;
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
      color: #BB8465;
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




    .decor-left {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 35%; /* Ajusta el ancho según el tamaño de tu imagen */
      height: 100%;
      /* Asegúrate de poner la ruta correcta a tu imagen de flores */
      background-image: url('<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/flores-izquierda.png'); 
      background-size: contain; /* Evita que la imagen se deforme */
      background-position: bottom left; /* Pega la imagen abajo y   lizquierda */
      background-repeat: no-repeat;
      z-index: 1; /* Se queda al fondo */
      pointer-events: none; /* Evita que la imagen bloquee clicaccidentale  en el texto */
    }
    .decor-right {
        position: absolute;
        bottom: -5%; /* Puedes jugar con valores negativos para "sacar" un poco la imagen */
        right: 0;
        width: 45%; 
        height: 80%;
        /* Asegúrate de poner la ruta correcta a tu imagen de fondo/acuarela */
        background-image: url('<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/flores-derecha.png'); 
        background-size: contain;
        background-position: bottom right;
        background-repeat: no-repeat;
        z-index: 1; /* Se queda al fondo */
        opacity: 0.6; /* Le baja un poco la opacidad para que sea un fondo sutil */
        pointer-events: none;
    }


  </style>



<section class="history-section">

    
    
    <div class="decor-left"></div>
    <div class="decor-right"></div>


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
              Desde el primer día que Diego vio a María Alejandra
              entrar al trabajo, algo especial sucedió: las miradas hablaron antes que las palabras.

            </p>
            <p class="text-body" data-aos="fade-up">
              Su historia empezó sin planes, y aquella primera cita, el 31 de octubre de 2022, nació de un
              momento espontáneo: un vino compartido y una
              conversación que, de tímida, se volvió la de dos
              personas que parecían conocerse de toda la vida... y que simplemente no quería terminar.
              
            </p>
            <p class="text-body" data-aos="fade-up">
              Hoy, después de más de tres anos de risas, complicidad y
              amor, han decidido dar el paso más importante
              el 30 de mayo de 2026, demostrando que las
              mejores historias no se planean, solo se viven y se eligen cada día.
            </p>

            <br><br><br>

            <div class="audio-container-history" style="margin: 0px auto;">
              <audio id="myAudio" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/sound/song.mp3" preload="auto"></audio>
            </div>
        
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

        </div>

        <!-- <div class="rm-container">
            <img class="history-logo" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/logo.webp" alt="logo">
        </div> -->
        <div class="divider"></div>

        <div class="history-images" data-aos="fade-up">

          <style>
            /* --- ESTILOS DEL CONTADOR --- */
            .countdown-wrapper {
              display: block;
              flex-direction: column;
              align-items: center;
              margin-bottom: 40px;
              top: -140px;
              position: relative;
            }
          </style>

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
              <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/preboda-2.webp" alt="Foto de la pareja" class="circular-image">
              <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/preboda-1.webp" alt="Pareja en las vías del tren" class="rectangular-image">
          </div>
      
      </div>


        


    </div>


    
    
</section><?php }
}
