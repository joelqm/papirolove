<section class="galery" id="galery">
    <div class="container-galery">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="{$_layoutParams.root}views/sofiaygabriel/imgs/preboda-1.webp" alt="Imagen 1">
            </div>
            <div class="item"><img src="{$_layoutParams.root}views/sofiaygabriel/imgs/preboda.webp" alt="Imagen 2">
            </div>
            <div class="item"><img src="{$_layoutParams.root}views/sofiaygabriel/imgs/preboda-2.webp" alt="Imagen 3">
            </div>
        </div>
    </div>
</section>

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