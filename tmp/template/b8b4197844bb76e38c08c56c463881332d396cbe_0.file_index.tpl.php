<?php
/* Smarty version 5.5.1, created on 2026-07-23 16:39:36
  from 'file:C:\laragon\www\papirolove\views\julissayruben\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a628a18f0d5c5_04663631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8b4197844bb76e38c08c56c463881332d396cbe' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\julissayruben\\index.tpl',
      1 => 1784842746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/julissayruben/components/loader.tpl' => 1,
    'file:views/julissayruben/components/cart.tpl' => 1,
    'file:views/julissayruben/components/hero.tpl' => 1,
    'file:views/julissayruben/components/history.tpl' => 1,
    'file:views/julissayruben/components/information.tpl' => 1,
    'file:views/julissayruben/components/galery.tpl' => 1,
    'file:views/julissayruben/components/dresscode.tpl' => 1,
    'file:views/julissayruben/components/attendance.tpl' => 1,
    'file:views/julissayruben/components/gifts.tpl' => 1,
    'file:views/julissayruben/components/button-whatsapp.tpl' => 1,
  ),
))) {
function content_6a628a18f0d5c5_04663631 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\julissayruben';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11502730746a628a18efc0f8_23870917', "styles");
?>



<?php $_smarty_tpl->renderSubTemplate("file:views/julissayruben/components/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/julissayruben/components/cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/julissayruben/components/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/julissayruben/components/history.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/julissayruben/components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/julissayruben/components/galery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<?php $_smarty_tpl->renderSubTemplate("file:views/julissayruben/components/dresscode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/julissayruben/components/attendance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/julissayruben/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/julissayruben/components/button-whatsapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_11502730746a628a18efc0f8_23870917 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\julissayruben';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/julissayruben/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php
}
}
/* {/block "styles"} */
}
