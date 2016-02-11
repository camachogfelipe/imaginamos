<?php include 'header.php' ?>
	<div class="main_content">
		<div class="sub_alcance">
			<h1>PROYECTOS</h1>
			<a href="../front_proyectos"><button class="btn btn-3 btn-3e volver">Volver</button></a>
			<div class="proy_left">
			<img id="img_alcancesub" align="left" src="../application/modules/galerias/assets/images/<?=$imagenes[0]->imagen?>" alt="" width="500" height="250">
			<div class="thumbnails">
				<ul>
                                    <?php
                                    foreach($imagenes as $i){
                                    ?>
					<li><img class="thumb" src="../application/modules/galerias/assets/images/<?=$i->imagen?>" width="90" height="70" alt=""></li>
                                    <?php
                                    }
                                    ?>
				</ul>
			</div>
			</div>
			<p>
				<span class="subtitulo"><?=$proyecto[0]->titulo?></span>
				<?=$proyecto[0]->texto?>
			</p>
		</div>
	</div><!-- end main_content -->

	<script type="text/javascript">
	$(".thumb").click(function() {
        $imgURL = $(this).attr("src");
        $("#img_alcancesub")
        .fadeOut(400, function() {
            $("#img_alcancesub").attr('src',$imgURL);
        })
        .fadeIn(400);
        });
	</script>
<?php include 'footer.php' ?>