<?php include 'header.php' ?>
	<div class="main_content">
		<div class="content_wrapper">
			<h1>PROYECTOS</h1>
			<div class="elementos">
				<ul id="slider2">
					
                                        <?php
                                        $conta = 0;
                                        foreach ($proyectos as $p) {
                                            if($conta == 0){
                                                echo "<li>";
                                            }
                                        ?>    
					<div class="proyecto">
						<a href="../proyectos_detalle/<?=$p->id?>">
							<div class="hi-icon-effect-9 hi-icon-effect-9a">
								<img class="hi-icon" src="../application/modules/proyectos/assets/images/<?=$p->imagen_principal?>" width="180" height="110">
							</div>
						</a>
						<span class="subtitulo"><?=$p->titulo?></span>
					</div>
                                        <?php
                                        $conta++;
                                            if($conta == 5){
                                                echo "</li>";
                                                $conta = 0;
                                            }
                                        }
                                        ?>
				</ul>
			</div> <!-- end elementos -->
		</div><!-- end content_wrapper -->
	</div><!-- end main_content -->
	<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox2").fancybox({
			arrows:false
		});
	});

	$(".thumb").click(function() {
    $imgURL = $(this).attr('src');
    $(".big_img")
        .fadeOut(400, function() {
            $(".big_img").attr('src',$imgURL);
        })
        .fadeIn(400);
});
</script>
<?php include 'footer.php' ?>