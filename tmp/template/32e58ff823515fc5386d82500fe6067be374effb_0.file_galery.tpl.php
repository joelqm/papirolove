<?php
/* Smarty version 5.5.1, created on 2026-05-06 12:45:21
  from 'file:views/mariaalejandraydiego/components/galery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69fb7e31064473_30112262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32e58ff823515fc5386d82500fe6067be374effb' => 
    array (
      0 => 'views/mariaalejandraydiego/components/galery.tpl',
      1 => 1778089519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69fb7e31064473_30112262 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\mariaalejandraydiego\\components';
?><style>


    /* 2. Flor Arriba Izquierda */
    .flower-top-left {
        position: absolute;
        top: -39px;
        left: -10px;
        width: 400px;
        height: 370px;
        background-image: url('<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/flor-arriba-izq.png'); /* ¡Cambia esto por tu archivo real! */
        background-size: contain;
        background-position: top left;
        background-repeat: no-repeat;
        z-index: 1; /* La mantiene en el fondo */
        pointer-events: none; /* Las hace "invisibles" a los clics del ratón */
    }

    /* 3. Flor Abajo Derecha */
    .flower-bottom-right {
        position: absolute;
        bottom: -40px;
        right: -10px;
        width: 325px; /* Ajusta según el tamaño de tu imagen */
        height: 350px;
        background-image: url('<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/flor-abajo-der.png'); /* ¡Cambia esto por tu archivo real! */
        background-size: contain;
        background-position: bottom right;
        background-repeat: no-repeat;
        z-index: 1; /* La mantiene en el fondo */
        pointer-events: none;
    }

</style>

<section class="galery" id="galery">

    <div class="flower-top-left"></div>
    <div class="flower-bottom-right"></div>

    <br>
    <br>
    <br>
        
    <center>
        <h1 class="history-title-small-2" style="color: #BB8465;font-weight: bold;">Nuestras Fotos</h1>
    </center>

    <div class="container-galery">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/preboda-1.webp" alt="Imagen 1">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/preboda-2.webp" alt="Imagen 2">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/preboda-3.webp" alt="Imagen 3">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/mariaalejandraydiego/imgs/preboda-4.webp" alt="Imagen 3">
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
