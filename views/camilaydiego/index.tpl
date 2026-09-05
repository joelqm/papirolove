{block name="styles"}
{include file="views/camilaydiego/components/fonts-critical.tpl"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/camilaydiego/css/style.css?v={$_layoutParams.filever}">
{/block}

{include file="views/camilaydiego/components/loader.tpl"}

<div id="contenido">
{include file="views/camilaydiego/components/cart.tpl"}
{include file="views/camilaydiego/components/hero.tpl"}

{include file="views/camilaydiego/components/history.tpl"}
{include file="views/camilaydiego/components/countdown-banner.tpl"}
{include file="views/camilaydiego/components/information.tpl"}
{include file="views/camilaydiego/components/galery.tpl"}


<div class="dresscode-attendance-wrapper" data-aos="fade-up">
    {include file="views/camilaydiego/components/dresscode.tpl"}
</div>

{include file="views/camilaydiego/components/gifts.tpl"}
{include file="views/camilaydiego/components/attendance.tpl"}

<section class="closing-photo" aria-label="Foto final" data-aos="zoom-in">
    <picture>
        <source media="(max-width: 768px)"
                srcset="{$_layoutParams.root}views/camilaydiego/imgs/background_3_background_mobil.webp"
                type="image/webp">
        <img src="{$_layoutParams.root}views/camilaydiego/imgs/background_3.webp"
             alt="Camila y Diego"
             class="closing-photo-img"
             width="1280"
             height="720"
             loading="lazy"
             decoding="async">
    </picture>
</section>

{include file="views/camilaydiego/components/button-whatsapp.tpl"}
</div>
