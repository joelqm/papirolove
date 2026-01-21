<?php
/* Smarty version 5.5.1, created on 2026-01-08 16:01:08
  from 'file:layouts/layoutTop2.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69601b14f01f18_15809890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ec7fdb5627ac5a05a6a8c6d3ea8e86c8a08e71a' => 
    array (
      0 => 'layouts/layoutTop2.tpl',
      1 => 1767906067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./partials/head.tpl' => 1,
    'file:./partials/backtotop.tpl' => 1,
    'file:./partials/Offcanvas.tpl' => 1,
  ),
))) {
function content_69601b14f01f18_15809890 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\magnumucsm\\views\\layout\\next-theme\\layouts';
?><!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<?php $_smarty_tpl->renderSubTemplate("file:./partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<body class="<?php echo '<?php'; ?>
 echo (isset($bodyClass) ? $bodyClass   : '')<?php echo '?>'; ?>
">

    <!-- Back To Top Start -->
    <?php $_smarty_tpl->renderSubTemplate("file:./partials/backtotop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <!-- Offcanvas Area Start -->
    <?php $_smarty_tpl->renderSubTemplate("file:./partials/Offcanvas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
