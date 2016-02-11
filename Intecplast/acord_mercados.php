<?php


    include_once './php/clases.php';
    
    $articuloDAO = new articuloDAO();
    $mercado = new articulo();
	$mercado = $articuloDAO->getBySeccion(2);


?>

<style>

	ul.acordion_mercados{
		height: 556px;
		width: 965px;
	}

	li.bt_acordion{
		background: url("images/sombra_botonacordion.png") no-repeat #F8F8F8;
		cursor: pointer;
		float: left;
		height: 556px;
		width: 156px;
	}

	li.cont_acordion{
		background: #E3E3E3;
		float: left;
		height: 556px;
		overflow: hidden;
		width:0px;
	}

	.cont_intacordion{
		width: 290px;
		height: 556px;
		margin-left: 8px;
	}

	#acordmercados{
		background: none;
	}

	.bt_vergal a {
    background: url("../images/btvergal.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);
    color: #FFFFFF;
    display: block;
    font-family: DINMedium;
    font-size: 12px;
    font-weight: bold;
    height: 10px;
    letter-spacing: -1px;
    overflow: hidden;
    padding-top: 12px;
    text-decoration: none;
    width: 98px;
	}

	.bt_vergal a:hover {
    background-position: -96px 0;
    color: #FFFFFF;
    font-family: DINMedium;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: -1px;
}

	.bt_vergal a:active {
    background-position: -192px 0;
    color: #FFFFFF;
    font-family: DINMedium;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: -1px;
	}

	.tituloacordmercados {
    background-color: #E3E3E3;
    border-left: 0 none;
    color: #6E6F6F;
    font-family: DINMedium;
    font-size: 30px;
    margin-right: 3px;
    padding: 10px 0;
	}

	#accordion-2 p {
    color: #616161;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 14px;
    line-height: 20px;
    text-align: justify;
}

</style>


<div id="accordion-2">

<ul class="acordion_mercados">
	<li class="bt_acordion">
		<img src="images/iconocuid2.png"  />
	</li>
	<li class="cont_acordion" style="width:305px;">
		<div class="cont_intacordion">
			<img src="images/iconocuidadotop.png" alt="" />
			<img src=".<?php echo $mercado[0]->getImagen_e() ?>"  width="294" height="118" />
			<span class="tituloacordmercados">
				<?php echo $mercado[0]->getTitulo_e() ?>
			</span>
			<p>			
				<?php echo $mercado[0]->getDescripcion_e() ?>
			</p>
			<div class="bt_vergal">
				<a href="mercados_galeria.php"></a>
			</div>	
		</div>
	</li>
	
	<li class="bt_acordion">
		<img src="images/iconofarm2.png"  />
	</li>
	<li class="cont_acordion">
		<div class="cont_intacordion">
			<img src="images/iconocuidadotop.png" alt="" />
			<img src=".<?php echo $mercado[1]->getImagen_e() ?>"  width="294" height="118" />
			<span class="tituloacordmercados">
				<?php echo $mercado[1]->getTitulo_e() ?>
			</span>
			<p>			
				<?php echo $mercado[1]->getDescripcion_e() ?>
			</p>
			<div class="bt_vergal">
				<a href="farmaceutica_galeria.php"></a>
			</div>
		</div>
	</li>
	
	<li class="bt_acordion">
		<img src="images/iconoind2.png"  />
	</li>
	<li class="cont_acordion">
		<div class="cont_intacordion">
			<img src="images/iconocuidadotop.png" alt="" />
			<img src=".<?php echo $mercado[2]->getImagen_e() ?>"  width="294" height="118" />
			<span class="tituloacordmercados">
				<?php echo $mercado[2]->getTitulo_e() ?>
			</span>
			<p>			
				<?php echo $mercado[2]->getDescripcion_e() ?>
			</p>
			<div class="bt_vergal">
				<a href="industrias_galeria2.php"></a>
			</div>
		</div>
	</li>
	
	<li class="bt_acordion">
		<img src="images/iconoalimentos2.png"  />
	</li>
	<li class="cont_acordion">
		<div class="cont_intacordion">
			<img src="images/iconocuidadotop.png" alt="" />
			<img src=".<?php echo $mercado[3]->getImagen_e() ?>"  width="294" height="118" />
			<span class="tituloacordmercados">
				<?php echo $mercado[3]->getTitulo_e() ?>
			</span>
			<p>			
				<?php echo $mercado[3]->getDescripcion_e() ?>
			</p>
			<div class="bt_vergal">
				<a href="alimentos_galeria.php"></a>
			</div>
		</div>
	</li>
</ul>

</div>

<script>
	//slider  
	$(".bt_acordion").click(function(event) {
	  event.preventDefault();
	  $(".cont_acordion").stop(true).animate({width: 0}, 500);
	  $(this).next(".cont_acordion").stop(true).animate({width: 305}, 500);
	});
</script>

