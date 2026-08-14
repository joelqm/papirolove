<?php
/* Smarty version 5.5.1, created on 2026-08-01 09:40:56
  from 'file:C:\laragon\www\papirolove\views\flaviayanibal\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a6e0578566204_97283435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9587c10557a26e10aff3f6a375b9e68b3760aad5' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\flaviayanibal\\index.tpl',
      1 => 1785595243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/flaviayanibal/components/loader.tpl' => 1,
    'file:views/flaviayanibal/components/cart.tpl' => 1,
    'file:views/flaviayanibal/components/gifts.tpl' => 1,
  ),
))) {
function content_6a6e0578566204_97283435 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\flaviayanibal';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_20708041636a6e057855e5e5_08692438', "styles");
?>



<?php $_smarty_tpl->renderSubTemplate("file:views/flaviayanibal/components/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/flaviayanibal/components/cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/flaviayanibal/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_20708041636a6e057855e5e5_08692438 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\flaviayanibal';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/flaviayanibal/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php
}
}
/* {/block "styles"} */
}
