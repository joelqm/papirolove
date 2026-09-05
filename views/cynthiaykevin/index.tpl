{block name="styles"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/cynthiaykevin/css/style.css?v={$_layoutParams.filever}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
{/block}

{include file="views/cynthiaykevin/components/loader.tpl"}

<div id="contenido">
{include file="views/cynthiaykevin/components/cart.tpl"}
{include file="views/cynthiaykevin/components/hero.tpl"}

{include file="views/cynthiaykevin/components/history.tpl"}
{include file="views/cynthiaykevin/components/information.tpl"}
{include file="views/cynthiaykevin/components/galery.tpl"}


<div class="dresscode-attendance-wrapper">
    <img class="decor-corner-top-left"
         src="{$_layoutParams.root}views/cynthiaykevin/imgs/imagen_dresscode_izq.webp"
         alt=""
         aria-hidden="true">
    <div class="decor-corner-bottom-right"></div>

    {include file="views/cynthiaykevin/components/dresscode.tpl"}
    {include file="views/cynthiaykevin/components/attendance.tpl"}
</div>

{include file="views/cynthiaykevin/components/gifts.tpl"}

{include file="views/cynthiaykevin/components/button-whatsapp.tpl"}
</div>
