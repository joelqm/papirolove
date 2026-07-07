<?php
/* Smarty version 5.5.1, created on 2026-07-03 09:49:14
  from 'file:views/jesykaygustavo/components/galery.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6a47cbea131d16_92371468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3612ee87cb05b6ce470b1711431a99611bc3f192' => 
    array (
      0 => 'views/jesykaygustavo/components/galery.tpl',
      1 => 1783089729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a47cbea131d16_92371468 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\jesykaygustavo\\components';
?><style>


    /* 2. Flor Arriba Izquierda */
    .flower-top-left {
        position: absolute;
        top: -39px;
        left: -10px;
        width: 400px;
        height: 370px;
        background-image: url('<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/jesykaygustavo/imgs/flor-arriba-izq.png'); /* ¡Cambia esto por tu archivo real! */
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
views/jesykaygustavo/imgs/flor-abajo-der.png'); /* ¡Cambia esto por tu archivo real! */
        background-size: contain;
        background-position: bottom right;
        background-repeat: no-repeat;
        z-index: 1; /* La mantiene en el fondo */
        pointer-events: none;
    }

    @media (max-width: 992px) {

        .flower-top-left {
                width: 283px;
    height: 350px;
        }

        .flower-bottom-right {
            width: 214px;
    height: 288px;
        }

    }

</style>

<section class="galery" id="galery">

    <div class="flower-top-left"></div>
    <div class="flower-bottom-right"></div>

    <br>
    <br>
    <br>
        
    <center>
        <h1 class="history-title-small-2" style="color: #BB8465;">Nuestras Fotos</h1>
    </center>

    <div class="container-galery">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/jesykaygustavo/imgs/preboda-1.webp" alt="Imagen 1">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/jesykaygustavo/imgs/preboda-2.webp" alt="Imagen 2">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/jesykaygustavo/imgs/preboda-3.webp" alt="Imagen 3">
            </div>
            <div class="item"><img src="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/jesykaygustavo/imgs/preboda-4.webp" alt="Imagen 3">
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
