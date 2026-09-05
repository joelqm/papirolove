{block name="styles"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/gabrielayeric_ceremonia/css/style.css">

<link rel="preload" href="{$_layoutParams.root}views/gabrielayeric_ceremonia/fonts/Bellisia.woff2" as="font"
    type="font/woff2" crossorigin>
<link rel="preload" href="{$_layoutParams.root}views/gabrielayeric_ceremonia/fonts/Baskervville-Regular.woff2" as="font"
    type="font/woff2" crossorigin>

{/block}

{include file="views/gabrielayeric_ceremonia/components/loader.tpl"}
{include file="views/gabrielayeric_ceremonia/components/hero.tpl"}

{include file="views/gabrielayeric_ceremonia/components/history.tpl"}
{include file="views/gabrielayeric_ceremonia/components/information.tpl"}
{include file="views/gabrielayeric_ceremonia/components/galery.tpl"}
<div class="pattern">
    {include file="views/gabrielayeric_ceremonia/components/dresscode.tpl"}
</div>

<!-- {include file="views/gabrielayeric_ceremonia/components/attendance.tpl"} -->
{include file="views/gabrielayeric_ceremonia/components/gifts.tpl"}

{include file="views/gabrielayeric_ceremonia/components/button-whatsapp.tpl"}