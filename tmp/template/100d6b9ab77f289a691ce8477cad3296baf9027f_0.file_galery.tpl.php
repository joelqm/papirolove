<?php
/* Smarty version 5.5.1, created on 2026-07-23 16:39:37
  from 'file:views/julissayruben/components/galery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a628a19374fc4_80106271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '100d6b9ab77f289a691ce8477cad3296baf9027f' => 
    array (
      0 => 'views/julissayruben/components/galery.tpl',
      1 => 1784842746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a628a19374fc4_80106271 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\julissayruben\\components';
?><section class="galery" id="galery">

    <center>
        <h1 class="history-title-small-2" style="color: white;">Nuestras Fotos</h1>
    </center>

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
            items: 3, // Número de elementos visibles
            loop: true, // Hacer el carrusel en bucle
            margin: 10, // Márgenes entre los elementos
            dots: true, // Mostrar puntos de navegación
            autoplay: true, // Activar autoplay
            autoplayTimeout: 3000, // Tiempo entre cada cambio de imagen (en milisegundos)
            autoplayHoverPause: true, // Pausar el autoplay cuando se pasa el mouse sobre el carrusel
            responsive: {
                0: {
                    items: 1,  // En pantallas pequeñas (móviles) mostrar una imagen
                },
                600: {
                    items: 2,  // En pantallas medianas (tabletas) mostrar dos imágenes
                },
                1000: {
                    items: 3,  // En pantallas grandes (escritorio) mostrar tres imágenes
                }
            }
        });
    });
<?php echo '</script'; ?>
><?php }
}
