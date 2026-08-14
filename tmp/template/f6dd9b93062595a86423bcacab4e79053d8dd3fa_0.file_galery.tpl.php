<?php
/* Smarty version 5.5.1, created on 2026-08-13 10:32:30
  from 'file:views/cynthiyakevin/components/galery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a7de38e3902e0_07366008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6dd9b93062595a86423bcacab4e79053d8dd3fa' => 
    array (
      0 => 'views/cynthiyakevin/components/galery.tpl',
      1 => 1786635001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a7de38e3902e0_07366008 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\cynthiyakevin\\components';
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
views/cynthiyakevin/imgs/preboda-1.webp" alt="Imagen 1">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiyakevin/imgs/preboda-2.webp" alt="Imagen 2">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiyakevin/imgs/preboda-3.webp" alt="Imagen 3">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiyakevin/imgs/preboda-4.webp" alt="Imagen 4">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiyakevin/imgs/preboda-6.webp" alt="Imagen 5">
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
