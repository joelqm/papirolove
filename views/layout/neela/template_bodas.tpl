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

	<!-- Fav and touch icons -->
	<link rel="icon" href="{$_layoutParams.ruta}images/{$ico}" sizes="any">
	<link rel="icon" href="{$_layoutParams.ruta}images/{$logo}" type="image/svg+xml">
	<link rel="apple-touch-icon" href="{$_layoutParams.ruta}images/{$logo}">
	<link rel="manifest" href="{$_layoutParams.ruta}images/{$logo}">

	<meta property="og:image" content="{$_layoutParams.ruta}images/{$logo}" />
    <meta property="og:image:secure_url" content="{$_layoutParams.ruta}images/{$logo}" />
	<meta property="og:url" content="https://celebremos.pe/danielayluis" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Celebremos Perú" />
	<meta property="og:description" content="Celebremos Perú" />
	<meta property="fb:app_id" content="" />
	


	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link href="{$_layoutParams.ruta}css/bootstrap.min.css" rel="stylesheet" />
	<!-- FontAwesome CSS -->
	<link href="{$_layoutParams.ruta}css/fontawesome-all.min.css" rel="stylesheet" />
	<!-- Neela Icon Set CSS 
	<link href="{$_layoutParams.ruta}css/neela-icon-set.css" rel="stylesheet" />-->
	<!-- Owl Carousel CSS -->
	<link href="{$_layoutParams.ruta}css/owl.carousel.min.css" rel="stylesheet" />
	<!-- Template CSS -->
	<link href="{$_layoutParams.ruta}css/style.css" rel="stylesheet" />
	<!-- Modernizr JS -->
	<script src="{$_layoutParams.ruta}js/modernizr-3.6.0.min.js"></script>
	
	<!-- Slick -->
	<link rel="stylesheet" type="text/css" href="{$_layoutParams.ruta}js/plugins/slick-1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="{$_layoutParams.ruta}js/plugins/slick-1.8.1/slick/slick-theme.css"/>
	
    <link type="text/css" rel="stylesheet" href="{$_layoutParams.ruta}css/waitMe.min.css">
</head>
<body>
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">

        <!-- BEGIN HEADER -->
        <header id="header">
            <div class="nav-section light no-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{$_layoutParams.root}" class="nav-logo"><img src="{$_layoutParams.ruta}images/logo-white-2023.png" alt="Celebremos.pe" /></a>
                            
                            <!-- BEGIN MAIN MENU -->
                            <!-- <nav class="navbar">
                                <a href="wedding-details.html" class="btn btn-light">More Details</a>
                                <a href="rsvp.html" class="btn btn-light">RSVP</a>
                            </nav> -->
                            <!-- END MAIN MENU -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER -->

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
	<script src="{$_layoutParams.ruta}js/scripts.js"></script>
    <script src="{$_layoutParams.ruta}js/validate.min.js"></script>
    <script src="{$_layoutParams.ruta}js/waitMe.min.js"></script>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
	
	<script type="text/javascript" src="{$_layoutParams.ruta}js/plugins/slick-1.8.1/slick/slick.min.js"></script>
    <input type="hidden" id="root" value="{$_layoutParams.host2}">

    {if isset($_layoutParams.js) && count($_layoutParams.js)}
    {foreach item=js from=$_layoutParams.js}
    <script src="{$js}?v={$_layoutParams.filever}" type="text/JavaScript"></script>
    {/foreach}
    {/if}

</body>
</html>