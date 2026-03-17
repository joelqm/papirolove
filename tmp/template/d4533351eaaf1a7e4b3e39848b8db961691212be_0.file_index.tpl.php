<?php
/* Smarty version 5.5.1, created on 2026-03-17 09:19:42
  from 'file:C:\laragon\www\papirolove\views\gabrielayeric_ceremonia\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69b962fede53a2_49635594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4533351eaaf1a7e4b3e39848b8db961691212be' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\gabrielayeric_ceremonia\\index.tpl',
      1 => 1772735258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/gabrielayeric/components/loader.tpl' => 1,
    'file:views/gabrielayeric/components/hero.tpl' => 1,
    'file:views/gabrielayeric/components/history.tpl' => 1,
    'file:views/gabrielayeric/components/information.tpl' => 1,
    'file:views/gabrielayeric/components/galery.tpl' => 1,
    'file:views/gabrielayeric/components/dresscode.tpl' => 1,
    'file:views/gabrielayeric/components/attendance.tpl' => 1,
    'file:views/gabrielayeric/components/gifts.tpl' => 1,
    'file:views/gabrielayeric/components/button-whatsapp.tpl' => 1,
  ),
))) {
function content_69b962fede53a2_49635594 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\gabrielayeric_ceremonia';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_21397682669b962fedd3db1_28603958', "styles");
?>


<?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/history.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/galery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="pattern">
    <?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/dresscode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</div>

<!-- <?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/attendance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?> -->
<?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric/components/button-whatsapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php }
/* {block "styles"} */
class Block_21397682669b962fedd3db1_28603958 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\gabrielayeric_ceremonia';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/gabrielayeric/css/style.css">

<link rel="preload" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/gabrielayeric/fonts/Bellisia.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/gabrielayeric/fonts/Baskervville-Regular.woff2" as="font" type="font/woff2" crossorigin>

<?php
}
}
/* {/block "styles"} */
}
