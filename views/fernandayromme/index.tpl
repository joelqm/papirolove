{block name="styles"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/fernandayromme/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
{/block}


{include file="views/fernandayromme/components/loader.tpl"}
<div id="contenido">
{include file="views/fernandayromme/components/cart.tpl"}
{include file="views/fernandayromme/components/hero.tpl"}

{include file="views/fernandayromme/components/history.tpl"}
{include file="views/fernandayromme/components/information.tpl"}
{include file="views/fernandayromme/components/galery.tpl"}


{include file="views/fernandayromme/components/dresscode.tpl"}
{include file="views/fernandayromme/components/attendance.tpl"}

{include file="views/fernandayromme/components/gifts.tpl"}

{include file="views/fernandayromme/components/button-whatsapp.tpl"}
</div>