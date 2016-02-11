<?PHP 
	require_once("includes/clase_parametros.php");
	
	  if (isset($_POST["cat"])) {
		$id = $_POST['cat'];
	  }
	  
	   if (isset($_GET["cat"])) {
		$id = $_GET["cat"];
	  }
	
	
	
	
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
				
                <div class="colIzqCatPro">
                	<p class="tPromoHome">PRODUCTOS</p>
                    <p class="sPromoHome">&nbsp;</p>
                </div>
                <div class="colDerCatPro">
                	<p class="pPromoHome">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                </div>

                <div class="conProFiltrados">
                	
                    <div class="panePro">
						<div class="scroll-pro">
							<div class="conFilaPro">
						<?PHP  
							if($id != 0){	
								$datos5 = Parametros::getListPxCat($id);
								
								$conta = 1;
								if(is_array($datos5) && !empty($datos5)) {
									for($i = 0; $i < sizeof($datos5); $i++) {
									
											$datos31 = Parametros::getListImgProdNov($datos5[$i]['vendemos_prod_id']);
										?>	 
											<div class="conPro">
												<a class="mosaic-block bar3" href="productoInfo.php?info=<?PHP echo trim($datos5[$i]['vendemos_prod_id']); ?>">
													<div class="mosaic-overlay">
														<div class="detailsPro">
															<p class="tMosaic"><?PHP echo trim($datos5[$i]['vendemos_prod_tit']); ?></p>
															<p class="pMosaic"><?PHP echo trim($datos5[$i]['vendemos_prod_resum']); ?></p>
														</div>
													</div>
													<div class="mosaic-backdrop">
															<img src="cms/modules/productos/files/big/<?PHP echo trim($datos31[0]['vendemos_prodimg_img']); ?>" width="298" height="198" alt="" />
													</div>
												</a>
											</div>
											
										
										<?PHP
										
											if($conta == 3){
												?>
													</div><div class="conFilaPro">
												<?PHP
												$conta = 0;
											}
											$conta++;
												
									}
								}
							}
						?>
							</div>
						
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