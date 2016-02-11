<?PHP 
	require_once("includes/clase_parametros.php");
?>
<!DOCTYPE html> 
<!--<!DOCTYPE html> -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" /> 
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="Description" lang="es" content="texto empresarial" />
<meta name="date" content="2011" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<title>PLATAMÓVIL</title>
   
   
<!--esto es para linkear el jquery-->

<link href="css/index.css" type="text/css" rel="stylesheet"/>
<link href="css/idearama.css" rel="stylesheet" type="text/css">
     <!--menulateral-->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="js/botones.js"></script>
	<script type="text/javascript" src="js/menu-2.js"></script>	
<!--menu -->
<link href="css/menu.css" rel="stylesheet" type="text/css">
<script src="js/menu.js" type="text/javascript" language="javascript"></script>
<!--banner -->
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<link rel="stylesheet" href="js/coin-slider-styles.css" type="text/css" />
<!--footer -->
<link href="css/footer.css" rel="stylesheet" type="text/css">




</head>
<body>
<?php include ('menuhome.php'); ?>
	<div id="center">
    	<!--cabecera-->
    	<div id="cabecera">
        	<div id="logo">
            	<a href="index.php" title="logo"><img src="imagenes/02_logo.png" border="0"/></a>
            </div>
            <div id="corte1">
                <div class="logo-miplata2"><a href="http://www.miplata.co" target="_blank"><img src="imagenes/03_center_miproducto.png" border="0"/></a></div>
            </div>
            
    	</div>
        </br>
        <!--cuerpoa-->
		<div id="cuerpoa">
    		<div id="aizq">
            	<div id="aizqsup">
                	<div id="aizqlog">
                    	<img src="imagenes/der_logo.png"/>
                    </div>
                    <div id="aizqtext">
                    	<span class="textverdebig">¿Qué es</span>
                        <span class="textazultit">Platamóvil?</span>
                    </div>
                	<div class="clear">
                	</div>
                </div>
                <div id="aizqinf">
                		<p class="text">Es una cuenta de ahorros para manejar su <span class="enfasis">dinero a través del celular</span> y de Puntos Platamóvil que están ubicados cerca de su casa y trabajo.</p>
                        <img src="imagenes/sombreadoTextosHome.png"/>
                </div>
    		</div>
    		<div id="bder">
    			<div id="bdersup">
                	<div id="aizqlog">
                    <img src="imagenes/izq_logo.png"/>
                    </div>
                    <div id="aizqtext">
                    	<span class="textverdebig">¿Cómo abrir <span class="textazultit">una</span></span> 
                    	<span class="textazultit">cuenta Platamóvil?</span>
                    </div>
                	<div class="clear">
                	</div>
                </div>
            	<div id="bderinf">
                		<p class= "text">Fácil de abrir y fácil de usar, solo llame gratis desde su celular a la <span class="enfasisdos">línea Platamóvil #269 </span> También, puede llamar en Bogotá al fijo 7431810.</p>
                        <img src="imagenes/sombreadoTextosHome.png"/>
                </div> 	
    		</div>
    		<div class="clear">
            </div>
        </div>
        <!--cuerpob-->
    	<div id="cuerpob">
   			<div id="cuadroa">
            	<p class="letranunciopequeno"><span class="letranuncio">Conozca más de</span> 
            	<img id="imgpeq" align="absmiddle" src="imagenes/logopequeno.png"/> seleccionando la opción según su interés</p>
            </div>
        	<div id="lineas">
            	<div id="unover">
                </div>
                <div class="clear">
                </div>
                <div id="unohor">
                </div>
                <div id="borderuno">
                </div>
               	<div id="borderdos">
                </div>
                <div id="bordertres">
                </div>
            	<div class="clear">
            	</div>
            </div>
        </div>
        <!--cuerpoc-->
        <div id="cuerpoc">
            	<div id="btuno">
                    <div class="botones">
            			<a href="comercio.php?v=comercio">
                    	<p class="titbtsub"></br><span class="titbt">Persona</span></br></br>
                    	Mueva su dinero fácilmente con Platamóvil.</p></br>
                    	</a>
                    </div>
        		</div>
                <div id="btdos">
                	<div class="botones">
            			<a href="comercio.php?v=comercio">
                    	<p class="titbtsub"></br><span class="titbt">Comercio</span></br></br>
                    	Mejore su negocio usando Platamóvil</p></br></br>
                    	</a>
                    </div>
        		</div>
                <div id="bttres">
                	<div class="botones">
            			<a href="empresa.php?v=empresa">
                    	<p class="titbtsub"></br><span class="titbt">Empresa</span></br></br>
                    	Use Platamóvil y elimine el efectivo en su red distribución</p></br>
                    	</a>
                	</div>
        		</div>
        		<div class="clear">
        		</div>
        </div>
        </br></br>
        <!--cuerpod-->
        <div id="cuerpod">
        	<div class="lineaseparadora">
            </div>
			<div id='coin-slider'>
				<?PHP

				$datos = Parametros::getImgBanner();
				
				if(is_array($datos) && !empty($datos)) {
            
					for($i = 0; $i < sizeof($datos); $i++) {					
						?>	 
							<a href="<?PHP echo trim($datos[$i]['banners_url']); ?>">
								<img src="cms/modules/bannerIndex/files/big/<?PHP echo trim($datos[$i]['banners_image']); ?>" >
							</a>
						<?PHP						
					}
				}
				?>
			</div>
        </div>
		
		
        
    </div>
<?php include ('footerhome.php'); ?>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#coin-slider').coinslider({ width: 1027, height: 256, navigation: false});
		});
	</script>
</body>
</html>
