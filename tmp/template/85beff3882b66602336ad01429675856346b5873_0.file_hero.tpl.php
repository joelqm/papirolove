<?php
/* Smarty version 5.5.1, created on 2026-02-27 17:53:39
  from 'file:views/gabrielayeric/components/hero.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69a22073903ea0_15458645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85beff3882b66602336ad01429675856346b5873' => 
    array (
      0 => 'views/gabrielayeric/components/hero.tpl',
      1 => 1772232816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a22073903ea0_15458645 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\gabrielayeric\\components';
?><div class="container-page">
    <div class="background" data-aos="fade-up"></div>

    <div class="header" style="justify-items: center;">
        <h1 class="couple-name font-Alana" data-aos="fade-up">Gabriela <span style="margin-left: 1rem;">y</span>
            Eric</h1>
        <p class="wedding-date font-Baskervville" data-aos="fade-up">SÁBADO, 18 DE ABRIL DEL 2026</p>

        <button id="player" class="button-2 button-hovers">
            <i class="fa-solid fa-play play-icon"></i>
            <i class="fa-solid fa-pause pause-icon" style="display: none;"></i>
            <p>NUESTRA CANCIÓN</p>
        </button>
    </div>

    <div class="content">
        <div class="buttons">
            <button class="button button-hover button-calendar">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                </svg>
                <p>AGREGAR A CALENDARIO</p>
            </button>
            <audio id="myAudio" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/gabrielayeric/sound/song.mp3"></audio>
            <!-- <button id="player" class="button-2 button-hovers">
                <i class="fa-solid fa-play play-icon"></i>
                <i class="fa-solid fa-pause pause-icon" style="display: none;"></i>
                <p>NUESTRA CANCIÓN</p>
            </button> -->
        </div>

        <div class="count" id="countdown">
            <div class="countdown-item">
                <span class="countdown-number font-BaskervilleBT" id="counter1">00</span>
                <span class="countdown-label font-BaskervilleBT">DÍAS</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number font-BaskervilleBT" id="counter2">00</span>
                <span class="countdown-label font-BaskervilleBT">HORAS</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number font-BaskervilleBT" id="counter3">00</span>
                <span class="countdown-label font-BaskervilleBT">MINUTOS</span>
            </div>
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
</div><?php }
}
