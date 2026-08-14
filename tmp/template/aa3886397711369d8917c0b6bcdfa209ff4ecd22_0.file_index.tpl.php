<?php
/* Smarty version 5.5.1, created on 2026-08-13 11:28:25
  from 'file:C:\laragon\www\papirolove\views\e404\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a7df0a994e1f6_48200929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa3886397711369d8917c0b6bcdfa209ff4ecd22' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\e404\\index.tpl',
      1 => 1786638433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a7df0a994e1f6_48200929 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\e404';
?><div class="error-404">
    <div class="error-404__card">
        <p class="error-404__code">404</p>
        <h1 class="error-404__title">Página no encontrada</h1>
        <p class="error-404__text">
            Lo sentimos, la dirección que buscas no existe o fue movida.
        </p>
        <a class="error-404__btn" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
">Volver al inicio</a>
    </div>
</div>


<style>
    * { box-sizing: border-box; }
    body {
        margin: 0;
        min-height: 100vh;
        font-family: Georgia, "Times New Roman", serif;
        background: linear-gradient(160deg, #001a2e 0%, #002640 55%, #0a3a52 100%);
        color: #F3F0E2;
    }
    .error-404 {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem 1.25rem;
        text-align: center;
    }
    .error-404__card {
        max-width: 420px;
        width: 100%;
    }
    .error-404__code {
        margin: 0;
        font-size: clamp(4rem, 14vw, 6rem);
        line-height: 1;
        letter-spacing: 0.08em;
        opacity: 0.35;
        font-weight: normal;
    }
    .error-404__title {
        margin: 0.75rem 0 0.85rem;
        font-size: clamp(1.6rem, 5vw, 2.1rem);
        font-weight: normal;
        color: #F3F0E2;
    }
    .error-404__text {
        margin: 0 0 2rem;
        font-size: 1.05rem;
        line-height: 1.5;
        color: rgba(243, 240, 226, 0.85);
    }
    .error-404__btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 200px;
        padding: 0.85rem 1.8rem;
        border-radius: 999px;
        background: #F3F0E2;
        color: #002640;
        text-decoration: none;
        font-size: 1.05rem;
        transition: transform 0.2s ease, opacity 0.2s ease;
    }
    .error-404__btn:hover {
        transform: translateY(-2px);
        opacity: 0.95;
    }
</style>

<?php }
}
