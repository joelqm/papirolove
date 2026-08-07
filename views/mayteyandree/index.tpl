{block name="styles"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/mayteyandree/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
{/block}

{include file="views/mayteyandree/components/cart.tpl"}
{include file="views/mayteyandree/components/hero.tpl"}

{include file="views/mayteyandree/components/history.tpl"}
{include file="views/mayteyandree/components/information.tpl"}
{include file="views/mayteyandree/components/galery.tpl"}


<div class="dresscode-attendance-wrapper">
    <div class="decor-corner-top-left"></div>
    <div class="decor-corner-bottom-right"></div>

    {include file="views/mayteyandree/components/dresscode.tpl"}
    {include file="views/mayteyandree/components/attendance.tpl"}
</div>

{include file="views/mayteyandree/components/gifts.tpl"}

{include file="views/mayteyandree/components/button-whatsapp.tpl"}