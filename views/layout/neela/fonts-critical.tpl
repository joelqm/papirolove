{*<-- Fuentes criticas con URL absoluta + endpoint CORS (Android/Chrome/nginx) -->*}
<style>
@font-face {
    font-family: 'Dulcinea';
    src: url('{$_layoutParams.root}font.php?f=Dulcinea.woff2') format('woff2'),
         url('{$_layoutParams.root}font.php?f=Dulcinea.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}
@font-face {
    font-family: 'newyork_personal';
    src: url('{$_layoutParams.root}font.php?f=newyork_personal_use.woff2') format('woff2'),
         url('{$_layoutParams.root}font.php?f=newyork_personal_use.otf') format('opentype');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}
@font-face {
    font-family: 'photograph_signature';
    src: url('{$_layoutParams.root}font.php?f=photograph_signature.woff2') format('woff2'),
         url('{$_layoutParams.root}font.php?f=photograph_signature.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}
@font-face {
    font-family: 'newyork';
    src: url('{$_layoutParams.root}font.php?f=newyork_personal_use.woff2') format('woff2'),
         url('{$_layoutParams.root}font.php?f=newyork_personal_use.otf') format('opentype');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}
</style>
<link rel="preload" href="{$_layoutParams.root}font.php?f=Dulcinea.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{$_layoutParams.root}font.php?f=newyork_personal_use.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{$_layoutParams.root}font.php?f=photograph_signature.woff2" as="font" type="font/woff2" crossorigin>
