{block name="styles"}
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/jesykaygustavo/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
{/block}

{include file="views/jesykaygustavo/components/loader.tpl"}

<div id="contenido">
{include file="views/jesykaygustavo/components/cart.tpl"}
{include file="views/jesykaygustavo/components/hero.tpl"}

{include file="views/jesykaygustavo/components/history.tpl"}
{include file="views/jesykaygustavo/components/information.tpl"}
{* {include file="views/jesykaygustavo/components/galery.tpl"} *}


<div class="dresscode-attendance-wrapper">
    <style>
        .dresscode-attendance-wrapper .decor-corner-top-left {
            background-image: url('{$_layoutParams.root}views/jesykaygustavo/imgs/decoracion_historia_izq.webp');
            background-position: bottom left;
        }

        .dresscode-attendance-wrapper .decor-corner-bottom-right {
            background-image: url('{$_layoutParams.root}views/jesykaygustavo/imgs/decoracion_historia_der.webp');
            background-position: bottom right;
        }
    </style>
    <div class="decor-corner-top-left"></div>
    <div class="decor-corner-bottom-right"></div>

    {include file="views/jesykaygustavo/components/dresscode.tpl"}
    {include file="views/jesykaygustavo/components/attendance.tpl"}
</div>

{include file="views/jesykaygustavo/components/gifts.tpl"}

{include file="views/jesykaygustavo/components/button-whatsapp.tpl"}
</div>
