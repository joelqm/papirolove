{block name="styles"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/zelmaysamuel/css/style.css">

<link rel="preload" href="{$_layoutParams.root}views/zelmaysamuel/fonts/Bellisia.woff2" as="font" type="font/woff2"
    crossorigin>
<link rel="preload" href="{$_layoutParams.root}views/zelmaysamuel/fonts/Baskervville-Regular.woff2" as="font"
    type="font/woff2" crossorigin>

{/block}

{include file="views/zelmaysamuel/components/loader.tpl"}
<div id="contenido">
{include file="views/zelmaysamuel/components/cart.tpl"}
{include file="views/zelmaysamuel/components/hero.tpl"}

{include file="views/zelmaysamuel/components/history.tpl"}
{include file="views/zelmaysamuel/components/information.tpl"}

{include file="views/zelmaysamuel/components/dresscode.tpl"}


{include file="views/zelmaysamuel/components/galery.tpl"}


{include file="views/zelmaysamuel/components/attendance.tpl"}
{include file="views/zelmaysamuel/components/gifts.tpl"}

{include file="views/zelmaysamuel/components/button-whatsapp.tpl"}
</div>