<?php
/* Smarty version 5.5.1, created on 2026-08-14 09:35:27
  from 'file:views/cynthiaykevin/components/galery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a7f27af307808_48646699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39f26cd7508e8bcf40ebb21995978a55b1052670' => 
    array (
      0 => 'views/cynthiaykevin/components/galery.tpl',
      1 => 1786718001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a7f27af307808_48646699 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\cynthiaykevin\\components';
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
views/cynthiaykevin/imgs/preboda-1.webp" alt="Imagen 1">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiaykevin/imgs/preboda-2.webp" alt="Imagen 2">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiaykevin/imgs/preboda-3.webp" alt="Imagen 3">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiaykevin/imgs/preboda-4.webp" alt="Imagen 4">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/cynthiaykevin/imgs/preboda-5.webp" alt="Imagen 5">
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
