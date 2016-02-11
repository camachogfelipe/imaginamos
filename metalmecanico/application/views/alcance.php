<?php include 'header.php' ?>
	<div class="main_content">
		<div class="content_wrapper">
			<h1>ALCANCE</h1>
			<div class="elementos">
                            <?php
                            foreach($alcance as $a){
                            ?>
				<a href="../alcance_detalle/<?=$a->id?>"><div class="alcance_items hi-icon-effect-9 hi-icon-effect-9a">
					<img class="hi-icon" src="../application/modules/alcance/assets/images/<?=$a->imagen?>" width="180" height="110">
					<span class="subtitulo"><?=$a->titulo?></span>
				</div></a>
                            <?php
                            }
                            ?>
			</div> <!-- end elementos -->
		</div><!-- end content_wrapper -->
	</div>
<?php include 'footer.php' ?>