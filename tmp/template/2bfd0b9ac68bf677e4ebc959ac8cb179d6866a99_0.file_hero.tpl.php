<?php
/* Smarty version 5.5.1, created on 2026-02-24 11:37:45
  from 'file:views/shirleyycrysthian/components/hero.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_699dd3d9e114d8_79593628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bfd0b9ac68bf677e4ebc959ac8cb179d6866a99' => 
    array (
      0 => 'views/shirleyycrysthian/components/hero.tpl',
      1 => 1771949990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_699dd3d9e114d8_79593628 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\shirleyycrysthian\\components';
?><div class="container-page">
    <div class="background" data-aos="fade-up"></div>

    <div class="header">
        <h1 class="couple-name font-Scriptina" data-aos="fade-up">Shirley <span style="margin-left: 1rem;">y</span> Crysthian</h1>
        <p class="wedding-date" data-aos="fade-up">SÁBADO, 12 DE JULIO DEL 2025</p>
    </div>

    <div class="content">
        <div class="count" id="countdown">
            <div class="countdown-item">
                <span class="countdown-number font-forum" id="counter1">00</span>
                <span class="countdown-label font-forum">DÍAS</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number font-forum" id="counter2">00</span>
                <span class="countdown-label font-forum">HORAS</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number font-forum" id="counter3">00</span>
                <span class="countdown-label font-forum">MINUTOS</span>
            </div>
        </div>

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
views/shirleyycrysthian/sound/song.mp3"></audio>
            <button id="player" class="button-2 button-hovers">
                <i class="fa-solid fa-play play-icon"></i>
                <i class="fa-solid fa-pause pause-icon" style="display: none;"></i>
                <p>NUESTRA CANCIÓN</p>
            </button>
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
