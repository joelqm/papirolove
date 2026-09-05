{block name="styles"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/flaviayanibal/css/style.css?v={$_layoutParams.filever}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
{/block}

{include file="views/flaviayanibal/components/loader.tpl"}

<div id="contenido">
{include file="views/flaviayanibal/components/cart.tpl"}
{include file="views/flaviayanibal/components/hero.tpl"}

{include file="views/flaviayanibal/components/history.tpl"}
{include file="views/flaviayanibal/components/information.tpl"}
{include file="views/flaviayanibal/components/galery.tpl"}

{include file="views/flaviayanibal/components/dresscode.tpl"}
{include file="views/flaviayanibal/components/attendance.tpl"}
{include file="views/flaviayanibal/components/gifts.tpl"}

{include file="views/flaviayanibal/components/button-whatsapp.tpl"}
</div>
