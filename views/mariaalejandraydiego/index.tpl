{block name="styles"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/mariaalejandraydiego/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
{/block}

{include file="views/mariaalejandraydiego/components/loader.tpl"}

<div id="contenido">
{include file="views/mariaalejandraydiego/components/cart.tpl"}
{include file="views/mariaalejandraydiego/components/hero.tpl"}

{include file="views/mariaalejandraydiego/components/history.tpl"}
{include file="views/mariaalejandraydiego/components/information.tpl"}
{include file="views/mariaalejandraydiego/components/galery.tpl"}


<div class="dresscode-attendance-wrapper">
    <div class="decor-corner-top-left"></div>
    <div class="decor-corner-bottom-right"></div>

    {include file="views/mariaalejandraydiego/components/dresscode.tpl"}
    {include file="views/mariaalejandraydiego/components/attendance.tpl"}
</div>

{include file="views/mariaalejandraydiego/components/gifts.tpl"}

{include file="views/mariaalejandraydiego/components/button-whatsapp.tpl"}
</div>
