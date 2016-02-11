<?php include 'header.php' ?>
	<div class="clean"></div>
	<div class="main_content">
		<div id="cont_slider">
			<div id="slides">
				<div class="slides_container">
                                    <?php
                                    foreach($slider as $s){
                                    ?>
					<div class="slide">
                                            <img src="../application/modules/slider/assets/images/<?=$s->imagen?>" width="1000" height="370">
						<div class="banner_text">
							<p><span class="text1"><?=$s->titulo?></span><br/><span class="text2"><?=$s->subtitulo?></span><br/><span class="text3">Ingeniería Eléctrica</span></p>
						</div>
					</div>
                                    <?php
                                    }
                                    ?>
				</div>
			</div>
		</div><!-- end cont_slider -->
	</div><!-- end main_content -->
	<div class="linea"><img src="img/bar1.png"></div>
	<div class="fixed">
	<div class="main_content">
		<ul id="destacados">
                    <?php
                    foreach ($destacados as $d){
						$titulos = explode(" ", $d->titulo);
						$total=count($titulos);
                    ?>
				<li>
				<a href="<?=$d->link?>"><span>
					<?php
					if($total > 1){
						for($i=0;$i<=($total-2);$i++){
								echo $titulos[$i]." ";
						}
						echo "</span> [".$titulos[$total-1]."] ";
					}
					else{
						echo $titulos[0];	
					}
					?>
					</a>
					<div class="ondest"><div><img src="img/lupa.png"><br/><h2><?=$d->subtitulo?></h2><br/><p><?=$d->texto?></p></div></div></li>
                    <?php
                    }
                    ?>			
		</ul>
	</div><!-- end main_content -->
	</div>		
<?php include 'footer.php' ?>
