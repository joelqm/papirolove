<?php
/* Smarty version 5.5.1, created on 2026-01-09 00:16:15
  from 'file:partials/script.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69608f1f10daa5_39453290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53dbfa35c7b158dabe36ee56d927b0558d8a1df8' => 
    array (
      0 => 'partials/script.tpl',
      1 => 1767935771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69608f1f10daa5_39453290 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\magnumucsm\\views\\layout\\next-theme\\partials';
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta_js'];?>
jquery-3.7.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta_js'];?>
viewport.jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta_js'];?>
bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta_js'];?>
jquery.nice-select.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta_js'];?>
jquery.waypoints.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta_js'];?>
jquery.counterup.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta_js'];?>
swiper-bundle.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta_js'];?>
jquery.meanmenu.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta_js'];?>
jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta_js'];?>
wow.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta_js'];?>
main.js"><?php echo '</script'; ?>
>

<input type="hidden" id="root" value="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
">

<?php if ((true && (true && null !== ($_smarty_tpl->getValue('_layoutParams')['js'] ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('_layoutParams')['js'])) {?> <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_layoutParams')['js'], 'js');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('js')->value) {
$foreach0DoElse = false;
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('js');?>
?v=<?php echo $_smarty_tpl->getValue('_layoutParams')['filever'];?>
" type="text/JavaScript"><?php echo '</script'; ?>
>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> <?php }
}
}
