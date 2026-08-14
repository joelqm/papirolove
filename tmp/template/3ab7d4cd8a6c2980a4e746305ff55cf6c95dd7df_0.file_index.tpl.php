<?php
/* Smarty version 5.5.1, created on 2026-08-11 10:36:39
  from 'file:C:\laragon\www\papirolove\views\danielayjean\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a7b4187731310_93751041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ab7d4cd8a6c2980a4e746305ff55cf6c95dd7df' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\danielayjean\\index.tpl',
      1 => 1786462023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/danielayjean/components/loader.tpl' => 1,
    'file:views/danielayjean/components/cart.tpl' => 1,
    'file:views/danielayjean/components/gifts.tpl' => 1,
  ),
))) {
function content_6a7b4187731310_93751041 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\danielayjean';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_20791363536a7b4187719a64_74057724', "styles");
?>



<?php $_smarty_tpl->renderSubTemplate("file:views/danielayjean/components/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/danielayjean/components/cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/danielayjean/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_20791363536a7b4187719a64_74057724 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\danielayjean';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/danielayjean/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php
}
}
/* {/block "styles"} */
}
