<?php 
	function selecionOrigen(){
		if (isset($_GET['v'])) {
			$member = $_GET['v'];
			return $member;
		};
	}
	function t1() {
		if (isset($_GET['t1'])) {
			$t1 = $_GET['t1'];
			return $t1;
		};
	}
	function t2() {
		if (isset($_GET['t2'])) {
			$t2 = $_GET['t2'];
			return $t2;
		};
	}
?>

<div class="headerToCloseComercioWrapper">
	<div class="headerToCloseComercioBox" id="cabecera1"></div>
    <div class="headerToCloseEmpresaBox" id="cabecera2"></div>
    <div class="headerToClosePersonaBox" id="cabecera3"></div>
</div>

<div class="headerComercioWrapper">
	<div class="headerComercioTitle" id="titulo1"></div>
    <div class="headerEmpresaTitle" id="titulo2"></div>
    <div class="headerPersonaTitle" id="titulo3"></div>
    <div class="headerLogo"><a href="index.php"><img src="imagenes/logoPlatamovil.png" width="289" height="78" alt="Platamovil Logo" border="0"/></a></div>
</div>
