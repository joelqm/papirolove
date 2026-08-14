<?php
/* Smarty version 5.5.1, created on 2026-08-07 09:06:17
  from 'file:C:\laragon\www\papirolove\views\mayteyandree\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a75e659caca93_24669477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31848c9543071d12ab59f13465dda536a8661038' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\mayteyandree\\index.tpl',
      1 => 1786111280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/mayteyandree/components/cart.tpl' => 1,
    'file:views/mayteyandree/components/hero.tpl' => 1,
    'file:views/mayteyandree/components/history.tpl' => 1,
    'file:views/mayteyandree/components/information.tpl' => 1,
    'file:views/mayteyandree/components/galery.tpl' => 1,
    'file:views/mayteyandree/components/dresscode.tpl' => 1,
    'file:views/mayteyandree/components/attendance.tpl' => 1,
    'file:views/mayteyandree/components/gifts.tpl' => 1,
    'file:views/mayteyandree/components/button-whatsapp.tpl' => 1,
  ),
))) {
function content_6a75e659caca93_24669477 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\mayteyandree';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2143799856a75e659c86209_63253824', "styles");
?>


<?php $_smarty_tpl->renderSubTemplate("file:views/mayteyandree/components/cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/mayteyandree/components/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/mayteyandree/components/history.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/mayteyandree/components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/mayteyandree/components/galery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<div class="dresscode-attendance-wrapper">
    <div class="decor-corner-top-left"></div>
    <div class="decor-corner-bottom-right"></div>

    <?php $_smarty_tpl->renderSubTemplate("file:views/mayteyandree/components/dresscode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->renderSubTemplate("file:views/mayteyandree/components/attendance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:views/mayteyandree/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/mayteyandree/components/button-whatsapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_2143799856a75e659c86209_63253824 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\mayteyandree';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mayteyandree/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php
}
}
/* {/block "styles"} */
}
