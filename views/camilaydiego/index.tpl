{block name="styles"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/camilaydiego/css/style.css?v={$_layoutParams.filever}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
{/block}

{include file="views/camilaydiego/components/loader.tpl"}

<div id="contenido">
{include file="views/camilaydiego/components/cart.tpl"}
{include file="views/camilaydiego/components/hero.tpl"}

{include file="views/camilaydiego/components/history.tpl"}
{include file="views/camilaydiego/components/information.tpl"}
{include file="views/camilaydiego/components/galery.tpl"}


<div class="dresscode-attendance-wrapper">
    {include file="views/camilaydiego/components/dresscode.tpl"}
</div>

{include file="views/camilaydiego/components/gifts.tpl"}

<section class="closing-photo" aria-label="Foto final">
    <img src="{$_layoutParams.root}views/camilaydiego/imgs/preboda-6.webp"
         alt="Camila y Diego"
         class="closing-photo-img">
</section>

{include file="views/camilaydiego/components/button-whatsapp.tpl"}
</div>
