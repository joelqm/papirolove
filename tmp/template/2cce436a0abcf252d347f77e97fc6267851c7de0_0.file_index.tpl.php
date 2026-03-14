<?php
/* Smarty version 5.5.1, created on 2026-03-14 08:48:31
  from 'file:C:\laragon\www\papirolove\views\sofiaygabriel\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69b5672f2765c3_96852803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cce436a0abcf252d347f77e97fc6267851c7de0' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\sofiaygabriel\\index.tpl',
      1 => 1773495923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/sofiaygabriel/components/loader.tpl' => 1,
    'file:views/sofiaygabriel/components/cart.tpl' => 1,
    'file:views/sofiaygabriel/components/hero.tpl' => 1,
    'file:views/sofiaygabriel/components/history.tpl' => 1,
    'file:views/sofiaygabriel/components/information.tpl' => 1,
    'file:views/sofiaygabriel/components/galery.tpl' => 1,
    'file:views/sofiaygabriel/components/attendance.tpl' => 1,
    'file:views/sofiaygabriel/components/gifts.tpl' => 1,
    'file:views/sofiaygabriel/components/button-whatsapp.tpl' => 1,
  ),
))) {
function content_69b5672f2765c3_96852803 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\sofiaygabriel';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_181489850669b5672f26d441_43290666', "styles");
?>



<?php $_smarty_tpl->renderSubTemplate("file:views/sofiaygabriel/components/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/sofiaygabriel/components/cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/sofiaygabriel/components/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/sofiaygabriel/components/history.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/sofiaygabriel/components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/sofiaygabriel/components/galery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/sofiaygabriel/components/attendance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/sofiaygabriel/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/sofiaygabriel/components/button-whatsapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_181489850669b5672f26d441_43290666 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\sofiaygabriel';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/sofiaygabriel/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php
}
}
/* {/block "styles"} */
}
