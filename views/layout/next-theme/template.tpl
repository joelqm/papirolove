<!DOCTYPE html>
<html lang="es">
{* Incluimos el head.tpl. Como estamos en la raíz del tema, la ruta es directa *}
{include file="partials/head.tpl"}

<body class="{$bodyClass|default:''}">

    <!-- {include file="partials/preloader.tpl"} -->

    {include file="partials/backtotop.tpl"}

    {include file="partials/Offcanvas.tpl"}

    {include file="partials/header.tpl"}

    {if isset($titulo) && $titulo != 'Inicio' && !isset($hide_breadcrumb)}
    {include file="partials/breadcrumb.tpl"}
    {/if}

    <main>
        {include file=$_contenido}
    </main>

    {include file="partials/footer.tpl"}

    {include file="partials/script.tpl"}
</body>

</html>