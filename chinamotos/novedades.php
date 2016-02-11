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
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/jquery.mosaic.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollCat.min.js"></script>
<script type="text/javascript" src="js/jquery.selectbox.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="js/jSite.js"></script>

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
            	<div class="conTitCenPromo"><p class="tCenPromo"><strong>Novedades</strong></p></div>
                <div class="conTxDesInt">
                	<p class="txDesInt">"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable."</p>
                </div>
                <div class="conProFiltrados">
                	<?PHP
						$datos3 = Parametros::getListProdNov();
						
						
						$datos31 = Parametros::getListImgProdNov($datos3[0]['vendemos_prod_id']);
					?>
                    <div class="panePro">
						<div class="scroll-pro">
                            <!--Fila Productos x3-->
                            <div class="conFilaPro">
                            	<!--Producto-->
                            		<div class="conPro">
                                		<a class="mosaic-block bar" href="productoInfo.php?info=<?PHP echo trim($datos3[0]['vendemos_prod_id']); ?>">
											<div class="mosaic-overlay">
												<div class="details">
													<p class="tMosaic"><?PHP echo trim($datos3[0]['vendemos_prod_tit']); ?></p>
													<p class="pMosaic"><?PHP echo trim($datos3[0]['vendemos_prod_resum']); ?></p>
												</div>
											</div>
											<div class="mosaic-backdrop">
                                                	<img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="298" height="198" alt="" />  
                                            </div>
										</a>
                                	</div>
                            	<!--Fin Producto-->
                                <!--Producto-->
								<?PHP
									$datos31 = Parametros::getListImgProdNov($datos3[1]['vendemos_prod_id']);
								?>
                            		<div class="conPro">
                                		<a class="mosaic-block bar" href="productoInfo.php?info=<?PHP echo trim($datos3[1]['vendemos_prod_id']); ?>">
											<div class="mosaic-overlay">
												<div class="details">
													<p class="tMosaic"><?PHP echo trim($datos3[1]['vendemos_prod_tit']); ?></p>
													<p class="pMosaic"><?PHP echo trim($datos3[1]['vendemos_prod_resum']); ?></p>
												</div>
											</div>
											<div class="mosaic-backdrop">
                                                	<img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="298" height="198" alt="" />  
                                            </div>
										</a>
                                	</div>
                            	<!--Fin Producto-->
                                <!--Producto-->
								<?PHP
									$datos31 = Parametros::getListImgProdNov($datos3[2]['vendemos_prod_id']);
								?>
                            		<div class="conPro">
                                		<a class="mosaic-block bar" href="productoInfo.php?info=<?PHP echo trim($datos3[2]['vendemos_prod_id']); ?>">
											<div class="mosaic-overlay">
												<div class="details">
													<p class="tMosaic"><?PHP echo trim($datos3[2]['vendemos_prod_tit']); ?></p>
													<p class="pMosaic"><?PHP echo trim($datos3[2]['vendemos_prod_resum']); ?> </p>
												</div>
											</div>
											<div class="mosaic-backdrop">
                                                	<img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="298" height="198" alt="" />  
                                            </div>
										</a>
                                	</div>
                            	<!--Fin Producto-->
                            </div>
                            <!--Fin Fila Productos x3-->
                            <!--Fila Productos x3-->
							<?PHP
									$datos31 = Parametros::getListImgProdNov($datos3[3]['vendemos_prod_id']);
								?>
                            <div class="conFilaPro">
                            	<!--Producto-->
                            		<div class="conPro">
                                		<a class="mosaic-block bar" href="productoInfo.php?info=<?PHP echo trim($datos3[3]['vendemos_prod_id']); ?>">
											<div class="mosaic-overlay">
												<div class="details">
													<p class="tMosaic"><?PHP echo trim($datos3[3]['vendemos_prod_tit']); ?></p>
													<p class="pMosaic"><?PHP echo trim($datos3[3]['vendemos_prod_resum']); ?></p>
												</div>
											</div>
											<div class="mosaic-backdrop">
                                                	<img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="298" height="198" alt="" />  
                                            </div>
										</a>
                                	</div>
                            	<!--Fin Producto-->
								<?PHP
									$datos31 = Parametros::getListImgProdNov($datos3[4]['vendemos_prod_id']);
								?>
                                <!--Producto-->
                            		<div class="conPro">
                                		<a class="mosaic-block bar" href="productoInfo.php?info=<?PHP echo trim($datos3[4]['vendemos_prod_id']); ?>">
											<div class="mosaic-overlay">
												<div class="details">
													<p class="tMosaic"><?PHP echo trim($datos3[4]['vendemos_prod_tit']); ?></p>
													<p class="pMosaic"><?PHP echo trim($datos3[4]['vendemos_prod_resum']); ?></p>
												</div>
											</div>
											<div class="mosaic-backdrop">
                                                	<img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="298" height="198" alt="" />  
                                            </div>
										</a>
                                	</div>
                            	<!--Fin Producto-->
								<?PHP
									$datos31 = Parametros::getListImgProdNov($datos3[5]['vendemos_prod_id']);
								?>
                                <!--Producto-->
                            		<div class="conPro">
                                		<a class="mosaic-block bar" href="productoInfo.php?info=<?PHP echo trim($datos3[5]['vendemos_prod_id']); ?>">
											<div class="mosaic-overlay">
												<div class="details">
													<p class="tMosaic"><?PHP echo trim($datos3[5]['vendemos_prod_tit']); ?></p>
													<p class="pMosaic"><?PHP echo trim($datos3[5]['vendemos_prod_resum']); ?></p>
												</div>
											</div>
											<div class="mosaic-backdrop">
                                                	<img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="298" height="198" alt="" />  
                                            </div>
										</a>
                                	</div>
                            	<!--Fin Producto-->
                            </div>
                            <!--Fin Fila Productos x3-->
							<?PHP
									$datos31 = Parametros::getListImgProdNov($datos3[6]['vendemos_prod_id']);
								?>
                            <!--Fila Productos x3-->
                            <div class="conFilaPro">
                            	<!--Producto-->
                            		<div class="conPro">
                                		<a class="mosaic-block bar" href="productoInfo.php?info=<?PHP echo trim($datos3[6]['vendemos_prod_id']); ?>">
											<div class="mosaic-overlay">
												<div class="details">
													<p class="tMosaic"><?PHP echo trim($datos3[6]['vendemos_prod_tit']); ?></p>
													<p class="pMosaic"><?PHP echo trim($datos3[6]['vendemos_prod_resum']); ?></p>
												</div>
											</div>
											<div class="mosaic-backdrop">
                                                	<img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="298" height="198" alt="" />  
                                            </div>
										</a>
                                	</div>
                            	<!--Fin Producto-->
								<?PHP
									$datos31 = Parametros::getListImgProdNov($datos3[7]['vendemos_prod_id']);
								?>
                                <!--Producto-->
                            		<div class="conPro">
                                		<a class="mosaic-block bar" href="productoInfo.php?info=<?PHP echo trim($datos3[7]['vendemos_prod_id']); ?>">
											<div class="mosaic-overlay">
												<div class="details">
													<p class="tMosaic"><?PHP echo trim($datos3[7]['vendemos_prod_tit']); ?></p>
													<p class="pMosaic"><?PHP echo trim($datos3[7]['vendemos_prod_resum']); ?></p>
												</div>
											</div>
											<div class="mosaic-backdrop">
                                                	<img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="298" height="198" alt="" />  
                                            </div>
										</a>
                                	</div>
                            	<!--Fin Producto-->
								<?PHP
									$datos31 = Parametros::getListImgProdNov($datos3[8]['vendemos_prod_id']);
								?>
                                <!--Producto-->
                            		<div class="conPro">
                                		<a class="mosaic-block bar" href="productoInfo.php?info=<?PHP echo trim($datos3[8]['vendemos_prod_id']); ?>">
											<div class="mosaic-overlay">
												<div class="details">
													<p class="tMosaic"><?PHP echo trim($datos3[8]['vendemos_prod_tit']); ?></p>
													<p class="pMosaic"><?PHP echo trim($datos3[8]['vendemos_prod_resum']); ?></p>
												</div>
											</div>
											<div class="mosaic-backdrop">
                                                	<img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="298" height="198" alt="" />  
                                            </div>
										</a>
                                	</div>
                            	<!--Fin Producto-->
                            </div>
                            <!--Fin Fila Productos x3-->
                        </div>
                    </div>
                    
                </div>
                
            </div>
            <!--Fin Categorias-->
    	</div>
    </div>
    
    
	<?php include( 'footer.php' ); ?>


</body>
</html>