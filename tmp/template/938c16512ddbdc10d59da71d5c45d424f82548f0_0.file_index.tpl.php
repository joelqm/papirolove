<?php
/* Smarty version 5.5.1, created on 2026-01-22 10:53:08
  from 'file:C:\laragon\www\papirolove\views\shirleyycrysthian\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_697247e4182659_51636665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '938c16512ddbdc10d59da71d5c45d424f82548f0' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\shirleyycrysthian\\index.tpl',
      1 => 1761152961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/shirleyycrysthian/components/loader.tpl' => 1,
    'file:views/shirleyycrysthian/components/hero.tpl' => 1,
    'file:views/shirleyycrysthian/components/history.tpl' => 1,
    'file:views/shirleyycrysthian/components/information.tpl' => 1,
    'file:views/shirleyycrysthian/components/dresscode.tpl' => 1,
    'file:views/shirleyycrysthian/components/galery.tpl' => 1,
    'file:views/shirleyycrysthian/components/attendance.tpl' => 1,
    'file:views/shirleyycrysthian/components/gifts.tpl' => 1,
    'file:views/shirleyycrysthian/components/button-whatsapp.tpl' => 1,
  ),
))) {
function content_697247e4182659_51636665 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\shirleyycrysthian';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1267131013697247e417b292_78932232', "styles");
?>



<?php $_smarty_tpl->renderSubTemplate("file:views/shirleyycrysthian/components/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/shirleyycrysthian/components/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/shirleyycrysthian/components/history.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/shirleyycrysthian/components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/shirleyycrysthian/components/dresscode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>   
<?php $_smarty_tpl->renderSubTemplate("file:views/shirleyycrysthian/components/galery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="pattern">
    <?php $_smarty_tpl->renderSubTemplate("file:views/shirleyycrysthian/components/attendance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->renderSubTemplate("file:views/shirleyycrysthian/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</div>
<?php $_smarty_tpl->renderSubTemplate("file:views/shirleyycrysthian/components/button-whatsapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_1267131013697247e417b292_78932232 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\shirleyycrysthian';
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/shirleyycrysthian/css/style.css">
<?php
}
}
/* {/block "styles"} */
}
