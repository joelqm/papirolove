<?php
/* Smarty version 5.5.1, created on 2026-03-14 08:48:31
  from 'file:views/sofiaygabriel/components/galery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69b5672f2a4aa3_82388238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc11f5e0f38d5590cca09d569d5aa4e1bcf4edf6' => 
    array (
      0 => 'views/sofiaygabriel/components/galery.tpl',
      1 => 1773495931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69b5672f2a4aa3_82388238 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\sofiaygabriel\\components';
?><section class="galery" id="galery">
    <div class="container-galery">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/sofiaygabriel/imgs/preboda-1.webp" alt="Imagen 1">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/sofiaygabriel/imgs/preboda.webp" alt="Imagen 2">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/sofiaygabriel/imgs/preboda-2.webp" alt="Imagen 3">
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
