<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="description" content="{$descripcion} " />
    <meta name="keywords" content />

    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://code.jquery.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>

    {include file="fonts-critical.tpl"}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </noscript>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>PAPIROLOVE</title>
</head>

<body>
    <input type="hidden" id="root" value="{$_layoutParams.host2}">
    {nocache}
    {if isset($_contenido)}
    {include file=$_contenido}
    {/if}
    {/nocache}

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js" defer></script>
    <script>
        window.papiroAosFailsafe = function () {
            document.body.classList.add('aos-broken');
            document.querySelectorAll('[data-aos]').forEach(function (el) {
                if (!el.classList.contains('aos-animate')) {
                    el.style.opacity = '1';
                    el.style.transform = 'none';
                    el.classList.add('aos-animate');
                }
            });
        };

        window.initPapiroAos = function () {
            if (!window.AOS) {
                window.__papiroAosPending = true;
                return;
            }
            if (window.__papiroAosInit) {
                if (typeof window.AOS.refresh === 'function') {
                    window.AOS.refresh();
                }
                return;
            }
            window.__papiroAosInit = true;
            window.__papiroAosPending = false;
            AOS.init({
                once: false,
                duration: 500,
                offset: 40,
                delay: 0,
                easing: 'ease-out',
                anchorPlacement: 'top-bottom'
            });
            AOS.refresh();
            setTimeout(window.papiroAosFailsafe, 5000);
        };

        window.addEventListener('load', function () {
            var loader = document.getElementById('loader');
            var content = document.getElementById('contenido');
            if (!loader || (content && content.classList.contains('is-visible'))) {
                window.initPapiroAos();
            }
            if (window.__papiroAosPending) {
                window.initPapiroAos();
            }
        });
    </script>

    {if isset($_layoutParams.js) && count($_layoutParams.js)}
    {foreach item=js from=$_layoutParams.js}
    <script src="{$js}?v={$_layoutParams.filever}" type="text/javascript"></script>
    {/foreach}
    {/if}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" media="print" onload="this.media='all'">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" media="print" onload="this.media='all'">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js" defer></script>
    <footer>
        <p>© {$smarty.now|date_format:"%Y"} papirolove.pe - Todos los derechos reservados. -
            Contáctanos</p>
    </footer>

    <style>
        footer {
            text-align: center;
            background: #b57966;
            color: #fff;
            font-family: "Forum";
            padding: 1rem 0rem;
        }
    </style>

</body>

</html>
