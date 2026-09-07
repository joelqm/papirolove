<section class="galery" id="galery">

    <br>
    <br>
    <br>

    <center>
        <h1 class="history-title-small-2 galery-title">Nuestras Fotos</h1>
    </center>

    <div class="container-galery">
        <div class="owl-carousel owl-theme galery-carousel">
            <div class="item">
                <picture>
                    <source media="(max-width: 768px)"
                            srcset="{$_layoutParams.root}views/carmenygunther/imgs/preboda-1-mobil.webp"
                            type="image/webp">
                    <img src="{$_layoutParams.root}views/carmenygunther/imgs/preboda-1.webp"
                         alt="Carmen y Gunther"
                         class="img-reveal"
                         width="870"
                         height="1200"
                         decoding="async">
                </picture>
            </div>
            <div class="item">
                <picture>
                    <source media="(max-width: 768px)"
                            srcset="{$_layoutParams.root}views/carmenygunther/imgs/preboda-2-mobil.webp"
                            type="image/webp">
                    <img src="{$_layoutParams.root}views/carmenygunther/imgs/preboda-2.webp"
                         alt="Carmen y Gunther"
                         class="img-reveal"
                         width="540"
                         height="723"
                         loading="lazy"
                         decoding="async">
                </picture>
            </div>
            <div class="item">
                <picture>
                    <source media="(max-width: 768px)"
                            srcset="{$_layoutParams.root}views/carmenygunther/imgs/preboda-3-mobil.webp"
                            type="image/webp">
                    <img src="{$_layoutParams.root}views/carmenygunther/imgs/preboda-3.webp"
                         alt="Carmen y Gunther"
                         class="img-reveal"
                         width="933"
                         height="1400"
                         loading="lazy"
                         decoding="async">
                </picture>
            </div>
            <div class="item">
                <picture>
                    <source media="(max-width: 768px)"
                            srcset="{$_layoutParams.root}views/carmenygunther/imgs/preboda-4-mobil.webp"
                            type="image/webp">
                    <img src="{$_layoutParams.root}views/carmenygunther/imgs/preboda-4.webp"
                         alt="Carmen y Gunther"
                         class="img-reveal"
                         width="933"
                         height="1400"
                         loading="lazy"
                         decoding="async">
                </picture>
            </div>
            <div class="item">
                <picture>
                    <source media="(max-width: 768px)"
                            srcset="{$_layoutParams.root}views/carmenygunther/imgs/preboda-5-mobil.webp"
                            type="image/webp">
                    <img src="{$_layoutParams.root}views/carmenygunther/imgs/preboda-5.webp"
                         alt="Carmen y Gunther"
                         class="img-reveal"
                         width="933"
                         height="1400"
                         loading="lazy"
                         decoding="async">
                </picture>
            </div>
        </div>
    </div>
</section>

<script>
(function () {
    function initGaleryCarousel() {
        var $el = $("#galery .galery-carousel");
        if (!$el.length || typeof $el.owlCarousel !== "function" || $el.data("owl-ready")) {
            return;
        }
        $el.data("owl-ready", true);
        $el.owlCarousel({
            items: 3,
            loop: true,
            margin: 10,
            dots: true,
            autoHeight: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            lazyLoad: false,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });
    }

    function whenVisible(el, cb) {
        if (!("IntersectionObserver" in window)) {
            cb();
            return;
        }
        var io = new IntersectionObserver(function (entries) {
            if (entries.some(function (e) { return e.isIntersecting; })) {
                io.disconnect();
                cb();
            }
        }, { rootMargin: "180px 0px" });
        io.observe(el);
    }

    function waitOwlAndInit() {
        var tries = 0;
        (function waitOwl() {
            if (window.jQuery && typeof jQuery.fn.owlCarousel === "function") {
                initGaleryCarousel();
                return;
            }
            if (++tries < 40) setTimeout(waitOwl, 100);
        })();
    }

    function bootLazy() {
        var section = document.getElementById("galery");
        if (!section) return;
        whenVisible(section, waitOwlAndInit);
    }

    document.addEventListener("papiro:content-visible", waitOwlAndInit);

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", bootLazy);
    } else {
        bootLazy();
    }
})();
</script>
