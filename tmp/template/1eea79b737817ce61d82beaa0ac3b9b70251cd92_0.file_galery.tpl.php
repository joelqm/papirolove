<?php
/* Smarty version 5.5.1, created on 2026-01-22 10:53:08
  from 'file:views/shirleyycrysthian/components/galery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_697247e4674455_53251302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eea79b737817ce61d82beaa0ac3b9b70251cd92' => 
    array (
      0 => 'views/shirleyycrysthian/components/galery.tpl',
      1 => 1761152960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_697247e4674455_53251302 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\shirleyycrysthian\\components';
?><div class="container-galery" id="galery">
    <div class="owl-carousel owl-theme">
        <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/shirleyycrysthian/imgs/preboda.webp" alt="Imagen 1"></div>
        <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/shirleyycrysthian/imgs/preboda-1.webp" alt="Imagen 2"></div>
        <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/shirleyycrysthian/imgs/preboda-2.webp" alt="Imagen 3"></div>
        <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/shirleyycrysthian/imgs/preboda-3.webp" alt="Imagen 4"></div>
    </div>
</div>

<style>
    .container-galery {
        max-width: 1000px; /* El ancho máximo del carrusel */
        margin: 0 auto;
        padding: 20px 0;
    }

    .owl-carousel .item {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        height: 500px; /* Establecemos la altura fija para el contenedor de la imagen */
        overflow: hidden; /* Aseguramos que el contenido no se desborde */
    }

    .owl-carousel .item img {
        width: 100%;      /* Las imágenes ocupan el 100% del ancho del contenedor */
        height: 100%;     /* La altura será 100% para llenar el contenedor */
        object-fit: cover; /* Ajusta las imágenes al contenedor sin distorsionar */
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Hacer que el carrusel sea responsive */
    @media (max-width: 768px) {
        .owl-carousel .item {
            height: 400px; /* Ajuste de la altura para pantallas más pequeñas */
        }

        .owl-carousel .item img {
            object-fit: cover; /* Asegura que las imágenes sigan ajustándose adecuadamente */
        }
    }

    @media (max-width: 480px) {
        .owl-carousel .item {
            height: 300px; /* Ajuste de la altura para pantallas muy pequeñas */
        }

        .owl-carousel .item img {
            object-fit: cover; /* Asegura que las imágenes sigan ajustándose adecuadamente */
        }
    }
</style>

<?php echo '<script'; ?>
>
    $(document).ready(function(){
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
>
<?php }
}
