<div class="galery-full-wrapper" style="background: #636C53;">
    <div class="container-galery" id="galery">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="{$_layoutParams.root}views/gabrielayeric/imgs/preboda-1.webp" alt="Imagen 1">
            </div>
            <div class="item"><img src="{$_layoutParams.root}views/gabrielayeric/imgs/preboda-2.webp" alt="Imagen 2">
            </div>
            <div class="item"><img src="{$_layoutParams.root}views/gabrielayeric/imgs/preboda-3.webp" alt="Imagen 3">
            </div>
            <div class="item"><img src="{$_layoutParams.root}views/gabrielayeric/imgs/preboda-4.webp" alt="Imagen 4">
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