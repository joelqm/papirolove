{block name="styles"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/gabrielayalbert/css/style.css?v={$_layoutParams.filever}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
{/block}

{include file="views/gabrielayalbert/components/cart.tpl"}
{include file="views/gabrielayalbert/components/hero.tpl"}

{include file="views/gabrielayalbert/components/history.tpl"}
{include file="views/gabrielayalbert/components/information.tpl"}
{include file="views/gabrielayalbert/components/galery.tpl"}


<div class="dresscode-attendance-wrapper">
    <div class="decor-corner-top-left"></div>
    <div class="decor-corner-bottom-right"></div>

    {include file="views/gabrielayalbert/components/dresscode.tpl"}
    {include file="views/gabrielayalbert/components/attendance.tpl"}
</div>

{include file="views/gabrielayalbert/components/gifts.tpl"}

{include file="views/gabrielayalbert/components/button-whatsapp.tpl"}