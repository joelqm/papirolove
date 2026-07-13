<?php
/* Smarty version 5.5.1, created on 2026-07-12 22:13:41
  from 'file:C:\laragon\www\papirolove\views\jesykaygustavo\index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a5457e58c6d36_47482302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a8db8beaa67c6d671a1e00dcef113382409839f' => 
    array (
      0 => 'C:\\laragon\\www\\papirolove\\views\\jesykaygustavo\\index.tpl',
      1 => 1783912333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/jesykaygustavo/components/hero.tpl' => 1,
    'file:views/jesykaygustavo/components/history.tpl' => 1,
    'file:views/jesykaygustavo/components/information.tpl' => 1,
    'file:views/jesykaygustavo/components/dresscode.tpl' => 1,
    'file:views/jesykaygustavo/components/attendance.tpl' => 1,
    'file:views/jesykaygustavo/components/gifts.tpl' => 1,
    'file:views/jesykaygustavo/components/button-whatsapp.tpl' => 1,
  ),
))) {
function content_6a5457e58c6d36_47482302 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\jesykaygustavo';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_15182485926a5457e5317a69_20332395', "styles");
?>


<?php $_smarty_tpl->renderSubTemplate("file:views/jesykaygustavo/components/hero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/jesykaygustavo/components/history.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:views/jesykaygustavo/components/information.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<div class="dresscode-attendance-wrapper">
    <style>
        .dresscode-attendance-wrapper .decor-corner-top-left {
            background-image: url('<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/jesykaygustavo/imgs/decoracion_historia_izq.webp');
            background-position: bottom left;
        }

        .dresscode-attendance-wrapper .decor-corner-bottom-right {
            background-image: url('<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/jesykaygustavo/imgs/decoracion_historia_der.webp');
            background-position: bottom right;
        }
    </style>
    <div class="decor-corner-top-left"></div>
    <div class="decor-corner-bottom-right"></div>

    <?php $_smarty_tpl->renderSubTemplate("file:views/jesykaygustavo/components/dresscode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php $_smarty_tpl->renderSubTemplate("file:views/jesykaygustavo/components/attendance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:views/jesykaygustavo/components/gifts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate("file:views/jesykaygustavo/components/button-whatsapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
/* {block "styles"} */
class Block_15182485926a5457e5317a69_20332395 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\jesykaygustavo';
?>

<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/jesykaygustavo/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php
}
}
/* {/block "styles"} */
}
