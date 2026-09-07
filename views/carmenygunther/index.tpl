{block name="styles"}
<link rel="preload" href="{$_layoutParams.root}views/carmenygunther/imgs/preboda-mobil.webp" as="image" type="image/webp" media="(max-width: 700px)" fetchpriority="high">
<link rel="preload" href="{$_layoutParams.root}views/carmenygunther/imgs/preboda.webp" as="image" type="image/webp" media="(min-width: 701px)" fetchpriority="high">
<link rel="preload" href="{$_layoutParams.root}views/carmenygunther/imgs/preboda-2-mobil.webp" as="image" type="image/webp" media="(max-width: 768px)">
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/carmenygunther/css/style.css?v={$_layoutParams.filever}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
{/block}

{include file="views/carmenygunther/components/loader.tpl"}

<div id="contenido">
{include file="views/carmenygunther/components/cart.tpl"}
{include file="views/carmenygunther/components/hero.tpl"}

{include file="views/carmenygunther/components/history.tpl"}
{include file="views/carmenygunther/components/information.tpl"}
{include file="views/carmenygunther/components/galery.tpl"}


<div class="dresscode-attendance-wrapper">
    {include file="views/carmenygunther/components/dresscode.tpl"}
</div>

{include file="views/carmenygunther/components/gifts.tpl"}

<section class="closing-photo" aria-label="Foto final">
    <picture>
        <source media="(max-width: 768px)"
                srcset="{$_layoutParams.root}views/carmenygunther/imgs/preboda-6-mobil.webp"
                type="image/webp">
        <img src="{$_layoutParams.root}views/carmenygunther/imgs/preboda-6.webp"
             alt="Carmen y Gunther"
             class="closing-photo-img img-reveal"
             width="1280"
             height="720"
             loading="lazy"
             decoding="async">
    </picture>
</section>

{include file="views/carmenygunther/components/button-whatsapp.tpl"}

{literal}
<script>
(function () {
  function markReady(img) {
    if (img && img.classList.contains('img-reveal')) {
      img.classList.add('is-ready');
    }
  }
  function scanImages() {
    document.querySelectorAll('.img-reveal').forEach(function (img) {
      if (img.complete && img.naturalWidth > 0) {
        markReady(img);
        return;
      }
      img.addEventListener('load', function () { markReady(img); }, { once: true });
      img.addEventListener('error', function () { markReady(img); }, { once: true });
    });
  }
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', scanImages);
  } else {
    scanImages();
  }
  document.addEventListener('papiro:content-visible', scanImages);
})();
</script>
{/literal}
</div>
