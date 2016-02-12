<?php $m = 'prensa'; ?>
<?php include('header.php') ?>

<div class="mainContent clearfix">

<h1>SALA DE PRENSA</h1>

	<div class="sideBar">
		<ul class="mainSide">
			<li class="selected"><a href="prensaPrensa.php?pagina=<?php echo $_GET['pagina']?>">Noticias y Comunicados Prensa</a></li>
			<li><a href="prensaFotos.php">Imágenes e infografías</a></li>
			<li><a href="prensaEntidades.php">Entidades</a></li>
		</ul>

	</div>


	<div class="rightContet">


<table class="archivoTable">
	<?php pintar_comunicados(); ?>	
</table>
	</div>

</div>

<?php include('footer.php') ?>