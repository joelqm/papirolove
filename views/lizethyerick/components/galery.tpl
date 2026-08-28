<section class="galery" id="galery">

    <br>
    <br>
    <br>

    <center>
        <h1 class="history-title-small-2 galery-title">Nuestras Fotos</h1>
    </center>

    <div class="container-galery">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="{$_layoutParams.root}views/lizethyerick/imgs/preboda-1.webp" alt="Imagen 1">
            </div>
            <div class="item"><img src="{$_layoutParams.root}views/lizethyerick/imgs/preboda-2.webp" alt="Imagen 2">
            </div>
            <div class="item"><img src="{$_layoutParams.root}views/lizethyerick/imgs/preboda-3.webp" alt="Imagen 3">
            </div>
            <div class="item"><img src="{$_layoutParams.root}views/lizethyerick/imgs/preboda-4.webp" alt="Imagen 4">
            </div>
            <div class="item"><img src="{$_layoutParams.root}views/lizethyerick/imgs/preboda-5.webp" alt="Imagen 5">
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {

        $(".owl-carousel").owlCarousel({
            items: 3,
            loop: true,
            margin: 10,
            dots: true,
            autoHeight: true,
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
</script>
