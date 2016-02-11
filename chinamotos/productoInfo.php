<?PHP 
	require_once("includes/clase_parametros.php");
	
	$id = $_GET['info'];
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
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/jquery.mosaic.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollCat.min.js"></script>
<script type="text/javascript" src="js/jquery.selectbox.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="js/jquery.pajinate.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/jquery.bxSlider.min.js"></script>
<script type="text/javascript" src="js/jSite.js"></script>

<style type="text/css">
	.btNav2 {background:url(images/bgBtNav.png) 0 0 no-repeat;}
	ul.listaCarInfo ul li { background:url(images/arrow-lista-pro.png) left top no-repeat;}
</style>

</head>
<body>


	<?php include( 'header.php' ); ?>


    <div class="conMain">
    	<div class="conInfoGral">
			<!--Categorias-->
            <div class="conPromoHome">
            	<div class="conBtVolver">
                	<a href="javascript:history.back()"><div class="btBack">VOLVER</div></a>
                </div>
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
				
				
				
				<?PHP
				   $datos5 = Parametros::getInfoProd($id);
				   
				   ?>
                <div class="conInfoPro">
                	<div class="mainInfo">
                    	<div class="infoPro">
                        	<div class="conTitInfoPro">
                				<p class="tInfoPro"><?PHP echo trim($datos5[0]['vendemos_prod_tit']); ?></p>
                    			<p class="sInfoPro">&nbsp;</p>
                			</div>
                            <div class="paneInfo">
								<div class="scroll-Info">
                        			<p class="pInfoPro"><?PHP echo trim($datos5[0]['vendemos_prod_con']); ?></p>
                        		</div>
                            </div>
                        </div>
                        <div class="sepInfoPro"></div>
                        <div class="conCarInfo">
                        	<p class="tCarInfo">Caracteristicas</p>
                            <ul class="listaCarInfo">
                            	<!--Caracteristica-->
                            	<?PHP echo trim($datos5[0]['vendemos_prod_carac']); ?>
								
                            </ul>
                        </div>
                    </div>
                    <!--Gal. Big-->
                    <div class="conColDerGal">
                        <div class="conBgGal">
                        	<div class="conImgBigGal">
							    <?PHP

									$datos = Parametros::getListImgProdNov($id);
									
									if(is_array($datos) && !empty($datos)) {
								
										for($i = 0; $i < sizeof($datos); $i++) {
												$con = $i + 1;
												$tit = 'imgBig_'.$con; 			
											?>	 
												<div id="<?PHP echo $tit; ?>" class="imgBigPro">
													<img src="cms/modules/productos/files/big/<?PHP echo trim($datos[$i]['vendemos_prodimg_img']); ?>" width="408" height="348" alt="" />
												</div>													
											<?PHP
										}
									}
								?>	
							
                            </div>
                        </div>
                        <!--Fin Gal. Big-->
                        <!--Carrusel-->
                        <div class="conCarrusel">
                    		<div id="page-imgCarrusel"> 
								<div class="imgCarrusel-wrap">
									<ul id="sliderGalPro" class="multiple">
                                		<?PHP
											$datos2 = Parametros::getListImgProdNov($id);
									
											if(is_array($datos2) && !empty($datos2)) {
										
												for($j = 0; $j < sizeof($datos2); $j++) {
														$con2 = $j + 1;
														$tit2 = 'imgBig_'.$con2; 			
													?>	 
														
														<li>
															<a class="lista actual" data-id="<?PHP echo $tit2; ?>">
																<div class="conImgMinCar">
																	<div class="masImgMiniCar"></div>
																	<div class="imgMiniCar">
																		<img src="cms/modules/productos/files/big/<?PHP echo trim($datos2[$j]['vendemos_prodimg_img']); ?>" width="94" height="94" alt="" />
																	</div>
																</div>
															</a>    
														</li>
																										
													<?PHP
												}
											}	
										
										?>
										
									</ul>
									
									
								</div>
							</div>
                		</div>
						
						
                        <!--Fin Carrusel-->
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