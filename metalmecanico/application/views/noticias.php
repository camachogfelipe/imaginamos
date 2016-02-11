<?php include 'header.php' ?>
	<div class="main_content">
		<h1>NOTICIAS</h1>
		<ul id="slider">
                    <?php
                    $conta = 0;
                    foreach ($noticias as $n) {
                        if($conta == 0){
                            echo "<li>";
                        }
                        $link;
                        if($n->tipo == 2){
							$link = "../application/modules/noticias/assets/images/".$n->link;
						}
						else{
							$link = $n->link;
						}
                    ?>
				<div class="noticia hi-icon-effect-9 hi-icon-effect-9a">
					<a href="<?=$link?>" target="_blank"><img class="hi-icon" src="../application/modules/noticias/assets/images/<?=$n->imagen?>" width="315" height="100"></a>
					<h3 class="subtitulo_t"><?=$n->titulo?></h3>
					<p>
						<span class="pp"><?=$n->texto?></span>
					</p>
					<a href="<?=$link?>" target="_blank"><button class="btn btn-3 btn-3e vermas">Ver más</button></a>
				</div><!-- end noticia -->
                    <?php
                    $conta++;
                        if ($conta == 3) {
                            echo "</li>";
                            $conta = 0;
                        }
                    }
                    ?>
		</ul>
		<div style="clear:both"></div>
	</div><!-- end main_content -->
<?php include 'footer.php' ?>
