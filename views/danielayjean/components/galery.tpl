<section class="galery" id="galery">

    <h1 class="galery-title">Nuestras Fotos</h1>

    <div class="container-galery">
        <div class="owl-carousel owl-theme galery-carousel">
            <div class="item"><img src="{$_layoutParams.root}views/danielayjean/imgs/preboda-1.webp" alt="Daniela y Jean" loading="lazy" decoding="async"></div>
            <div class="item"><img src="{$_layoutParams.root}views/danielayjean/imgs/preboda-2.webp" alt="Daniela y Jean" loading="lazy" decoding="async"></div>
            <div class="item"><img src="{$_layoutParams.root}views/danielayjean/imgs/preboda-3.webp" alt="Daniela y Jean" loading="lazy" decoding="async"></div>
            <div class="item"><img src="{$_layoutParams.root}views/danielayjean/imgs/preboda-5.webp" alt="Daniela y Jean" loading="lazy" decoding="async"></div>
            <div class="item"><img src="{$_layoutParams.root}views/danielayjean/imgs/preboda-4.webp" alt="Daniela y Jean" loading="lazy" decoding="async"></div>
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
            margin: 14,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
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

    function boot() {
        var section = document.getElementById("galery");
        if (!section) return;
        whenVisible(section, function () {
            var tries = 0;
            (function waitOwl() {
                if (window.jQuery && typeof jQuery.fn.owlCarousel === "function") {
                    initGaleryCarousel();
                    return;
                }
                if (++tries < 40) setTimeout(waitOwl, 100);
            })();
        });
    }

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", boot);
    } else {
        boot();
    }
})();
</script>
