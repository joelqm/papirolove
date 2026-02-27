<?php
/* Smarty version 5.5.1, created on 2026-01-26 14:24:22
  from 'file:template_basic.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6977bf666b79d0_58733798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bd157f0757b167e996d36c9df4d5a79560326db' => 
    array (
      0 => 'template_basic.tpl',
      1 => 1769451209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6977bf666b79d0_58733798 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\layout\\neela';
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Pragma" content="no-cache">
        <meta name="MobileOptimized" content="width" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style"
            content="black-translucent" />
        <meta name="description"
            content="<?php echo $_smarty_tpl->getValue('descripcion');?>
 " />
        <meta name="keywords" content />

        <!-- <link rel="icon" type="image/png" sizes="16x16"
            href="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
img/f_i/<?php echo $_smarty_tpl->getValue('_layoutParams')['configs']['favicon'];?>
"> -->
        <?php echo '<script'; ?>
 type="text/javascript"
            src="//code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript"
            src="//code.jquery.com/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 async defer
            src="https://assets.pinterest.com/js/pinit.js"><?php echo '</script'; ?>
>

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
            rel="stylesheet">
        <title>CELEBREMOS</title>
    </head>
    <body>
        <input type="hidden" id="root" value="<?php echo $_smarty_tpl->getValue('_layoutParams')['host2'];?>
">
        
        <?php if ((true && ($_smarty_tpl->hasVariable('_contenido') && null !== ($_smarty_tpl->getValue('_contenido') ?? null)))) {?>
            <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('_contenido'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <?php }?>
        

        <?php echo '<script'; ?>

            src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
        AOS.init();
    <?php echo '</script'; ?>
>

        <?php if ((true && (true && null !== ($_smarty_tpl->getValue('_layoutParams')['js'] ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('_layoutParams')['js'])) {?>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_layoutParams')['js'], 'js');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('js')->value) {
$foreach0DoElse = false;
?>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('js');?>
?v=<?php echo $_smarty_tpl->getValue('_layoutParams')['filever'];?>
"
            type="text/JavaScript"><?php echo '</script'; ?>
>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        <?php }?>
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

        <!-- SweetAlert2 JS -->
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@11"><?php echo '</script'; ?>
>

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <?php echo '<script'; ?>

            src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"><?php echo '</script'; ?>
>

            
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"><?php echo '</script'; ?>
>
        <footer>
            <p>© <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),"%Y");?>
 celebremos.pe - Todos los derechos reservados. -
                Contáctanos</p>
        </footer>

        <style>
            

footer {
    text-align: center;
    background: #b57966;
    color: #fff;
    font-family: "Forum";
    padding: 1rem 0rem;
}
        </style>

    </body>
</html>
<?php }
}
