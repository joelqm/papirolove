{block name="styles"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/gabrielayeric/css/style.css">

<link rel="preload" href="{$_layoutParams.root}views/gabrielayeric/fonts/Bellisia.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{$_layoutParams.root}views/gabrielayeric/fonts/Baskervville-Regular.woff2" as="font" type="font/woff2" crossorigin>

{/block}

{include file="views/gabrielayeric/components/loader.tpl"}
{include file="views/gabrielayeric/components/hero.tpl"}

{include file="views/gabrielayeric/components/history.tpl"}
{include file="views/gabrielayeric/components/information.tpl"}
{include file="views/gabrielayeric/components/galery.tpl"}
<div class="pattern">
    {include file="views/gabrielayeric/components/dresscode.tpl"}
</div>

<!-- {include file="views/gabrielayeric/components/attendance.tpl"} -->
{include file="views/gabrielayeric/components/gifts.tpl"}

{include file="views/gabrielayeric/components/button-whatsapp.tpl"}

