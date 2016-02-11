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

<style type="text/css">
	.btNav1 {background:url(images/bgBtNav.png) 0 0 no-repeat;}
</style>

</head>
<body>


	<?php include( 'header.php' ); ?>

	<?PHP
		$infoEmpresa = Parametros::getEmpresa();
	?>
    <div class="conMain">
    	<div class="conInfoGral">
            <div class="conPromoHome">
            	<div class="conTitCenPromo"><p class="tCenPromo"><strong>Lo que hacemos</strong></p></div>
                <div class="conEmpresa">
                	<div class="conColIzqEmp">
                    	<img src="cms/modules/empresa/files/big/<?PHP echo trim($infoEmpresa[0]['empresa_imagen']); ?>" width="410" height="410" alt="" />
                    </div>
                    <div class="conColDerEmp">
                    	<div class="conTitInfoPro">
                			<p class="tInfoPro">CHINA MOTOS</p>
                    		<p class="sInfoPro"><?PHP echo trim($infoEmpresa[0]['empresa_titulo']); ?></p>
                		</div>
                        <div class="paneEmp">
							<div class="scroll-Emp">
                        		<p class="pInfoPro"><?PHP $txt = trim($infoEmpresa[0]['empresa_contenido']); $txt = nl2br($txt);   echo $txt; ?></p>
                                
                        	</div>
                    	</div>
                        <div class="conImgInfEmp">
                        	<img src="images/imgEmpresa2.png" width="575" height="125" alt="" />
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </div>
    
    
	<?php include( 'footer.php' ); ?>


</body>
</html>