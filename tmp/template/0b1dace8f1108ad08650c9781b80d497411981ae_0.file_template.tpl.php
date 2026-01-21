<?php
/* Smarty version 5.5.1, created on 2026-01-08 16:34:20
  from 'file:template.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_696022dc8304c6_24141703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b1dace8f1108ad08650c9781b80d497411981ae' => 
    array (
      0 => 'template.tpl',
      1 => 1767907980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/head.tpl' => 1,
    'file:partials/preloader.tpl' => 1,
    'file:partials/backtotop.tpl' => 1,
    'file:partials/Offcanvas.tpl' => 1,
    'file:partials/header.tpl' => 1,
    'file:partials/breadcrumb.tpl' => 1,
    'file:partials/footer.tpl' => 1,
    'file:partials/script.tpl' => 1,
  ),
))) {
function content_696022dc8304c6_24141703 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\magnumucsm\\views\\layout\\next-theme';
?><!DOCTYPE html>
<html lang="es">
<?php $_smarty_tpl->renderSubTemplate("file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<body class="<?php echo (($tmp = $_smarty_tpl->getValue('bodyClass') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

    <?php $_smarty_tpl->renderSubTemplate("file:partials/preloader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php $_smarty_tpl->renderSubTemplate("file:partials/backtotop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php $_smarty_tpl->renderSubTemplate("file:partials/Offcanvas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php $_smarty_tpl->renderSubTemplate("file:partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php if ((true && ($_smarty_tpl->hasVariable('titulo') && null !== ($_smarty_tpl->getValue('titulo') ?? null))) && $_smarty_tpl->getValue('titulo') != 'Inicio' && !(true && ($_smarty_tpl->hasVariable('hide_breadcrumb') && null !== ($_smarty_tpl->getValue('hide_breadcrumb') ?? null)))) {?>
    <?php $_smarty_tpl->renderSubTemplate("file:partials/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <main>
        <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('_contenido'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </main>

    <?php $_smarty_tpl->renderSubTemplate("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php $_smarty_tpl->renderSubTemplate("file:partials/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</body>

</html><?php }
}
