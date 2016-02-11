<?php include 'header.php' ?>
	<div class="main_content">
		<div class="sub_alcance">
			<h1>QUIÉNES SOMOS</h1>
			<a href="../quienes_somos"><button class="btn btn-3 btn-3e volver">Volver</button></a>
			<p>
				<img id="img_alcancesub" align="left" src="../application/modules/quienes/assets/images/<?=$quienes[0]->imagen?>" alt="" width="500" height="250">
				<span class="subtitulo">Políticas de calidad</span>
				<?=$quienes[0]->texto_detallado?>
			</p>
		</div>
	</div><!-- end main_content -->
<?php include 'footer.php' ?>
