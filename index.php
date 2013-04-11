<?php
	ob_start('ob_gzhandler');
	header('Vary: Accept-Encoding');
	$cache_expire = 0;
	header("Pragma: private");
	header("Pragma: no-cache");
	header("Pragma: no-store");
	header('Expires: ' . date('D, d M Y H:i:s', time()+$cache_expire) . ' GMT');
	define('Dropbox', 'https://dl.dropbox.com/u/57960869/Altiviaot/portafolio/');
?>
<!DOCTYPE HTML>
<html lang="es-CO">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="googlebot" content="index,follow"/>
		<meta name="author" content="Ing. Jonathan Olier Miranda"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="shortcut icon" type="image/x-ico" href="themes/ico/fav.ico" />
		<link rel="stylesheet" type="text/css" href="<?php if (defined('Dropbox')){ echo Dropbox; } ?>../loader/loader.min.css" media="all">
		<link rel="stylesheet" type="text/css" href="themes/css/stylesheet.min.css" media="all">
		<link href="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/scrollbar.min.css" rel="stylesheet">
		<link href="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/bootstrap/bootstrap/css/altiviaot.css" rel="stylesheet">
		<style type="text/css">
			body { padding-top: 60px; padding-bottom: 40px; }
			#loader{ z-index: 2000; }
		</style>
		<link href="https://dl.dropboxusercontent.com/u/57960869/Altiviaot/bootstrap/bootstrap/css/altiviaot-responsive.css" rel="stylesheet">

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<title>ltiviaOT | Portafolio</title>
	</head>
   <body>
		<?php if (file_exists("mod/loader.php")){ include('mod/loader.php'); } ?>
		<header id="front" class="row-fluid">
			<div id="logo" class="row">
				<div class="span3">
					<a href="http://altiviaot.com"><img src="<?php echo Dropbox; ?>../logotipo.png" alt=""></a>
				</div>
			</div>
		</header>

		<section id="contenido" class="row-fluid">
			<?php if (file_exists("mod/contenido.php")){ include('mod/contenido.php'); } ?>
		</section>
		<footer class="row-fluid">
	  		<hr>
			<p><span>Nota:</span> Todos los sitios presentados aqui solo son un pequeño repositorio del original.</p>
			<p>Todos los derechos reservados por <span><strong>AltiviaOT © 2012.</strong></span> Copyright @ 2012.
			<br>Visita nuestro <a href="http://blog.altiviaot.com">blog</a>.</p>
		</footer>
	</body>
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<!-- <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-transition.js"></script> -->
	<!-- <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-alert.js"></script> -->
	<!-- <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-modal.js"></script> -->
	<!-- <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-dropdown.js"></script> -->
	<!-- <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-scrollspy.js"></script> -->
	<!-- <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-tab.js"></script> -->
	<!-- <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-tooltip.js"></script> -->
	<!-- <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-popover.js"></script> -->
	<!-- <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-button.js"></script> -->
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-collapse.js"></script>
	<script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-carousel.js"></script>
	<!-- <script src="https://raw.github.com/twitter/bootstrap/master/js/bootstrap-typeahead.js"></script> -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="themes/js/disable select text.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('#loader').slideUp(2500)
			$('body').css('overflow-y', 'auto');
		});
	</script>
</html>
