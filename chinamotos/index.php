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
<link type="text/css" href="css/browser.css" rel="stylesheet" />

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/jquery.mosaic.min.js"></script>
<script type="text/javascript" src="js/jSite.js"></script>
<script type="text/javascript" src="js/browser.js"></script>

</head>
<body>


	<?php include( 'header.php' ); ?>


    <div class="conBgHome"></div>


    <div class="conMain">
    	<div class="conInfoGral">
        	<!--Slider-->
    		<div class="conSlider">
            	<div class="slider-wrapper theme-default">
            		<div class="slider nivoSlider">
					<?PHP

						$datos = Parametros::getImgBanner();
						
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
									$con = $i + 1;
									$tit = '#caption'.$con; 			
								?>	 
										<img src="cms/modules/bannerIndex/files/big/<?PHP echo trim($datos[$i]['banners_image']); ?>" width="1000" height="394" alt="" title="<?PHP echo $tit; ?>" />
								<?PHP
							}
						}
					?>	
					</div>
					<?PHP

						$datos2 = Parametros::getImgBanner();
						
						if(is_array($datos2) && !empty($datos2)) {
					
							for($j = 0; $j < sizeof($datos2); $j++) {
									$con = $j + 1;
									$tit = 'caption'.$con; 			
								?>	 
										<div id="<?PHP echo $tit; ?>" class="nivo-html-caption">
											<div class="txSlider">
												<p class="sliderS1"><strong><?PHP echo trim($datos2[$j]['banners_txt1']); ?></strong></p>
												<p class="sliderS2"><?PHP echo trim($datos2[$j]['banners_txt2']); ?></p>
												<p class="sliderS3"><?PHP echo trim($datos2[$j]['banners_txt3']); ?></p>
											</div>
											<a href="<?PHP echo trim($datos2[$j]['banners_url']); ?>"><div class="btSlide"><p>VER MÁS</p></div></a>
										</div>
								<?PHP
							}
						}
					?>
				</div>
        	</div>
            <!--Fin Slider-->
			<?PHP 
			
				$datos3 = Parametros::getListProdNov();
				
				$datos31 = Parametros::getListImgProdNov($datos3[0]['vendemos_prod_id']);
			?>
			<!--Novedades-->
        	<div class="conNovHome">
            	<!--Fila Novedades-->
            	<div class="filaNov">
                	<!--Item Novedad-->
                	<div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos3[0]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos3[0]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos3[0]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
					<?PHP
						$datos31 = Parametros::getListImgProdNov($datos3[1]['vendemos_prod_id']);
					?>				
                    <!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos3[1]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos3[1]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos3[1]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
					
                    <!--Titulo Novedad-->
                    <a href="novedades.php">
                    	<div class="titNov"><p class="tNov">NOVEDADES</p><p class="pNov">ENCUENTRA LAS MEJORES PARTES PARA PONER A VOLAR TU MOTO</p></div>
                    </a>
                    <!--Fin Titulo Novedad-->
                    <?PHP
						$datos31 = Parametros::getListImgProdNov($datos3[2]['vendemos_prod_id']);
					?>
					<!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos3[2]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos3[2]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos3[2]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
					<?PHP
						$datos31 = Parametros::getListImgProdNov($datos3[3]['vendemos_prod_id']);
					?>
                    <!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos3[3]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos3[3]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos3[3]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
                </div>
                <!--Fin Fila Novedades-->
				<?PHP
						$datos31 = Parametros::getListImgProdNov($datos3[4]['vendemos_prod_id']);
					?>
                <!--Fila Novedades-->
                <div class="filaNov">
                	<!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos3[4]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos3[4]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos3[4]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
					<?PHP
						$datos31 = Parametros::getListImgProdNov($datos3[5]['vendemos_prod_id']);
					?>
                    <!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos3[5]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos3[5]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos3[5]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
					<?PHP
						$datos31 = Parametros::getListImgProdNov($datos3[6]['vendemos_prod_id']);
					?>
                    <!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos3[6]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos3[6]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos3[6]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
					<?PHP
						$datos31 = Parametros::getListImgProdNov($datos3[7]['vendemos_prod_id']);
					?>
                    <!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos3[7]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos3[7]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos3[7]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
					<?PHP
						$datos31 = Parametros::getListImgProdNov($datos3[8]['vendemos_prod_id']);
					?>
                    <!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos3[8]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos3[8]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos3[8]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
					<?PHP
						$datos31 = Parametros::getListImgProdNov($datos3[9]['vendemos_prod_id']);
					?>
                    <!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos3[9]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos3[9]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos3[9]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
                </div>
                <!--Fin Fila Novedades-->
            </div>
            <!--Fin Novedades-->
			<?PHP
				$datos4 = Parametros::getListProdProm();
				
				
			
			?>
			
			<!--Promociones-->
            <div class="conPromoHome">
            	<div class="conTitCenPromo"><p class="tCenPromo"><strong>Destacados</strong></p></div>
                <div class="colIzqPromoHome">
                	<p class="tPromoHome">PROMOCIONES</p>
                    <p class="sPromoHome"></p>
                </div>
                <div class="colDerPromoHome">
                	<p class="pPromoHome">PARTES OEM, SON PARTES HOMOLOGADAS CONSERVANDO UNA EXCELENTE CALIDAD  PERO CON UN MEJOR PRECIO QUE LAS ORIGINALES, COMPRALAS CON CONFIANZA, LA QUE TE DAN LAS PARTES SP. SMART PARTS, DESARROLLADAS POR NOSOTROS PARA UN MERCADO EXIGENTE.</p>
                </div>
				
				
				<!--Imgs. Promociones-->
				<div class="conImgsPromoHome">
				
				<?PHP
					$datos31 = Parametros::getListImgProdNov($datos4[0]['vendemos_prod_id']);
				?>
				 <!--Fila Novedades-->
                <div class="filaNov">
                	<!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos4[0]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos4[0]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos4[0]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
					<?PHP
					$datos31 = Parametros::getListImgProdNov($datos4[1]['vendemos_prod_id']);
				?>
                    <!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos4[1]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos4[1]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos4[1]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
					<?PHP
					$datos31 = Parametros::getListImgProdNov($datos4[2]['vendemos_prod_id']);
				?>
                    <!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos4[2]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos4[2]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos4[2]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
					<?PHP
					$datos31 = Parametros::getListImgProdNov($datos4[3]['vendemos_prod_id']);
				?>
                    <!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos4[3]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos4[3]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos4[3]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
					<?PHP
					$datos31 = Parametros::getListImgProdNov($datos4[4]['vendemos_prod_id']);
				?>
                    <!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos4[4]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos4[4]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos4[4]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
					<?PHP
					$datos31 = Parametros::getListImgProdNov($datos4[5]['vendemos_prod_id']);
				?>
                    <!--Item Novedad-->
                    <div class="itemNov">
                    	<a href="productoInfo.php?info=<?PHP echo trim($datos4[5]['vendemos_prod_id']); ?>" class="mosaic-block bar">
							<div class="mosaic-overlay">
								<div class="details">
									<p class="tMosaic"><?PHP echo trim($datos4[5]['vendemos_prod_tit']); ?></p>
									<p class="pMosaic"><?PHP echo trim($datos4[5]['vendemos_prod_resum']); ?></p>
								</div>
							</div>
							<div class="mosaic-backdrop"><img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="158" height="158" alt="" /></div>
						</a>
                    </div>
                    <!--Fin Item Novedad-->
                </div>
                <!--Fin Fila Novedades-->
				
				</div>
				
				<!--Fin Imgs. Promociones-->
            </div>
            <!--Fin Promociones-->
    	</div>
    </div>
    
    
	<?php include( 'footer.php' ); ?>


</body>
</html>