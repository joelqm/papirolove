<?php
/* Smarty version 5.5.1, created on 2026-04-30 13:12:08
  from 'file:C:\laragon\www\papirolove\views\fernandayrommel\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69f39b78ded3b7_89833704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0ffd73a3f421e9fdac6c29c7aac488fd9875fed' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\fernandayrommel\\index.tpl',
      1 => 1777572672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/fernandayrommel/components/loader.tpl' => 1,
    'file:views/fernandayrommel/components/cart.tpl' => 1,
    'file:views/fernandayrommel/components/hero.tpl' => 1,
    'file:views/fernandayrommel/components/information.tpl' => 1,
    'file:views/fernandayrommel/components/galery.tpl' => 1,
    'file:views/fernandayrommel/components/attendance.tpl' => 1,
    'file:views/fernandayrommel/components/gifts.tpl' => 1,
    'file:views/fernandayrommel/components/button-whatsapp.tpl' => 1,
  ),
))) {
function content_69f39b78ded3b7_89833704 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\fernandayrommel';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_179231593169f39b78de44e7_76638762', "styles");
?>



<?php $_smarty_tpl->renderSubTemplate("file:views/fernandayrommel/components/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/fernandayrommel/components/cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/fernandayrommel/components/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/fernandayrommel/components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/fernandayrommel/components/galery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>



<?php $_smarty_tpl->renderSubTemplate("file:views/fernandayrommel/components/attendance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/fernandayrommel/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/fernandayrommel/components/button-whatsapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_179231593169f39b78de44e7_76638762 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\fernandayrommel';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/fernandayrommel/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php
}
}
/* {/block "styles"} */
}
