<?php
/* Smarty version 5.5.1, created on 2026-03-18 11:49:39
  from 'file:template_bodas_clean.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69bad7a30191c1_17922744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e891c52efc2498819fcbaa2063e3f8ab6a2295ac' => 
    array (
      0 => 'template_bodas_clean.tpl',
      1 => 1773847652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69bad7a30191c1_17922744 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\papirolove\\views\\layout\\neela';
?><!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">

	<title><?php echo (($tmp = $_smarty_tpl->getValue('titulo') ?? null)===null||$tmp==='' ? "papirolove.pe" ?? null : $tmp);?>
</title>

	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Fav and touch icons 
	<link rel="icon" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
images/fav_touch_icons/favicon.ico" sizes="any">
	<link rel="icon" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
images/fav_touch_icons/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
images/fav_touch_icons/apple-touch-icon-180x180.png">
	<link rel="manifest" href="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
images/fav_touch_icons/manifest.json">-->

	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link href="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
css/bootstrap.min.css" rel="stylesheet" />
	<!-- FontAwesome CSS -->
	<link href="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
css/fontawesome-all.min.css" rel="stylesheet" />
	<!-- Neela Icon Set CSS -->
	<link href="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
css/neela-icon-set.css" rel="stylesheet" />
	<!-- Owl Carousel CSS -->
	<link href="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
css/owl.carousel.min.css" rel="stylesheet" />
	<!-- Template CSS -->
	<link href="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
css/style.css" rel="stylesheet" />
	<!-- Modernizr JS -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/modernizr-3.6.0.min.js"><?php echo '</script'; ?>
>

	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

	<link href="<?php echo $_smarty_tpl->getValue('_layoutParams')['root'];?>
views/layout/neela/css/font-awesome-4.7.0/css/font-awesome.min.css"
		rel="stylesheet" />


</head>

<body>

	<div id="wrapper">
		<?php $_smarty_tpl->renderSubTemplate($_smarty_tpl->getValue('_contenido'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
	</div>
	<!-- END WRAPPER -->

	<!-- Google Maps API and Map Richmarker Library -->
	<!-- <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHOXsTqoSDPQ5eC5TChvgOf3pAVGapYog"><?php echo '</script'; ?>
> -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/richmarker.js"><?php echo '</script'; ?>
>
	<!-- Libs -->

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/jquery-ui.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/jquery-migrate-3.3.2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/jquery.placeholder.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/ismobile.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/retina.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/waypoints.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/waypoints-sticky.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/owl.carousel.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/lightbox.min.js"><?php echo '</script'; ?>
>
	<!-- Nicescroll script to handle gallery section touch slide -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/jquery.nicescroll.js"><?php echo '</script'; ?>
>
	<!-- Hero Background Slideshow Script -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/jquery.zoomslider.js"><?php echo '</script'; ?>
>
	<!-- Template Scripts -->
	<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/scripts.js"><?php echo '</script'; ?>
> -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('_layoutParams')['ruta'];?>
js/validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"><?php echo '</script'; ?>
>
	<input type="hidden" id="root" value="<?php echo $_smarty_tpl->getValue('_layoutParams')['host2'];?>
">

	<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"><?php echo '</script'; ?>
>

	<?php if ((true && (true && null !== ($_smarty_tpl->getValue('_layoutParams')['js'] ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('_layoutParams')['js'])) {?>
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('_layoutParams')['js'], 'js');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('js')->value) {
$foreach0DoElse = false;
?>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('js');?>
?v=<?php echo $_smarty_tpl->getValue('_layoutParams')['filever'];?>
" type="text/JavaScript"><?php echo '</script'; ?>
>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	<?php }?>

</body>

</html><?php }
}
