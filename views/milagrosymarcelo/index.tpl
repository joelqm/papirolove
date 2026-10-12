{block name="styles"}
{include file="views/milagrosymarcelo/components/fonts-critical.tpl"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/milagrosymarcelo/css/style.css?v={$_layoutParams.filever}">
{/block}

{include file="views/milagrosymarcelo/components/loader.tpl"}

<div id="contenido">
{include file="views/milagrosymarcelo/components/cart.tpl"}
{include file="views/milagrosymarcelo/components/hero.tpl"}

{include file="views/milagrosymarcelo/components/history.tpl"}
{include file="views/milagrosymarcelo/components/countdown-banner.tpl"}
{include file="views/milagrosymarcelo/components/information.tpl"}
{include file="views/milagrosymarcelo/components/galery.tpl"}


<div class="dresscode-attendance-wrapper" data-aos="fade-up">
    {include file="views/milagrosymarcelo/components/dresscode.tpl"}
</div>

{include file="views/milagrosymarcelo/components/gifts.tpl"}
{include file="views/milagrosymarcelo/components/attendance.tpl"}

<section class="closing-photo" aria-label="Foto final" data-aos="zoom-in">
    <picture>
        <source media="(max-width: 768px)"
                srcset="{$_layoutParams.root}views/milagrosymarcelo/imgs/background_3_background_mobil.webp"
                type="image/webp">
        <img src="{$_layoutParams.root}views/milagrosymarcelo/imgs/background_3.webp"
             alt="Milagros y Marcelo"
             class="closing-photo-img"
             width="1280"
             height="720"
             loading="lazy"
             decoding="async">
    </picture>
</section>

{include file="views/milagrosymarcelo/components/button-whatsapp.tpl"}
</div>
