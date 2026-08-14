<?php
/* Smarty version 5.5.1, created on 2026-08-13 10:32:30
  from 'file:C:\laragon\www\papirolove\views\cynthiyakevin\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a7de38e116238_81812327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e7250aab4a1fba0ddd81cf5dab21962a97e88b4' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\cynthiyakevin\\index.tpl',
      1 => 1786635001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/cynthiyakevin/components/cart.tpl' => 1,
    'file:views/cynthiyakevin/components/hero.tpl' => 1,
    'file:views/cynthiyakevin/components/history.tpl' => 1,
    'file:views/cynthiyakevin/components/information.tpl' => 1,
    'file:views/cynthiyakevin/components/galery.tpl' => 1,
    'file:views/cynthiyakevin/components/dresscode.tpl' => 1,
    'file:views/cynthiyakevin/components/attendance.tpl' => 1,
    'file:views/cynthiyakevin/components/gifts.tpl' => 1,
    'file:views/cynthiyakevin/components/button-whatsapp.tpl' => 1,
  ),
))) {
function content_6a7de38e116238_81812327 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\cynthiyakevin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10143857556a7de38e0fe9a6_91095154', "styles");
?>


<?php $_smarty_tpl->renderSubTemplate("file:views/cynthiyakevin/components/cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/cynthiyakevin/components/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/cynthiyakevin/components/history.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/cynthiyakevin/components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/cynthiyakevin/components/galery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<div class="dresscode-attendance-wrapper">
    <div class="decor-corner-top-left"></div>
    <div class="decor-corner-bottom-right"></div>

    <?php $_smarty_tpl->renderSubTemplate("file:views/cynthiyakevin/components/dresscode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->renderSubTemplate("file:views/cynthiyakevin/components/attendance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:views/cynthiyakevin/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/cynthiyakevin/components/button-whatsapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_10143857556a7de38e0fe9a6_91095154 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\cynthiyakevin';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiyakevin/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php
}
}
/* {/block "styles"} */
}
