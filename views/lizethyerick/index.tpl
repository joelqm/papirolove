{block name="styles"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/lizethyerick/css/style.css?v={$_layoutParams.filever}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
{/block}

{include file="views/lizethyerick/components/loader.tpl"}

<div id="contenido">
{include file="views/lizethyerick/components/cart.tpl"}
{include file="views/lizethyerick/components/hero.tpl"}

{include file="views/lizethyerick/components/history.tpl"}
{include file="views/lizethyerick/components/information.tpl"}
{include file="views/lizethyerick/components/galery.tpl"}


<div class="dresscode-attendance-wrapper">
    {include file="views/lizethyerick/components/dresscode.tpl"}
</div>

{include file="views/lizethyerick/components/gifts.tpl"}

<section class="closing-photo" aria-label="Foto final">
    <img src="{$_layoutParams.root}views/lizethyerick/imgs/preboda-6.webp"
         alt="Lizeth y Erick"
         class="closing-photo-img">
</section>

{include file="views/lizethyerick/components/button-whatsapp.tpl"}
</div>
