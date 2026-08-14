<?php
/* Smarty version 5.5.1, created on 2026-08-14 09:48:56
  from 'file:C:\laragon\www\papirolove\views\cynthiaykevin\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a7f2ad87a55b7_28933868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '310630b648f936c2669e79612fca1096ac833009' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\cynthiaykevin\\index.tpl',
      1 => 1786718742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/cynthiaykevin/components/cart.tpl' => 1,
    'file:views/cynthiaykevin/components/hero.tpl' => 1,
    'file:views/cynthiaykevin/components/history.tpl' => 1,
    'file:views/cynthiaykevin/components/information.tpl' => 1,
    'file:views/cynthiaykevin/components/galery.tpl' => 1,
    'file:views/cynthiaykevin/components/dresscode.tpl' => 1,
    'file:views/cynthiaykevin/components/attendance.tpl' => 1,
    'file:views/cynthiaykevin/components/gifts.tpl' => 1,
    'file:views/cynthiaykevin/components/button-whatsapp.tpl' => 1,
  ),
))) {
function content_6a7f2ad87a55b7_28933868 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\cynthiaykevin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6640909696a7f2ad878ab45_97211103', "styles");
?>


<?php $_smarty_tpl->renderSubTemplate("file:views/cynthiaykevin/components/cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/cynthiaykevin/components/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/cynthiaykevin/components/history.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/cynthiaykevin/components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/cynthiaykevin/components/galery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<div class="dresscode-attendance-wrapper">
    <img class="decor-corner-top-left"
         src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiaykevin/imgs/imagen_dresscode_izq.webp"
         alt=""
         aria-hidden="true">
    <div class="decor-corner-bottom-right"></div>

    <?php $_smarty_tpl->renderSubTemplate("file:views/cynthiaykevin/components/dresscode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->renderSubTemplate("file:views/cynthiaykevin/components/attendance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:views/cynthiaykevin/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/cynthiaykevin/components/button-whatsapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_6640909696a7f2ad878ab45_97211103 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\cynthiaykevin';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiaykevin/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php
}
}
/* {/block "styles"} */
}
