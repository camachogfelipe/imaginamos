<!DOCTYPE HTML><html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="robots" content="noindex, nofollow">
		<title>Administrador de contenidos</title>
		<link rel="shortcut icon" href="../front/favicon.ico" />
		<link type="text/css" rel="stylesheet" href="../shared/css/admin/reset.css" />
		<link type="text/css" rel="stylesheet" href="../shared/css/admin/root.css" />
		<link type="text/css" rel="stylesheet" href="../shared/css/admin/grid.css" />
		<link type="text/css" rel="stylesheet" href="../shared/css/admin/jquery-plugin-base.css" />
		<link type="text/css" rel="stylesheet" href="../shared/css/admin/jquery-ui.css" />
		<script type="text/javascript" src="../shared/js/admin/funcionesValida.js"></script>
		<script type="text/javascript" src="../shared/js/jquery.js"></script>
		<script type="text/javascript" src="../shared/js/admin/jquery.ui.js"></script>
		<script type="text/javascript" src="../shared/js/admin/jquery.wysiwyg.js"></script>
		<script type="text/javascript" src="../shared/js/admin/jquery.tablesorter.min.js"></script>
		<script type="text/javascript" src="../shared/js/admin/jquery.tablesorter.pager.js"></script>
		<script type="text/javascript" src="../shared/js/admin/fullcalendar.min.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<div id="header">
				<div class="logo">
					<div style="width:140px; margin:0 auto; margin-top:1em;  display:block;">
						<a href="../index.php" target="_blank">
							<img src="../shared/img/admin/logo_bn.png" alt="logo" class="sg"/>
						</a>
					</div>
				</div>
				<div id="notifications">
					<a href="inicio.php" class="qbutton-left">
						<img src="../shared/img/admin/icons/header/dashboard.png" width="16" height="15" alt="dashboard" />
					</a>
					<div class="clear">
					</div>
				</div>
				<div id="quickmenu">
				</div>
				<div id="profilebox">
					<a href="#" class="display">
						<b>Bienvenido</b>
						<span><?=$_SESSION['nombreUsuario']?></span>
					</a>
					<div class="profilemenu">
						<ul>
							<li>
								<a href="./cerrarSesion.php">Cerrar sesi&oacute;n</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="clear">
				</div>
			</div>
			<div id="main">
				<div id="sidebar">
					<style type="text/css">
						#sidemenu
						.submenu{background-color:#FFF}#sidemenu
						.submenu.inactive{display:none}#sidemenu
						.submenu.expand{display:none;background-color:#FFF}#sidemenu .submenu
						ul{margin:0;padding:0}
					</style>
					<nav id="sidemenu">
						<ul>
							<li class="<?php echo ($pagina=='contacto' ? "" : "in");?>active">
								<a class="" href="./contactos.php">
									<img src="../shared/img/admin/icons/sidemenu/file.png" width="16" height="16" alt="icon"/> Contacto </a>
							</li>
						</ul>
					</nav>
					<script type="text/javascript">
						$(function(){var $sidemenu=$("#sidemenu"),$submenu=$('.submenu'),$action=$('a.action_submenu',$sidemenu),collapse='collapse',expand='expand',actionSubmenu=function(event){event.preventDefault();var $this=$(this);if(!$this.hasClass(expand)){$action.removeClass(expand);$submenu.slideUp('fast','linear',function(){$(this).hide();});$this.addClass(expand).next($submenu).slideDown();}
								return false;};$($action).on('click',actionSubmenu);});
					</script>
				</div>
				<div id="page">
					<div class="page-title">
						<div class="in">
							<div class="titlebar">
								<h2><?=strtoupper(str_replace("_", " ", $pagina))?></h2>
								<p>Bienvenido al administrador de contenidos de Imaginamos.com</p>
							</div>
							<div class="shortcuts-icons">
							</div>
							<div class="clear">
							</div>
						</div>
					</div>
					<div class="content">