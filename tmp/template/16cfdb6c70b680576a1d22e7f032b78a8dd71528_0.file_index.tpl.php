<?php
/* Smarty version 5.5.1, created on 2026-02-28 09:47:30
  from 'file:C:\laragon\www\papirolove\views\gabrielayeric\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69a30002ebf458_64636693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16cfdb6c70b680576a1d22e7f032b78a8dd71528' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\gabrielayeric\\index.tpl',
      1 => 1772289980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/gabrielayeric/components/loader.tpl' => 1,
    'file:views/gabrielayeric/components/hero.tpl' => 1,
    'file:views/gabrielayeric/components/history.tpl' => 1,
    'file:views/gabrielayeric/components/information.tpl' => 1,
    'file:views/gabrielayeric/components/galery.tpl' => 1,
    'file:views/gabrielayeric/components/dresscode.tpl' => 1,
    'file:views/gabrielayeric/components/attendance.tpl' => 1,
    'file:views/gabrielayeric/components/gifts.tpl' => 1,
    'file:views/gabrielayeric/components/button-whatsapp.tpl' => 1,
  ),
))) {
function content_69a30002ebf458_64636693 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\gabrielayeric';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_197431949069a30002c0a376_15182369', "styles");
?>


<?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/history.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/galery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="pattern">
    <?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/dresscode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</div>

<!-- <?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/attendance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?> -->
<?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/button-whatsapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_197431949069a30002c0a376_15182369 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\gabrielayeric';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/gabrielayeric/css/style.css">
<?php
}
}
/* {/block "styles"} */
}
