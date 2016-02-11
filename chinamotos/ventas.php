<?PHP 
	require_once("includes/clase_parametros.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.: CHINA MOTOS :.</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="Description" lang="es" content="texto empresarial" />
<meta name="date" content="2011" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />

<link type="text/css" href="css/style.css" rel="stylesheet" />

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/jquery.mosaic.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollCat.min.js"></script>
<script type="text/javascript" src="js/jquery.selectbox.js"></script>
<script type="text/javascript" src="js/jSite.js"></script>

<style type="text/css">
	.btNav2 {background:url(images/bgBtNav.png) 0 0 no-repeat;}
</style>

</head>
<body>


	<?php include( 'header.php' ); ?>


    <div class="conMain">
    	<div class="conInfoGral">
			<!--Categorias-->
            <div class="conPromoHome">
            	<div class="conTitCenPromo"><p class="tCenPromo"><strong>Lo que vendemos</strong></p></div>
                
				
				<form class="form_pedidos" action="productos.php" method="post" id="formPedido" name="fvalida">
					<div class="conFiltrosCat">
						<div class="conSelCat">
							<div class="mainCat">                     
								<select name="cat" class="selCat">
									<option value="0">Categorías</option>
							<?PHP
								$datos = Parametros::getListCat();
									
									if(is_array($datos) && !empty($datos)) {
										for($i = 0; $i < sizeof($datos); $i++) {
									?>
										<option value="<?PHP echo trim($datos[$i]['vendemos_cat_id']); ?>">&nbsp; &bull; &nbsp;<?PHP echo trim($datos[$i]['vendemos_cat_tit']); ?></option>
									<?PHP
										}
								}
							?>
									</select>
							</div>
						</div>
						<a class="btFiltro" href="#" onclick="valida_envia()">FILTRAR</a>
						
					</div>
				
				</form>
				
				
				
                <div class="colIzqCatPro">
                	<p class="tPromoHome">CATEGORIAS</p>
                    <p class="sPromoHome">Nuestras marcas</p>
                </div>
                <div class="colDerCatPro">
                	<p class="pInfoPro">Nuestro catalogo esta organizado para que puedas encontrar el repuesto que necesitas. Tan solo debes buscar en que parte de  la moto se ubica lo que andas buscando y encontraras la referencia y la imagen.</p> 
                </div>
                <div class="galeriaScroll">
                    <div class="conGalCategorias">
        				<div class="pro-scroller">       
        					<div class="slideCategorias">
            					<ul>
                                	<!--Columna Pro.-->
                					<li>
										
										<?PHP  
												
												$datos5 = Parametros::getListCat();
												
												$conta = 1;
												if(is_array($datos5) && !empty($datos5)) {
													for($i = 0; $i < sizeof($datos5); $i++) {
													
															
														?>	 
															
															<a href="productos.php?cat=<?PHP echo trim($datos5[$i]['vendemos_cat_id']); ?>">
																<div class="conItemCat">
																	<div class="mosaic-block bar">
																		<div class="mosaic-overlay">
																			<div class="details">
																				<p class="tMosaic"><?PHP echo trim($datos5[$i]['vendemos_cat_tit']); ?></p>
																				<p class="pMosaic"><?PHP echo trim($datos5[$i]['vendemos_cat_con']); ?></p>
																			</div>
																		</div>
																		<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos5[$i]['vendemos_cat_img']); ?>" width="158" height="158" alt="" /></div>
																	</div>
																</div>
															</a>
															
															
															
															
															
														
														<?PHP
														
															if($conta == 2){
																?>
																	</li><li>
																<?PHP
																$conta = 0;
															}
															$conta++;
																
													}
												}
											
										?>
										</li>
									
                                    <!--Fin Columna Pro.-->
                				</ul>
        					</div>          	
        					<div class="lower-panel"></div>
						</div>   
    				</div>
                </div>
            </div>
            <!--Fin Categorias-->
    	</div>
    </div>
    <script>
      function valida_envia(){
        

        //el formulario se envia
        //alert("va enviar");
        document.fvalida.submit();
      }


    </script>
    
	<?php include( 'footer.php' ); ?>


</body>
</html>