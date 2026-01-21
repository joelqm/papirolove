<script src="{$_layoutParams.ruta_js}jquery-3.7.1.min.js"></script>
<script src="{$_layoutParams.ruta_js}viewport.jquery.js"></script>
<script src="{$_layoutParams.ruta_js}bootstrap.bundle.min.js"></script>
<script src="{$_layoutParams.ruta_js}jquery.nice-select.min.js"></script>
<script src="{$_layoutParams.ruta_js}jquery.waypoints.js"></script>
<script src="{$_layoutParams.ruta_js}jquery.counterup.min.js"></script>
<script src="{$_layoutParams.ruta_js}swiper-bundle.min.js"></script>
<script src="{$_layoutParams.ruta_js}jquery.meanmenu.min.js"></script>
<script src="{$_layoutParams.ruta_js}jquery.magnific-popup.min.js"></script>
<script src="{$_layoutParams.ruta_js}wow.min.js"></script>
<script src="{$_layoutParams.ruta_js}main.js"></script>

<input type="hidden" id="root" value="{$_layoutParams.root}">

{if isset($_layoutParams.js) && count($_layoutParams.js)} {foreach item=js from=$_layoutParams.js}
<script src="{$js}?v={$_layoutParams.filever}" type="text/JavaScript"></script>
{/foreach} {/if}