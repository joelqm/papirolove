<?php
/* Smarty version 5.5.1, created on 2026-08-13 10:32:30
  from 'file:views/cynthiyakevin/components/hero.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a7de38e230fa6_33136803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '270ecccefe2dedb78ac9ba33830123dba4e8c26a' => 
    array (
      0 => 'views/cynthiyakevin/components/hero.tpl',
      1 => 1786635001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a7de38e230fa6_33136803 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\cynthiyakevin\\components';
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

    /* Media Query para Tablets y Celulares */
    @media (max-width: 992px) {
        .wedding-grid {
            width: 100%;
            /* Ocupa todo el ancho */
            grid-template-columns: 1fr;
            /* Una sola columna */
            gap: 40px;
            padding: 20px;
        }

        .col-left,
        .col-right {
            text-align: center;
            transform: translateY(0);
            /* Eliminamos el desfase vertical */
            max-width: 100%;
        }

        .col-center {
            display: none;
            /* Opcional: ocultar el espacio vacío en móviles si no hay foto */
            height: auto;
        }

        .logo {
            width: 80%;
            max-width: 280px;
            top: auto;
            position: relative;
        }

        .count {
            gap: 15px;
        }

        .countdown-number {
            font-size: 1.75rem;
        }

        .countdown-label {
            font-size: 0.9rem;
        }

        .menu {
            flex-direction: column;
            display: none;
        }

    }

    @media (max-width: 700px) {
        .container-page {
            justify-content: flex-start !important;
            padding-top: 2rem !important;
        }

        .header {
            padding-top: 0.5rem !important;
        }

        .wedding-date-2 {
            margin-top: 8px !important;
        }

        .wedding-grid {
            gap: 10px !important;
            padding: 0 !important;
        }

        .button-calendar {
            margin-top: 0.5rem !important;
        }

        .countdown-number {
            font-size: 1.5rem;
        }

        .countdown-label {
            font-size: 0.85rem;
        }

        .logo {
            max-width: 240px;
        }
    }

</style>
<div class="container-page">

    <div class="background" data-aos="fade-up"></div>

    <div class="header" style="justify-items: center;">
        <h1 class="couple-name font-photograph_signature" data-aos="fade-up">Cynthia <span style="margin-left: 1rem;">&</span>
            Kevin</h1>
            <p class="wedding-date-2" data-aos="fade-up">
            31
            .
            10
            .
            26
            </p>
    </div>

    <div class="wedding-grid">

        <!-- Columna izquierda -->
        <!-- <div class="col-left">
            <img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiyakevin/imgs/logo_02.webp" alt="logo" class="logo">
            <audio id="myAudio" src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiyakevin/sound/song.mp3"></audio>
        </div> -->

        <!-- Columna central (solo espacio para ver imagen) -->
        <div class="col-center"></div>

        <!-- Columna derecha -->
        <div class="col-right">

            <button class="button button-calendar">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                </svg>
                Agrega a tu calendario
            </button>

        </div>
    </div>
</div>

<div class="navigation">
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
</div><?php }
}
