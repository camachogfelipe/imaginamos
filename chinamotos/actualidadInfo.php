<?PHP 
	require_once("includes/clase_parametros.php");
	
	$id = $_GET['not'];
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
		<?PHP
				   $datos5 = Parametros::getInfoNot($id);
				   
				   ?>	
		<div class="cont_modalNot">
            <div class="imgModalBox">
            	<img src="cms/modules/noticias/files/big/<?PHP echo trim($datos5[0]['news_image']); ?>" width="218" height="298" alt="" />
            </div>
            <div class="txModalBox">
            	<div class="conTitInfoPro">
                	<p class="tInfoAct"><?PHP echo trim($datos5[0]['news_title']); ?></p>
                    <p class="sInfoAct">&nbsp;</p>
                </div>
                <div class="paneAct">
					<div class="scroll-Act">
                    	<p class="pInfoPro"><?PHP echo trim($datos5[0]['news_resumen']); ?></p>
                        <p class="pInfoPro"><?PHP echo trim($datos5[0]['news_article']); ?></p>
                    </div>
                </div>
            </div>
		</div>

</body>
</html>