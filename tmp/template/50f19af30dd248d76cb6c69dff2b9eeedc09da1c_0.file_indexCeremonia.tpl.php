<?php
/* Smarty version 5.5.1, created on 2026-03-17 09:56:31
  from 'file:C:\laragon\www\papirolove\views\gabrielayeric_ceremonia\indexCeremonia.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69b96b9f925a12_88780710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50f19af30dd248d76cb6c69dff2b9eeedc09da1c' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\gabrielayeric_ceremonia\\indexCeremonia.tpl',
      1 => 1773759381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/gabrielayeric_ceremonia/components/loader.tpl' => 1,
    'file:views/gabrielayeric_ceremonia/components/hero.tpl' => 1,
    'file:views/gabrielayeric_ceremonia/components/history.tpl' => 1,
    'file:views/gabrielayeric_ceremonia/components/information.tpl' => 1,
    'file:views/gabrielayeric_ceremonia/components/galery.tpl' => 1,
    'file:views/gabrielayeric_ceremonia/components/dresscode.tpl' => 1,
    'file:views/gabrielayeric_ceremonia/components/attendance.tpl' => 1,
    'file:views/gabrielayeric_ceremonia/components/gifts.tpl' => 1,
    'file:views/gabrielayeric_ceremonia/components/button-whatsapp.tpl' => 1,
  ),
))) {
function content_69b96b9f925a12_88780710 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\gabrielayeric_ceremonia';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_200417502869b96b9f91ab04_24212328', "styles");
?>


<?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric_ceremonia/components/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/gabrielayeric_ceremonia/components/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric_ceremonia/components/history.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/gabrielayeric_ceremonia/components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/gabrielayeric_ceremonia/components/galery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="pattern">
    <?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric_ceremonia/components/dresscode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</div>

<!-- <?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric_ceremonia/components/attendance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?> -->
<?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric_ceremonia/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/gabrielayeric_ceremonia/components/button-whatsapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_200417502869b96b9f91ab04_24212328 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\gabrielayeric_ceremonia';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/gabrielayeric_ceremonia/css/style.css">

<link rel="preload" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/gabrielayeric_ceremonia/fonts/Bellisia.woff2" as="font"
    type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/gabrielayeric_ceremonia/fonts/Baskervville-Regular.woff2" as="font"
    type="font/woff2" crossorigin>

<?php
}
}
/* {/block "styles"} */
}
