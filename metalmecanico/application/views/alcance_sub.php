<?php include 'header.php' ?>
	<div class="main_content">
		<div class="sub_alcance">
			<h1>ALCANCE</h1>
			<a href="../front_alcance"><button class="btn btn-3 btn-3e volver">Volver</button></a>
			<p>
				<img id="img_alcancesub" align="left" src="../application/modules/alcance/assets/images/<?=$alcance[0]->imagen?>" alt="" width="500" height="250">
				<span class="subtitulo"><?=$alcance[0]->titulo?></span>
				<?=$alcance[0]->texto_detallado?>
			</p>
		</div>
	</div><!-- end main_content -->
<?php include 'footer.php' ?>