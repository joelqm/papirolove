<?php
/* Smarty version 5.5.1, created on 2026-03-14 11:29:18
  from 'file:views/sofiaygabriel/components/hero.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69b58cde8d7b83_60226892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5247d3670dbe9f182464745fdc1b036625d5d84' => 
    array (
      0 => 'views/sofiaygabriel/components/hero.tpl',
      1 => 1773505756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69b58cde8d7b83_60226892 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\sofiaygabriel\\components';
?><style>
    #player {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        /* Espacio entre el icono y el texto */
        margin: 20px auto 0;
        /* Centrado horizontal automático */
        cursor: pointer;
    }

    .container-page {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .wedding-grid {

        width: 1200px;
        /* no ocupa toda la pantalla */

        display: grid;
        grid-template-columns: 1fr 1fr 1fr;

        align-items: center;
    }

    /* columna izquierda */

    .col-left {
        text-align: right;
        transform: translateY(-60px);
    }

    /* columna centro (solo deja ver la foto) */

    .col-center {
        height: 400px;
    }

    /* columna derecha */

    .col-right {
        max-width: 420px;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* centra verticalmente */
        align-items: center;
        /* centra horizontalmente */

        text-align: center;
        /* centra el texto */
        height: 100%;
        transform: translateY(60px);
    }

    .logo {
        width: 380px;
        margin-bottom: 20px;
    }

    /* contador */

    .count {
        display: flex;
        gap: 30px;
        justify-content: center;
        margin: 20px 0;
    }

    .countdown-number {
        font-size: 40px;
    }

    .countdown-label {
        font-size: 14px;
    }
</style>
<div class="container-page">

    <div class="background" data-aos="fade-up"></div>

    <div class="wedding-grid">

        <!-- Columna izquierda -->
        <div class="col-left">

            <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/sofiaygabriel/imgs/logo_02.webp" alt="logo" class="logo">

            <audio id="myAudio" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/sofiaygabriel/sound/song.mp3"></audio>

            <button id="player" class="button-2">
                <i class="fa-solid fa-play play-icon"></i>
                <i class="fa-solid fa-pause pause-icon" style="display:none"></i>
                NUESTRA CANCIÓN
            </button>

        </div>

        <!-- Columna central (solo espacio para ver imagen) -->
        <div class="col-center"></div>

        <!-- Columna derecha -->
        <div class="col-right">

            <p class="wedding-date">SÁBADO, 02 DE MAYO DEL 2026</p>

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

            <button class="button button-calendar">
                AGREGAR A CALENDARIO
            </button>

        </div>

    </div>

</div>


<div class="navigation">
    <a href="javascript:void(0);" class="icon" id="hamburger-icon">
        <i class="fas fa-bars"></i>
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
