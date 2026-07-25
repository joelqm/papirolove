<?php
/* Smarty version 5.5.1, created on 2026-07-25 16:42:18
  from 'file:views/julissayruben/components/galery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a652dba9dfcf9_34754373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '100d6b9ab77f289a691ce8477cad3296baf9027f' => 
    array (
      0 => 'views/julissayruben/components/galery.tpl',
      1 => 1785015217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a652dba9dfcf9_34754373 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\julissayruben\\components';
?><section class="galery" id="galery">

    <h1 class="galery-title">Nuestras Fotos</h1>

    <div class="container-galery">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/julissayruben/imgs/preboda-1.webp" alt="Imagen 1">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/julissayruben/imgs/preboda-2.webp" alt="Imagen 2">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/julissayruben/imgs/preboda-3.webp" alt="Imagen 3">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/julissayruben/imgs/preboda-5.webp" alt="Imagen 3">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/julissayruben/imgs/preboda-4.webp" alt="Imagen 3">
            </div>
        </div>
    </div>
</section>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 3,
            loop: true,
            margin: 14,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                }
            }
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
