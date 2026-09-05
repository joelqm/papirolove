{block name="styles"}
{include file="views/lizethyerick/components/fonts-critical.tpl"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/lizethyerick/css/style.css?v={$_layoutParams.filever}">
{/block}

{include file="views/lizethyerick/components/loader.tpl"}

<div id="contenido">
{include file="views/lizethyerick/components/cart.tpl"}
{include file="views/lizethyerick/components/hero.tpl"}

{include file="views/lizethyerick/components/history.tpl"}
{include file="views/lizethyerick/components/countdown-banner.tpl"}
{include file="views/lizethyerick/components/information.tpl"}
{include file="views/lizethyerick/components/galery.tpl"}


<div class="dresscode-attendance-wrapper" data-aos="fade-up">
    {include file="views/lizethyerick/components/dresscode.tpl"}
</div>

{include file="views/lizethyerick/components/gifts.tpl"}
{include file="views/lizethyerick/components/attendance.tpl"}

<section class="closing-photo" aria-label="Foto final" data-aos="zoom-in">
    <picture>
        <source media="(max-width: 768px)"
                srcset="{$_layoutParams.root}views/lizethyerick/imgs/background_3_background_mobil.webp"
                type="image/webp">
        <img src="{$_layoutParams.root}views/lizethyerick/imgs/background_3.webp"
             alt="Lizeth y Erick"
             class="closing-photo-img"
             width="1280"
             height="720"
             loading="lazy"
             decoding="async">
    </picture>
</section>

{include file="views/lizethyerick/components/button-whatsapp.tpl"}
</div>
