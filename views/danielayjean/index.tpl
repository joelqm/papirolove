{block name="styles"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/danielayjean/css/style.css?v={$_layoutParams.filever}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
{/block}

{include file="views/danielayjean/components/loader.tpl"}

<div id="contenido">
{include file="views/danielayjean/components/cart.tpl"}
{include file="views/danielayjean/components/hero.tpl"}

{include file="views/danielayjean/components/history.tpl"}
{include file="views/danielayjean/components/information.tpl"}
{include file="views/danielayjean/components/galery.tpl"}

{include file="views/danielayjean/components/dresscode.tpl"}
{include file="views/danielayjean/components/attendance.tpl"}
{include file="views/danielayjean/components/gifts.tpl"}

<section class="closing-photo" aria-label="Foto final">
    <picture>
        <source media="(max-width: 768px)"
                srcset="{$_layoutParams.root}views/danielayjean/imgs/preboda_mobil.webp"
                type="image/webp">
        <img src="{$_layoutParams.root}views/danielayjean/imgs/preboda.webp"
             alt="Daniela y Jean"
             class="closing-photo-img"
             width="1280"
             height="720"
             loading="lazy"
             decoding="async">
    </picture>
</section>

{include file="views/danielayjean/components/button-whatsapp.tpl"}
</div>
