<?php
/* Smarty version 5.5.1, created on 2026-08-01 09:22:25
  from 'file:views/flaviayanibal/components/hero.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a6e0121034792_67006246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cd1e1640be5da1e2f84ca4295dc555ebce00ff3' => 
    array (
      0 => 'views/flaviayanibal/components/hero.tpl',
      1 => 1785594044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a6e0121034792_67006246 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\flaviayanibal\\components';
?><div class="container-page">

    <div class="background" data-aos="fade-up"></div>

    <div class="hero-content" data-aos="fade-up">
        <img class="hero-logo"
             src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/flaviayanibal/imgs/logo.webp"
             alt="Flavia y Aníbal">

        <h1 class="couple-name">Flavia <span class="couple-amp">&</span> Aníbal</h1>

        <p class="wedding-date">
            10<span class="date-dot">·</span>10<span class="date-dot">·</span>26
        </p>

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
</div>
<?php }
}
