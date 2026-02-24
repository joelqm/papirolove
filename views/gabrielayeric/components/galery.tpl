<div class="container-galery" id="galery">
    <div class="owl-carousel owl-theme">
        <div class="item"><img src="{$_layoutParams.root}views/gabrielayeric/imgs/preboda.webp" alt="Imagen 1">
        </div>
        <div class="item"><img src="{$_layoutParams.root}views/gabrielayeric/imgs/preboda-1.webp" alt="Imagen 2">
        </div>
        <div class="item"><img src="{$_layoutParams.root}views/gabrielayeric/imgs/preboda-2.webp" alt="Imagen 3">
        </div>
        <div class="item"><img src="{$_layoutParams.root}views/gabrielayeric/imgs/preboda-3.webp" alt="Imagen 4">
        </div>
    </div>
</div>

<style>
    .container-galery {
        max-width: 1000px;
        /* El ancho máximo del carrusel */
        margin: 0 auto;
        padding: 20px 0;
    }

    .owl-carousel .item {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        height: 500px;
        /* Establecemos la altura fija para el contenedor de la imagen */
        overflow: hidden;
        /* Aseguramos que el contenido no se desborde */
    }

    .owl-carousel .item img {
        width: 100%;
        /* Las imágenes ocupan el 100% del ancho del contenedor */
        height: 100%;
        /* La altura será 100% para llenar el contenedor */
        object-fit: cover;
        /* Ajusta las imágenes al contenedor sin distorsionar */
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Hacer que el carrusel sea responsive */
    @media (max-width: 768px) {
        .owl-carousel .item {
            height: 400px;
            /* Ajuste de la altura para pantallas más pequeñas */
        }

        .owl-carousel .item img {
            object-fit: cover;
            /* Asegura que las imágenes sigan ajustándose adecuadamente */
        }
    }

    @media (max-width: 480px) {
        .owl-carousel .item {
            height: 300px;
            /* Ajuste de la altura para pantallas muy pequeñas */
        }

        .owl-carousel .item img {
            object-fit: cover;
            /* Asegura que las imágenes sigan ajustándose adecuadamente */
        }
    }
</style>

<script>
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
</script>