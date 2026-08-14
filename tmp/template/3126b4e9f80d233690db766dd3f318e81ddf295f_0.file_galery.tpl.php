<?php
/* Smarty version 5.5.1, created on 2026-08-07 12:47:59
  from 'file:views/mayteyandree/components/galery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a761a4f656693_83807192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3126b4e9f80d233690db766dd3f318e81ddf295f' => 
    array (
      0 => 'views/mayteyandree/components/galery.tpl',
      1 => 1786123934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a761a4f656693_83807192 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\mayteyandree\\components';
?><section class="galery" id="galery">

    <br>
    <br>
    <br>

    <center>
        <h1 class="history-title-small-2 galery-title">Nuestras Fotos</h1>
    </center>

    <div class="container-galery">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mayteyandree/imgs/preboda-1.webp" alt="Imagen 1">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mayteyandree/imgs/preboda-2.webp" alt="Imagen 2">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mayteyandree/imgs/preboda-3.webp" alt="Imagen 3">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mayteyandree/imgs/preboda-4.webp" alt="Imagen 4">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mayteyandree/imgs/preboda-6.webp" alt="Imagen 5">
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
            margin: 10,
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
