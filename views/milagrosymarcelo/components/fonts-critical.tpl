{* Fuentes críticas Milagros y Marcelo — font.php (MIME + CORS en producción) *}
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
{literal}
<script>
(function () {
  var root = '{/literal}{$_layoutParams.root|escape:'javascript'}{literal}';
  var seen = false;
  try { seen = !!sessionStorage.getItem('milagrosLoaderSeen'); } catch (e) {}
  function preload(href, priority) {
    var link = document.createElement('link');
    link.rel = 'preload';
    link.as = 'image';
    link.href = href;
    link.setAttribute('fetchpriority', priority);
    document.head.appendChild(link);
  }
  var loaderImg = root + 'views/milagrosymarcelo/imgs/preboda.webp';
  var heroImg = root + 'views/milagrosymarcelo/imgs/backgroundprincipal.webp';
  if (seen) {
    preload(heroImg, 'high');
  } else {
    preload(loaderImg, 'high');
    preload(heroImg, 'low');
  }
})();
</script>
{/literal}
