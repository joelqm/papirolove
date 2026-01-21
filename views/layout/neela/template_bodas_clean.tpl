<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	
	<title>{$titulo|default:"Celebremos.pe"}</title>
	
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- Mobile Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Fav and touch icons 
	<link rel="icon" href="{$_layoutParams.ruta}images/fav_touch_icons/favicon.ico" sizes="any">
	<link rel="icon" href="{$_layoutParams.ruta}images/fav_touch_icons/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="{$_layoutParams.ruta}images/fav_touch_icons/apple-touch-icon-180x180.png">
	<link rel="manifest" href="{$_layoutParams.ruta}images/fav_touch_icons/manifest.json">-->
	
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link href="{$_layoutParams.ruta}css/bootstrap.min.css" rel="stylesheet" />
	<!-- FontAwesome CSS -->
	<link href="{$_layoutParams.ruta}css/fontawesome-all.min.css" rel="stylesheet" />
	<!-- Neela Icon Set CSS -->
	<link href="{$_layoutParams.ruta}css/neela-icon-set.css" rel="stylesheet" />
	<!-- Owl Carousel CSS -->
	<link href="{$_layoutParams.ruta}css/owl.carousel.min.css" rel="stylesheet" />
	<!-- Template CSS -->
	<link href="{$_layoutParams.ruta}css/style.css" rel="stylesheet" />
	<!-- Modernizr JS -->
	<script src="{$_layoutParams.ruta}js/modernizr-3.6.0.min.js"></script>

	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    
	<link href="{$_layoutParams.root}views/layout/neela/css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />

	
</head>
<body>

    <div id="wrapper">
        {include file=$_contenido}
    </div>
    <!-- END WRAPPER -->

	<!-- Google Maps API and Map Richmarker Library -->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHOXsTqoSDPQ5eC5TChvgOf3pAVGapYog"></script> -->
	<script src="{$_layoutParams.ruta}js/richmarker.js"></script>
	<!-- Libs -->

	<script src="{$_layoutParams.ruta}js/jquery-3.6.0.min.js"></script>
	<script src="{$_layoutParams.ruta}js/jquery-ui.min.js"></script>
	<script src="{$_layoutParams.ruta}js/jquery-migrate-3.3.2.min.js"></script>
	<script src="{$_layoutParams.ruta}js/bootstrap.bundle.min.js"></script>
	<script src="{$_layoutParams.ruta}js/jquery.placeholder.min.js"></script>
	<script src="{$_layoutParams.ruta}js/ismobile.js"></script>
	<script src="{$_layoutParams.ruta}js/retina.min.js"></script>
	<script src="{$_layoutParams.ruta}js/waypoints.min.js"></script>
	<script src="{$_layoutParams.ruta}js/waypoints-sticky.min.js"></script>
	<script src="{$_layoutParams.ruta}js/owl.carousel.min.js"></script>
	<script src="{$_layoutParams.ruta}js/lightbox.min.js"></script>
    <!-- Nicescroll script to handle gallery section touch slide -->
	<script src="{$_layoutParams.ruta}js/jquery.nicescroll.js"></script>
    <!-- Hero Background Slideshow Script -->
	<script src="{$_layoutParams.ruta}js/jquery.zoomslider.js"></script>
	<!-- Template Scripts -->
	<!-- <script src="{$_layoutParams.ruta}js/scripts.js"></script> -->
    <script src="{$_layoutParams.ruta}js/validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
    <input type="hidden" id="root" value="{$_layoutParams.host2}">

	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    {if isset($_layoutParams.js) && count($_layoutParams.js)}
    {foreach item=js from=$_layoutParams.js}
    <script src="{$js}?v={$_layoutParams.filever}" type="text/JavaScript"></script>
    {/foreach}
    {/if}

</body>
</html>