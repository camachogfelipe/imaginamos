<?php include 'header.php' ?>
	<div class="main_content">
		<h1>CLIENTES</h1>
		<div class="elementos">
			<ul id="slider3">
                            <?php
                            $conta = 0;
                            foreach($clientes as $c){
                                if($conta == 0){
                                    echo "<li>";
                                }
                            ?>
					<div class="cliente">
						<img src="../application/modules/clientes/assets/images/<?=$c->imagen?>" width="180" height="90">
					</div>
                            <?php
                            $conta++;
                                if($conta == 8){
                                    echo "</li>";
                                    $conta = 0;
                                }
                            }
                            ?>
			</ul>
		</div> <!-- end elementos -->
	</div><!-- end main_content -->
<?php include 'footer.php' ?>