<?php
/* Smarty version 5.5.1, created on 2026-01-21 15:27:46
  from 'file:template_clean.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_697136c27dcfe1_61345732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f58fe6a656fc99761169b5ebc4d33df41e22386' => 
    array (
      0 => 'template_clean.tpl',
      1 => 1768064274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/head.tpl' => 1,
    'file:partials/preloader.tpl' => 1,
    'file:partials/backtotop.tpl' => 1,
    'file:partials/Offcanvas.tpl' => 1,
    'file:partials/breadcrumb.tpl' => 1,
    'file:partials/script.tpl' => 1,
  ),
))) {
function content_697136c27dcfe1_61345732 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\layout\\next-theme';
?><!DOCTYPE html>
<html lang="es">
<?php $_smarty_tpl->renderSubTemplate("file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<body class="<?php echo (($tmp = $_smarty_tpl->getValue('bodyClass') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">

    <!-- <?php $_smarty_tpl->renderSubTemplate("file:partials/preloader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?> -->

    <?php $_smarty_tpl->renderSubTemplate("file:partials/backtotop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php $_smarty_tpl->renderSubTemplate("file:partials/Offcanvas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <?php if ((true && ($_smarty_tpl->hasVariable('titulo') && null !== ($_smarty_tpl->getValue('titulo') ?? null))) && $_smarty_tpl->getValue('titulo') != 'Inicio' && !(true && ($_smarty_tpl->hasVariable('hide_breadcrumb') && null !== ($_smarty_tpl->getValue('hide_breadcrumb') ?? null)))) {?>
    <?php $_smarty_tpl->renderSubTemplate("file:partials/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php }?>

    <main>
        <?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('_contenido'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </main>

    <?php $_smarty_tpl->renderSubTemplate("file:partials/script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</body>

</html><?php }
}
