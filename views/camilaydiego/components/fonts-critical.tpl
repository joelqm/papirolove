{* Fuentes críticas Camila y Diego — font.php (MIME + CORS en producción) *}
<style>
@font-face {
    font-family: 'parfumerie-script';
    src: url('{$_layoutParams.root}font.php?f=parfumerie-script-old-style.woff2') format('woff2'),
         url('{$_layoutParams.root}font.php?f=parfumerie-script-old-style.otf') format('opentype');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}
@font-face {
    font-family: 'Athelas-Regular';
    src: url('{$_layoutParams.root}font.php?f=Athelas-Regular.woff2') format('woff2'),
         url('{$_layoutParams.root}font.php?f=Athelas-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}
@font-face {
    font-family: 'SourceSansVariable';
    src: url('{$_layoutParams.root}font.php?f=SourceSans3-Variable.woff2') format('woff2');
    font-weight: 200 900;
    font-style: normal;
    font-display: swap;
}
</style>
<link rel="preload" href="{$_layoutParams.root}font.php?f=parfumerie-script-old-style.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{$_layoutParams.root}font.php?f=Athelas-Regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{$_layoutParams.root}views/camilaydiego/imgs/backgroundprincipal.webp" as="image" fetchpriority="high" media="(min-width: 701px)">
<link rel="preload" href="{$_layoutParams.root}views/camilaydiego/imgs/preboda-2-original.webp" as="image" fetchpriority="high" media="(max-width: 700px)">
