{block name="styles"}
<link rel="stylesheet" type="text/css" href="{$_layoutParams.root}views/gabrielayalberth/css/style.css?v={$_layoutParams.filever}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
{/block}

{include file="views/gabrielayalberth/components/cart.tpl"}
{include file="views/gabrielayalberth/components/hero.tpl"}

{include file="views/gabrielayalberth/components/history.tpl"}
{include file="views/gabrielayalberth/components/information.tpl"}
{include file="views/gabrielayalberth/components/galery.tpl"}


<div class="dresscode-attendance-wrapper">
    {include file="views/gabrielayalberth/components/dresscode.tpl"}
    {include file="views/gabrielayalberth/components/attendance.tpl"}
</div>

{include file="views/gabrielayalberth/components/gifts.tpl"}

<div class="wedding-footer-banner" aria-hidden="true">
    <img class="wedding-footer-banner__desktop"
         src="{$_layoutParams.root}views/gabrielayalberth/imgs/background-footer.webp"
         alt=""
         width="1920"
         height="400"
         loading="lazy"
         decoding="async">
    <img class="wedding-footer-banner__mobile"
         src="{$_layoutParams.root}views/gabrielayalberth/imgs/background-footer-mobil.webp"
         alt=""
         width="900"
         height="500"
         loading="lazy"
         decoding="async">
</div>

{include file="views/gabrielayalberth/components/button-whatsapp.tpl"}

<style>
    .wedding-footer-banner {
        width: 100%;
        line-height: 0;
        overflow: hidden;
        background: #314028;
    }

    .wedding-footer-banner img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .wedding-footer-banner .wedding-footer-banner__desktop {
        display: block;
    }

    .wedding-footer-banner .wedding-footer-banner__mobile {
        display: none;
    }

    @media (max-width: 700px) {
        .wedding-footer-banner .wedding-footer-banner__desktop {
            display: none !important;
        }

        .wedding-footer-banner .wedding-footer-banner__mobile {
            display: block !important;
        }
    }
</style>