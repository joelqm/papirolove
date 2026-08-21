{block name="styles"}
<link rel="preload" href="{$_layoutParams.root}views/layout/fonts/photograph_signature.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{$_layoutParams.root}views/layout/fonts/newyork_personal_use.woff2" as="font" type="font/woff2" crossorigin>
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
    <img src="{$_layoutParams.root}views/carmenygunther/imgs/preboda-6.webp"
         alt="Carmen y Gunther"
         class="closing-photo-img">
</section>

{include file="views/carmenygunther/components/button-whatsapp.tpl"}
</div>
