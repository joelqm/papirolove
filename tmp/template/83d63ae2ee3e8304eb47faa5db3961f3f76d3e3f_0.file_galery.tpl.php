<?php
/* Smarty version 5.5.1, created on 2026-04-21 12:54:44
  from 'file:views/zelmaysamuel/components/galery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69e7b9e4cd9fb1_04166425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83d63ae2ee3e8304eb47faa5db3961f3f76d3e3f' => 
    array (
      0 => 'views/zelmaysamuel/components/galery.tpl',
      1 => 1776794049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69e7b9e4cd9fb1_04166425 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\zelmaysamuel\\components';
?><div class="galery-full-wrapper" style="background: #636C53;">
    <div class="container-galery" id="galery">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/zelmaysamuel/imgs/preboda-1.webp" alt="Imagen 1">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/zelmaysamuel/imgs/preboda-2.webp" alt="Imagen 2">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/zelmaysamuel/imgs/preboda-3.webp" alt="Imagen 3">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/zelmaysamuel/imgs/preboda-4.webp" alt="Imagen 4">
            </div>
        </div>
    </div>
</div>

<style>
    /* Agregamos esta regla para asegurar el ancho total */
    .galery-full-wrapper {
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .container-galery {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px 0;
    }

    .owl-carousel .item {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        height: 500px;
        overflow: hidden;
    }

    .owl-carousel .item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .owl-carousel .item {
            height: 400px;
        }
    }

    @media (max-width: 480px) {
        .owl-carousel .item {
            height: 300px;
        }
    }
</style>

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
