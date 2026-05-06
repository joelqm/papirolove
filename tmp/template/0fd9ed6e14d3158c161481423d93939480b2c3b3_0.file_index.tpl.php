<?php
/* Smarty version 5.5.1, created on 2026-05-06 16:03:22
  from 'file:C:\laragon\www\papirolove\views\mariaalejandraydiego\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69fbac9a373891_62122995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fd9ed6e14d3158c161481423d93939480b2c3b3' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\mariaalejandraydiego\\index.tpl',
      1 => 1778101378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/mariaalejandraydiego/components/cart.tpl' => 1,
    'file:views/mariaalejandraydiego/components/hero.tpl' => 1,
    'file:views/mariaalejandraydiego/components/history.tpl' => 1,
    'file:views/mariaalejandraydiego/components/information.tpl' => 1,
    'file:views/mariaalejandraydiego/components/galery.tpl' => 1,
    'file:views/mariaalejandraydiego/components/dresscode.tpl' => 1,
    'file:views/mariaalejandraydiego/components/attendance.tpl' => 1,
    'file:views/mariaalejandraydiego/components/gifts.tpl' => 1,
    'file:views/mariaalejandraydiego/components/button-whatsapp.tpl' => 1,
  ),
))) {
function content_69fbac9a373891_62122995 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\mariaalejandraydiego';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_81759676569fbac9a241e46_48829482', "styles");
?>


<?php $_smarty_tpl->renderSubTemplate("file:views/mariaalejandraydiego/components/cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/mariaalejandraydiego/components/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/mariaalejandraydiego/components/history.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/mariaalejandraydiego/components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/mariaalejandraydiego/components/galery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<div class="dresscode-attendance-wrapper">
    <div class="decor-corner-top-left"></div>
    <div class="decor-corner-bottom-right"></div>

    <?php $_smarty_tpl->renderSubTemplate("file:views/mariaalejandraydiego/components/dresscode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->renderSubTemplate("file:views/mariaalejandraydiego/components/attendance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:views/mariaalejandraydiego/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/mariaalejandraydiego/components/button-whatsapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_81759676569fbac9a241e46_48829482 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\mariaalejandraydiego';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php
}
}
/* {/block "styles"} */
}
