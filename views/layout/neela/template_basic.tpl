
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Pragma" content="no-cache">
        <meta name="MobileOptimized" content="width" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style"
            content="black-translucent" />
        <meta name="description"
            content="{$descripcion} " />
        <meta name="keywords" content />

        <!-- <link rel="icon" type="image/png" sizes="16x16"
            href="{$_layoutParams.ruta}img/f_i/{$_layoutParams.configs.favicon}"> -->
        <script type="text/javascript"
            src="//code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript"
            src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script async defer
            src="https://assets.pinterest.com/js/pinit.js"></script>

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
            rel="stylesheet">
        <title>CELEBREMOS</title>
    </head>
    <body>
        <input type="hidden" id="root" value="{$_layoutParams.host2}">
        {nocache}
        {if isset($_contenido)}
            {include file=$_contenido}
        {/if}
        {/nocache}

        <script
            src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
        AOS.init();
    </script>

        {if isset($_layoutParams.js) && count($_layoutParams.js)}
        {foreach item=js from=$_layoutParams.js}
        <script src="{$js}?v={$_layoutParams.filever}"
            type="text/JavaScript"></script>
        {/foreach}
        {/if}
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

        <!-- SweetAlert2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

            
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
        <footer>
            <p>© {$smarty.now|date_format:"%Y"} celebremos.pe - Todos los derechos reservados. -
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
