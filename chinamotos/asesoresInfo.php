<?PHP 
	require_once("includes/clase_parametros.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CCL - Corporación Colombiana de Logística S.A.</title>
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

		<div class="cont_modalNot">
            <div class="imgModalBox">
            	<img src="images/asesores.jpg" width="218" height="298" alt="" />
            </div>
            <div class="txModalBox">
            	<div class="conTitInfoPro">
                	<p class="tInfoAct">ASESORES</p>
                    <p class="sInfoAct">PERSONALIZADOS</p>
                </div>
                <div class="paneAct">
					<div class="scroll-Act">
                    	<p class="pInfoPro">Aqui encontrara un listado de asesor por ciudad, dispuesto a responder todas sus inquietudes.</p>
                        <ul class="listaAse">
							<?PHP

								$datos = Parametros::getInfoDistribAP();
								
								if(is_array($datos) && !empty($datos)) {
							
									for($i = 0; $i < sizeof($datos); $i++) {
														
										?>	 
												<li>
													<strong>>></strong>
													<?PHP echo trim($datos[$i]['distrib_ap_tit']); ?>
													<?PHP $c1 = trim($datos[$i]['distrib_ap_c1']); 
														  if($c1 != ""){
														  ?>
														  <p class="sCar"><?PHP echo $c1; ?></p>
														  <?PHP
														  }
														  $c2 = trim($datos[$i]['distrib_ap_c2']); 
														  if($c2 != ""){
														  ?>
														  <p class="sCar"><?PHP echo $c2; ?></p>
														  <?PHP
														  }	
														  $c3 = trim($datos[$i]['distrib_ap_c3']); 
														  if($c3 != ""){
														  ?>
														  <p class="sCar"><?PHP echo $c3; ?></p>
														  <?PHP
														  }
													 ?>
												</li>												
										<?PHP
									}
								}
							?>	
							</ul>
                    </div>
                </div>
            </div>
		</div>

</body>
</html>