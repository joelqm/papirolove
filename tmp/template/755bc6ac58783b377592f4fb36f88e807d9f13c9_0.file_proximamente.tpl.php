<?php
/* Smarty version 5.5.1, created on 2026-05-01 16:14:44
  from 'file:C:\laragon\www\papirolove\views\fernandayromme\proximamente.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69f517c4489b94_07039899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '755bc6ac58783b377592f4fb36f88e807d9f13c9' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\fernandayromme\\proximamente.tpl',
      1 => 1777670082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f517c4489b94_07039899 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\fernandayromme';
?><style>
    @font-face {
        font-family: 'Baskervville-Regular';
        src: url("<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayromme/fonts/Baskervville-Regular.ttf");
        font-display: swap;
    }
    @font-face {
        font-family: 'CalliforniaSignature';
        src: url("<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayromme/fonts/CalliforniaSignature.ttf");
        font-display: swap;
    }

    @font-face {
        font-family: 'newyork_personal';
        src: url("<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayromme/fonts/newyork_personal_use.otf") format("opentype");
        font-display: swap;
    }

    .coming-soon-page {
        min-height: 100vh;
        background: #AFB9A5;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 2rem 1.5rem;
        text-align: center;
        color: #fff;
        font-family: 'Baskervville-Regular', Georgia, serif;
    }

    .coming-soon-card {
        background: #f9f4ef;
        border-radius: 24px;
        padding: 3rem 2rem;
        max-width: 520px;
        width: 100%;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        color: #646B5A;
    }

    .coming-soon-logo {
        width: 130px;
        height: auto;
        margin-bottom: 1.2rem;
    }

    .coming-soon-names {
        font-family: 'newyork_personal', cursive;
        font-size: 3rem;
        line-height: 1;
        color: #646B5A;
        margin: 0 0 0.5rem;
    }

    .coming-soon-date {
        font-family: 'Baskervville-Regular', Georgia, serif;
        font-size: 1.1rem;
        letter-spacing: 4px;
        color: #646B5A;
        margin: 0 0 2rem;
    }

    .coming-soon-date .dot {
        display: inline-block;
        margin: 0 0.4em;
        font-size: 1.2em;
        line-height: 1;
        vertical-align: middle;
    }

    .coming-soon-divider {
        width: 60px;
        height: 1px;
        background: #b8bfa6;
        margin: 0 auto 1.5rem;
    }

    .coming-soon-title {
        font-family: 'Baskervville-Regular', Georgia, serif;
        font-size: 1.6rem;
        font-weight: normal;
        color: #3b5355;
        margin: 0 0 0.6rem;
    }

    .coming-soon-text {
        font-size: 1rem;
        line-height: 1.6;
        color: #646B5A;
        margin: 0 0 1.5rem;
    }

    .coming-soon-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #b8bfa6;
        color: #fff;
        font-family: 'Baskervville-Regular', Georgia, serif;
        font-size: 0.85rem;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        padding: 0.5rem 1.2rem;
        border-radius: 50px;
    }

    .coming-soon-pulse {
        width: 8px;
        height: 8px;
        background: #fff;
        border-radius: 50%;
        animation: comingSoonPulse 1.4s ease-in-out infinite;
    }

    @keyframes comingSoonPulse {
        0%, 100% { opacity: 0.4; transform: scale(1); }
        50%      { opacity: 1;   transform: scale(1.4); }
    }

    @media (max-width: 480px) {
        .coming-soon-card { padding: 2.2rem 1.5rem; }
        .coming-soon-names { font-size: 2.4rem; }
        .coming-soon-title { font-size: 1.3rem; }
        .coming-soon-date { font-size: 0.95rem; letter-spacing: 3px; }
    }
</style>

<div class="coming-soon-page">
    <div class="coming-soon-card">

        <img class="coming-soon-logo"
             src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayromme/imgs/logo.webp"
             alt="Fernanda y Rommel">

        <h1 class="coming-soon-names">Fernanda &amp; Rommel</h1>

        <p class="coming-soon-date">
            30<span class="dot">·</span>05<span class="dot">·</span>26
        </p>

        <div class="coming-soon-divider"></div>

        <h2 class="coming-soon-title">Pronto más novedades</h2>

        <p class="coming-soon-text">
            Estamos preparando con mucho amor cada detalle de nuestra invitación.
            Muy pronto podrás conocer toda la información de nuestra boda.
        </p>

        <span class="coming-soon-badge">
            <span class="coming-soon-pulse"></span>
            Sitio en construcción
        </span>

    </div>
</div>
<?php }
}
