<?php
/* Smarty version 5.5.1, created on 2026-05-14 10:53:33
  from 'file:C:\laragon\www\papirolove\views\paolaymiguel\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a05effd765cc0_79264519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbea93daf438ccb700c8905696adf1bcec446dc9' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\paolaymiguel\\index.tpl',
      1 => 1778773061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/paolaymiguel/components/loader.tpl' => 1,
    'file:views/paolaymiguel/components/cart.tpl' => 1,
    'file:views/paolaymiguel/components/hero.tpl' => 1,
    'file:views/paolaymiguel/components/history.tpl' => 1,
    'file:views/paolaymiguel/components/information.tpl' => 1,
    'file:views/paolaymiguel/components/galery.tpl' => 1,
    'file:views/paolaymiguel/components/attendance.tpl' => 1,
    'file:views/paolaymiguel/components/gifts.tpl' => 1,
    'file:views/paolaymiguel/components/button-whatsapp.tpl' => 1,
  ),
))) {
function content_6a05effd765cc0_79264519 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\paolaymiguel';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_932919416a05effd75c5d6_27305022', "styles");
?>



<?php $_smarty_tpl->renderSubTemplate("file:views/paolaymiguel/components/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<?php $_smarty_tpl->renderSubTemplate("file:views/paolaymiguel/components/cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/paolaymiguel/components/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/paolaymiguel/components/history.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/paolaymiguel/components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/paolaymiguel/components/galery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/paolaymiguel/components/attendance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/paolaymiguel/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/paolaymiguel/components/button-whatsapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_932919416a05effd75c5d6_27305022 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\paolaymiguel';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/paolaymiguel/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php
}
}
/* {/block "styles"} */
}
