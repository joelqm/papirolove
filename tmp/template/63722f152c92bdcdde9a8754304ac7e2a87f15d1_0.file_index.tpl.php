<?php
/* Smarty version 5.5.1, created on 2026-05-01 16:00:10
  from 'file:C:\laragon\www\papirolove\views\fernandayromme\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69f5145a7aba90_19824662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63722f152c92bdcdde9a8754304ac7e2a87f15d1' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\fernandayromme\\index.tpl',
      1 => 1777669207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/fernandayromme/components/loader.tpl' => 1,
    'file:views/fernandayromme/components/cart.tpl' => 1,
    'file:views/fernandayromme/components/hero.tpl' => 1,
    'file:views/fernandayromme/components/history.tpl' => 1,
    'file:views/fernandayromme/components/information.tpl' => 1,
    'file:views/fernandayromme/components/galery.tpl' => 1,
    'file:views/fernandayromme/components/dresscode.tpl' => 1,
    'file:views/fernandayromme/components/attendance.tpl' => 1,
    'file:views/fernandayromme/components/gifts.tpl' => 1,
    'file:views/fernandayromme/components/button-whatsapp.tpl' => 1,
  ),
))) {
function content_69f5145a7aba90_19824662 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\fernandayromme';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_51725356169f5145a6bad42_89215634', "styles");
?>



<?php $_smarty_tpl->renderSubTemplate("file:views/fernandayromme/components/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/fernandayromme/components/cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/fernandayromme/components/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/fernandayromme/components/history.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/fernandayromme/components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/fernandayromme/components/galery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<?php $_smarty_tpl->renderSubTemplate("file:views/fernandayromme/components/dresscode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/fernandayromme/components/attendance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/fernandayromme/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/fernandayromme/components/button-whatsapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_51725356169f5145a6bad42_89215634 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\fernandayromme';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayromme/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php
}
}
/* {/block "styles"} */
}
