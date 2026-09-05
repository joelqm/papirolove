{block name="styles"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/paolaymiguel/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
{/block}


{include file="views/paolaymiguel/components/loader.tpl"}

<div id="contenido">
{include file="views/paolaymiguel/components/cart.tpl"}
{include file="views/paolaymiguel/components/hero.tpl"}
{include file="views/paolaymiguel/components/history.tpl"}
{include file="views/paolaymiguel/components/information.tpl"}
{include file="views/paolaymiguel/components/galery.tpl"}

{include file="views/paolaymiguel/components/attendance.tpl"}
{include file="views/paolaymiguel/components/gifts.tpl"}
{include file="views/paolaymiguel/components/button-whatsapp.tpl"}
</div>