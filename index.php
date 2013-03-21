<?php
	ob_start('ob_gzhandler');
	header('Vary: Accept-Encoding');
	$cache_expire = 0;
	header("Pragma: private");
	header("Pragma: no-cache");
	header("Pragma: no-store");
	header('Expires: ' . date('D, d M Y H:i:s', time()+$cache_expire) . ' GMT');
	define('Dropbox', 'https://dl.dropbox.com/u/57960869/');
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
		<link rel="stylesheet" type="text/css" href="themes/css/loader.css" media="all">
		<link rel="stylesheet" type="text/css" href="themes/css/stylesheet.min.css" media="all">
		<link rel="stylesheet" type="text/css" href="themes/css/docs/assets/css/docs.css" media="all">
		<link rel="stylesheet" type="text/css" href="themes/css/docs/assets/css/bootstrap.css" media="all">
		<link rel="stylesheet" type="text/css" href="themes/css/docs/assets/css/bootstrap-responsive.css" media="all">
		<title>ltiviaOT | Portafolio</title>
	</head>
   <body class="container-fluid">
		<?php if (file_exists("mod/loader.php")){ include('mod/loader.php'); } ?>
		<div id="front" class="row">
			<div id="logo" class="row">
				<div class="span3">
					<a href="http://altiviaot.com"><img src="<?php echo Dropbox; ?>Altiviaot/portafolio/logotipo.png" alt=""></a>
				</div>
			</div>
			<br>
			<div id="contenido" class="row">
				<br>
				<?php if (file_exists("mod/go.php")){ include('mod/go.php'); } ?>
		  <?php if (file_exists("mod/claro.php")){ include('mod/claro.php'); } ?>
				<?php if (file_exists("mod/on.php")){ include('mod/on.php'); } ?>
		  <?php if (file_exists("mod/hogar.php")){ include('mod/hogar.php'); } ?>
				<?php if (file_exists("mod/amb.php")){ include('mod/amb.php'); } ?>
		  <?php if (file_exists("mod/angela.php")){ include('mod/angela.php'); } ?>
				<?php if (file_exists("mod/onw.php")){ include('mod/onw.php'); } ?>
			</div>
			<footer class="row">
				<p><span>Nota:</span> Todos los sitios presentados aqui solo son un pequeño repositorio del original.</p>
				<p>Todos los derechos reservados por <span><strong>AltiviaOT © 2012.</strong></span> Copyright @ 2012.
				<br>Visita nuestro <a href="http://blog.altiviaot.com">blog</a>.</p>
			</footer>
		</div>
	</body>
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="http://raw.github.com/twitter/bootstrap/master/js/bootstrap-collapse.js"></script>
	<script type="text/javascript" src="themes/js/disable select text.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('#loader').slideUp(2500)
			$('body').css('overflow-y', 'auto');
		});
	</script>
</html>