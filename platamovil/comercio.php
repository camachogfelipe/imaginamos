<?PHP 
	require_once("includes/clase_parametros.php");
?>

<!DOCTYPE html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>PLATAMÓVIL - Comercio</title>
      
    <meta name="keywords" content="Palabras clave" />
    <meta name="description" content="Texto empresarial o descripción">
    <meta name="author" content="Diseño web: imaginamos.com">
    <meta name="robots" content="all" />
    <meta name="date" content="2012" />
    
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />    
   <link href="css/idearama.css" rel="stylesheet" type="text/css">
     <!--menulateral-->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script type="text/javascript" src="js/botones.js"></script>
	<script type="text/javascript" src="js/menu-2.js"></script>
     <!--JQUERY-->
    <script language="javascript" type="text/javascript" src="js/jquery.min.js"> </script>
     <!--LITE TABS from: http://nicolahibbert.com/lightweight-jquery-tab-plugin/-->
    <script language="javascript" type="text/javascript" src="js/litetabs.jquery.js"> </script>
    <link href="css/comercio.litetabs.css" rel="stylesheet" type="text/css">
	 <link href="css/comercio.litetabs.com.css" rel="stylesheet" type="text/css">
    <!-- comercio -->
    <link href="css/comercio.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="js/comercio.js"> </script> 
    <!--header -->
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="js/header.js"> </script> 
    <!--footer -->
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <!--menu -->
    <link href="css/menu.css" rel="stylesheet" type="text/css">
    <script language="javascript" type="text/javascript" src="js/menu.js"> </script> 
	
	
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.3"></script>
	<link rel="stylesheet" type="text/css" href="js/jquery.fancybox.css?v=2.1.2" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="js/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="js/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="js/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="js/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="js/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
	

</head>

<body>

<?php include ('header.php'); ?>

<div class="ComerciotabsWrapper">
    <div id="mainTab">
        <ul>
            <li><a href="#1"><span class="img1 tabIcon"></span>¿Qué es Platamóvil?</a></li>
            <li><a href="#2"><span class="img2 tabIcon"></span>¿Cómo se usa?</a></li>
            <li><a href="#3"><span class="img3 tabIcon"></span>Operaciones, límites y tarifas</a></li>
            <li><a href="#4"><span class="img4 tabIcon"></span>¿Qué es un punto Platamóvil?</a></li>
            <li><a href="#5"><span class="img5 tabIcon"></span>Servicio al cliente</a></li>
            <li><a href="#6"><span class="img6 tabIcon"></span>¿Quién respalda a Platamóvil?</a></li>
        </ul>
        <div name="#1">
        	<!--subtab1-->
            <div class="subTab noborder" id="subTab1">
                <ul>
                	<li><a href="#1_1" class="icon1"></a></li>
                    <li><a href="#1_2"><p>Características</p></a></li>
                    <li><a href="#1_3"><p>Beneficios</p></a></li>
                    <li><a href="#1_4"><p>¿Para qué sirve?</p></a></li>
                    <li><a href="#1_5"><p>¿Cuánto le cuesta?</p></a></li>
                    <li><a href="#1_6"><p>Tipos de cuentas</p></a></li>
                    <li><a href="#1_7"><p>¿Cómo abrir una cuenta?</p></a></li>
                    <li><a href="#1_8"><p>¿Cuándo y dónde se puede usar?</p></a></li>
                    <li><a href="#1_9"><p>Su plata esta segura</p></a></li>
                </ul>
                <div name="#1_1">
					<?PHP
							$conteGen1 = Parametros::getConGen(8);
						?>
				
				
                	<!--<a class="returnTab" href="">volver</a>-->
                	<span class="titleSection"><?PHP echo trim($conteGen1[0]['conformato1_titulo']); ?></span>
					 <span class="tab-txt2"><?PHP echo trim($conteGen1[0]['conformato1_contenido']); ?></span>
					<img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen1[0]['conformato1_imagen']; ?>" width="631" height="384">
                </div>
                <div name="#1_2">
					<?PHP
							$conteGen2 = Parametros::getConGen(9);
						?>
                    <span class="titleSection"><?PHP echo trim($conteGen2[0]['conformato1_titulo']); ?></span>
                    <span class="tab-txt2"><?PHP echo trim($conteGen2[0]['conformato1_contenido']); ?></span>
                </div>
                <div name="#1_3">
					<?PHP
							$conteGen3 = Parametros::getConGen(10);
						?>
                    <span class="titleSection"><?PHP echo trim($conteGen3[0]['conformato1_titulo']); ?></span>
					<span class="tab-txt2"><?PHP echo trim($conteGen3[0]['conformato1_contenido']); ?></span>
                </div>
                <div name="#1_4">
					<?PHP
							$conteGen4 = Parametros::getConGen2(18);
						?>
                    <span class="titleSection"><?PHP echo trim($conteGen4[0]['conformato2_titulo']); ?></span>
                    <span class="colLeft">
						<span class="tab-txt3"><?PHP echo trim($conteGen4[0]['conformato2_contenido1']); ?></span>

                    </span>
                    <span class="colRight">
						<span class="tab-txt3"><?PHP echo trim($conteGen4[0]['conformato2_contenido2']); ?></span>
                    <img src="cms/modules/conformato2/files/big/<?PHP echo $conteGen4[0]['conformato2_imagen']; ?>" width="304" height="246" alt="para qué sirve" /> 
                    </span>
                </div>
                <div name="#1_5">
					<?PHP
							$conteGen5 = Parametros::getConGen(11);
						?>
                    <span class="titleSection"><?PHP echo trim($conteGen5[0]['conformato1_titulo']); ?></span>
                    <span class="tab-txt3"><?PHP echo trim($conteGen5[0]['conformato1_contenido']); ?></span>
			  		<img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen5[0]['conformato1_imagen']; ?>" width="631" height="384">
                    
              	</div>
                <div name="#1_6">
					<?PHP
							$conteGen6 = Parametros::getConGen2(19);
						?>
                    <span class="titleSection"><?PHP echo trim($conteGen6[0]['conformato2_titulo']); ?></span>
                    <span class="colLeft">
						<span class="tab-txt3"><?PHP echo trim($conteGen6[0]['conformato2_contenido1']); ?></span>
                  </span>
                    <span class="colRight">
						<span class="tab-txt9"><?PHP echo trim($conteGen6[0]['conformato2_contenido2']); ?></span>
                    </span>
                    <span style="width:100%; float:left; display:block; height:30px;"></span>
                    <img src="cms/modules/conformato2/files/big/<?PHP echo $conteGen6[0]['conformato2_imagen']; ?>" width="631" height="384" alt="tipos de cuenta" />
              </div>
                <div name="#1_7">
                    <?PHP
							$conteGen7 = Parametros::getConGen2(20);
						?>
					<span class="titleSection">¿Cómo abrir su cuenta?</span>
                    <span class="colLeft">
						<span class="tab-txt3"><?PHP echo trim($conteGen7[0]['conformato2_contenido1']); ?></span>
                  </span>
					</span>
                    <span class="colRight">
						<span class="tab-txt3"><?PHP echo trim($conteGen7[0]['conformato2_contenido2']); ?></span>

                    </span>
                    <span style="width:100%; float:left; display:block; height:30px;"></span>
					<img src="cms/modules/conformato2/files/big/<?PHP echo $conteGen7[0]['conformato2_imagen']; ?>" width="631" height="314" style="margin:0 35px" />
                </div>
                <div name="#1_8">
					<?PHP
							$conteGen8 = Parametros::getConGen(12);
						?>
				
                    <span class="titleSection"><?PHP echo trim($conteGen8[0]['conformato1_titulo']); ?></span>
                    <span class="tab-txt4"><?PHP echo trim($conteGen8[0]['conformato1_contenido']); ?></span>
                </div>
                <div name="#1_9">
					<?PHP
							$conteGen9 = Parametros::getConGen2(21);
						?>
                    <span class="titleSection"><?PHP echo trim($conteGen9[0]['conformato2_titulo']); ?></span>
                    <span class="colLeft">
						<?PHP echo trim($conteGen9[0]['conformato2_contenido1']); ?>
                    </span>
                    <span class="colRight">
						<?PHP echo trim($conteGen9[0]['conformato2_contenido2']); ?>
                    </span>
                    <span style="width:100%; float:left; display:block; height:30px;"></span>
                    <img src="cms/modules/conformato2/files/big/<?PHP echo $conteGen9[0]['conformato2_imagen']; ?>" width="631" height="384" style="margin:0 35px" /> 
                </div>
            </div>
                        <!--subtab1 fin-->
        </div>
        
        <div name="#2" >
            <!--subtab1-->
            <div class="subTab noborder" id="subTab2">
                <ul>
                	<li><a href="#2_1" class="icon2"></a></li>
                    <li><a href="#2_2"><p>¿Cómo abrir su cuenta?</p></a></li>
                    <li><a href="#2_3"><p>¿Cómo activar su cuenta?</p></a></li>
                    <li><a href="#2_4"><p>¿Cómo utilizar su cuenta?</p></a></li>
                    <li><a href="#2_5"><p>¿Cómo hacer consultas de su cuenta?</p></a></li>
                    <li><a href="#2_6"><p>Otras operaciones con su cuenta</p></a></li>
                </ul>
                <div name="#2_1">
                    <?PHP
							$conteGen10 = Parametros::getConGen(13);
						?>
					
					<span class="titleSection"><?PHP echo trim($conteGen10[0]['conformato1_titulo']); ?></span>
                    <span class="tab-txt5"><?PHP echo trim($conteGen10[0]['conformato1_contenido']); ?></span>
				</div>
                <div name="#2_2">
					<?PHP
							$conteGen11 = Parametros::getConGen2(22);
						?>
                    <span class="titleSection"><?PHP echo trim($conteGen11[0]['conformato2_titulo']); ?></span>
                    <span class="colLeft">
						<span class="tab-txt3"><?PHP echo trim($conteGen11[0]['conformato2_contenido1']); ?></span>
                  </span>
					</span>
                    <span class="colRight">
						<span class="tab-txt3"><?PHP echo trim($conteGen11[0]['conformato2_contenido2']); ?></span>

                    </span>
                    <span style="width:100%; float:left; display:block; height:30px;"></span>
					<img src="cms/modules/conformato2/files/big/<?PHP echo $conteGen11[0]['conformato2_imagen']; ?>" width="631" height="314" style="margin:0 35px" />
                </div>
                
                <div name="#2_3">
					<?PHP
							$conteGen12 = Parametros::getConGen2(23);
						?>
                    <span class="titleSection"><?PHP echo trim($conteGen12[0]['conformato2_titulo']); ?></span>
                    <span class="colLeft">
						<span class="tab-txt3"><?PHP echo trim($conteGen12[0]['conformato2_contenido1']); ?></span>
					</span>
                    <span class="colRight">
						<span class="tab-txt3"><?PHP echo trim($conteGen12[0]['conformato2_contenido2']); ?></span>

                    </span>
                    <span style="width:100%; float:left; display:block; height:30px;"></span>
                    <img src="cms/modules/conformato2/files/big/<?PHP echo $conteGen12[0]['conformato2_imagen']; ?>"  style="margin:0 35px"  /> 
                </div>
                
                <div name="#2_4">
					<?PHP
							$conteGen13 = Parametros::getConGen(14);
						?>
					
                    <span class="titleSection"><?PHP echo trim($conteGen13[0]['conformato1_titulo']); ?></span>
                    <span class="tab-txt4"><?PHP echo trim($conteGen13[0]['conformato1_contenido']); ?></span>
                </div>
                
                <div name="#2_5">
					<?PHP
							$conteGen14 = Parametros::getConGen2(24);
						?>
                    <span class="titleSection"><?PHP echo trim($conteGen14[0]['conformato2_titulo']); ?></span>
                    <span class="colLeft">
						<span class="tab-txt6"><?PHP echo trim($conteGen14[0]['conformato2_contenido1']); ?></span>
					</span>
                    <span class="colRight">
						<span class="tab-txt6"><?PHP echo trim($conteGen14[0]['conformato2_contenido2']); ?></span>
                    </span>
                </div>
                
                <div name="#2_6">
					<?PHP
							$conteGen15 = Parametros::getConGen2(25);
						?>
                    <span class="titleSection"><?PHP echo trim($conteGen15[0]['conformato2_titulo']); ?></span>
                    <span class="colLeft">
						<span class="tab-txt6"><?PHP echo trim($conteGen15[0]['conformato2_contenido1']); ?></span>

					</span>
                    <span class="colRight">
						<span class="tab-txt6"><?PHP echo trim($conteGen15[0]['conformato2_contenido2']); ?></span>
                    </span>
                </div>
            </div>
            <!--subtab1 fin-->
        </div>
        
        <div name="#3">
            <div class="subTab noborder" id="subTab3">
                <ul>
                	<li><a href="#3_1" class="icon3"></a></li>
					<li><a href="#3_2"><p>Operaciones </p></a></li>
                    <li><a href="#3_3"><p>Tarifas Simplificada</p></a></li>
                    <li><a href="#3_4"><p>Tarifas Típica</p></a></li>
                    <li><a href="#3_5"><p>Límites Simplificada</p></a></li>
                    <li><a href="#3_6"><p>Límites Típica</p></a></li>
                </ul>
                <div name="#3_1">
					<?PHP
							$conteGen16 = Parametros::getConGen(15);
						?>
				
                	<!--<a class="returnTab" href="">volver</a>-->
                    <span class="titleSection"><?PHP echo trim($conteGen16[0]['conformato1_titulo']); ?></span>
					<span class="tab-txt3"><?PHP echo trim($conteGen16[0]['conformato1_contenido']); ?></span>
                    <img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen16[0]['conformato1_imagen']; ?>" width="550" style="margin-left:75px;" /> 
                     
                </div>
                
                <div name="#3_2">
					<?PHP
							$conteGen17 = Parametros::getConGen2(26);
						?>
				
                    <span class="titleSection"><?PHP echo trim($conteGen17[0]['conformato2_titulo']); ?></span>
                    <span class="colLeft">
						<span class="tab-txt7"><?PHP echo trim($conteGen17[0]['conformato2_contenido1']); ?></span>
					</span>
                    <span class="colRight">
						<span class="tab-txt7"><?PHP echo trim($conteGen17[0]['conformato2_contenido2']); ?></span>
                    </span>
                </div>
                
                <div name="#3_3">
                    <span class="titleSection">Tarifas Simplificada</span>

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable2">
                      <tr>
                        <th >GENERALES CUENTA DE AHORROS PLATAMÓVIL</th>
                        <th >VALOR</th>
                      </tr>
                      <?PHP
						$datos = Parametros::getDatosTablas(17);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
					</table>

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable2">
                      <tr>
                        <th >CONSULTAS EN PORTAL WEB PLATAMÓVIL</th>
                        <th >VALOR</th>
                      </tr>
                      <?PHP
						$datos = Parametros::getDatosTablas(18);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
					</table>

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable2">
                      <tr>
                        <th >TRANSACCIONES EN PUNTO PLATAMÓVIL</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(19);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
					</table>

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable2">
                      <tr>
                        <th >TRANSACCIONES EN OTROS CANALES</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(20);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
					</table>
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable2">
                      <tr>
                        <th >OTRAS OPERACIONES</th>
                        <th >VALOR</th>
                      </tr>
                      <?PHP
						$datos = Parametros::getDatosTablas(21);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
					</table><br /><br />


                </div>
                
                <div name="#3_4">
                    <span class="titleSection">Tarifas Típica</span>
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable">
                      <tr>
                        <th >GENERALES CUENTA DE AHORROS PLATAMÓVIL</th>
                        <th >VALOR</th>
                      </tr>
                      <?PHP
						$datos = Parametros::getDatosTablas(22);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
					</table>

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable">
                      <tr>
                        <th >CONSULTAS EN PORTAL WEB PLATAMÓVIL</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(23);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
                    </table>

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable">
                      <tr>
                        <th >TRANSACCIONES EN PUNTO PLATAMÓVIL</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(24);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
                    </table>


                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable">
                      <tr>
                        <th >TRANSACCIONES EN OTROS CANALES</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(25);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
                    </table>
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable">
                      <tr>
                        <th >OTRAS OPERACIONES</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(26);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
                    </table><br /><br />
                    
                    

                    
                </div>
                
                <div name="#3_5">
                    <span class="titleSection">Límites Simplificada</span>
                    
                    
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable2">
                      <tr>
                        <th width="40%" rowspan="2">GENERALES CUENTA PLATAMÓVIL</th>
                        <th colspan="2" >MONTO POR TRANSACCIÓN</th>
                        <th width="26%" rowspan="2">LÍMITE DE OPERACIONES </th>
                      </tr>
                      <tr>
                        <th width="15%" >MÍNIMO</th>
                        <th width="19%" >MÁXIMO</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(27);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo3']); ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo4']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
					</table>
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable2">
                    
                    
                      <tr>
                        <th width="40%" rowspan="2">TRANSACCIONES EN PUNTO PLATAMÓVIL</th>
                        <th colspan="2" >MONTO POR TRANSACCIÓN</th>
                        <th width="26%" rowspan="2">LÍMITE DE OPERACIONES </th>
                      </tr>
                      <tr>
                        <th width="15%" >MÍNIMO</th>
                        <th width="19%" >MÁXIMO</th>
                      </tr>
                      <?PHP
						$datos = Parametros::getDatosTablas(28);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo3']); ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo4']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
					</table>
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable2">
                      <tr>
                        <th width="40%" rowspan="2">TRANSACCIONES EN PUNTO PLATAMÓVIL</th>
                        <th colspan="2" >MONTO POR TRANSACCIÓN</th>
                        <th width="26%" rowspan="2">LÍMITE DE OPERACIONES </th>
                      </tr>
                      <tr>
                        <th width="15%" >MÍNIMO</th>
                        <th width="19%" >MÁXIMO</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(29);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo3']); ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo4']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
					</table><br /><br />
                </div>
                
                <div name="#3_6">
                    <span class="titleSection">Límites Típica</span>

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable">
                    <tr>
                        <th width="40%" rowspan="2">TRANSACCIONES EN PUNTO PLATAMÓVIL</th>
                        <th colspan="2" >MONTO POR TRANSACCIÓN</th>
                        <th width="26%" rowspan="2">LÍMITE DE OPERACIONES </th>
                      </tr>
                      <tr>
                        <th width="15%" >MÍNIMO</th>
                        <th width="19%" >MÁXIMO</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(30);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo3']); ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo4']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
					</table>
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable">
                      <tr>
                        <th width="40%" rowspan="2">TRANSACCIONES EN PUNTO PLATAMÓVIL</th>
                        <th colspan="2" >MONTO POR TRANSACCIÓN</th>
                        <th width="26%" rowspan="2">LÍMITE DE OPERACIONES </th>
                      </tr>
                      <tr>
                        <th width="15%" >MÍNIMO</th>
                        <th width="19%" >MÁXIMO</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(31);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo3']); ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo4']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
					</table>
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable">
                      <tr>
                        <th width="40%" rowspan="2">TRANSACCIONES EN PUNTO PLATAMÓVIL</th>
                        <th colspan="2" >MONTO POR TRANSACCIÓN</th>
                        <th width="26%" rowspan="2">LÍMITE DE OPERACIONES </th>
                      </tr>
                      <tr>
                        <th width="15%" >MÍNIMO</th>
                        <th width="19%" >MÁXIMO</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(32);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo3']); ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo4']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
					</table><br /><br />
                </div>
                
                
            </div>
        </div>
        
        <div name="#4">
        	<!--subtab1-->
            <div class="subTab noborder" id="subTab4">
                <ul>
                	<li><a href="#4_1" class="icon4"></a></li>
                    <li><a href="#4_2"><p>Definición</p></a></li>
                    <li><a href="#4_3"><p>¿Qué servicios presta?</p></a></li>
                    <li><a href="#4_4"><p>Red de puntos Platamóvil</p></a></li>
                    <li><a href="#4_5"><p>¿Cómo se identifican?</p></a></li>
                    <li><a href="#4_6"><p>¿Quién es un Agente Platamóvil?</p></a></li>
                    <li><a href="#4_7"><p>Operaciones, tarifas y límites del punto</p></a></li>
                    <li><a href="#4_8"><p>¿Quiere ser un punto Platamóvil?</p></a></li>
                </ul>
                
                <div name="#4_1">
					<?PHP
							$conteGen18 = Parametros::getConGen(16);
						?>	
				
                    <span class="titleSection"><?PHP echo trim($conteGen18[0]['conformato1_titulo']); ?></span>
                    <span class="tab-txt3"><?PHP echo trim($conteGen18[0]['conformato1_contenido']); ?></span>
                    <img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen18[0]['conformato1_imagen']; ?>" width="631" height="384" style="margin-left:35px;" /> 
                </div>
                
                <div name="#4_2">
					<?PHP
							$conteGen19 = Parametros::getConGen2(27);
						?>
				
                    <span class="titleSection"><?PHP echo trim($conteGen19[0]['conformato2_titulo']); ?></span>
                    <span class="colLeft">
						<span class="tab-txt3"><?PHP echo trim($conteGen19[0]['conformato2_contenido1']); ?></span>
                    </span>
                    <span class="colRight">                    
						<span class="tab-txt3"><?PHP echo trim($conteGen19[0]['conformato2_contenido2']); ?></span>
						<img src="cms/modules/conformato2/files/big/<?PHP echo $conteGen19[0]['conformato2_imagen']; ?>" width="304" height="246" />
                    </span>
                </div>
                
                <div name="#4_3">
					<?PHP
							$conteGen20 = Parametros::getConGen2(28);
						?>
                    <span class="titleSection"><?PHP echo trim($conteGen20[0]['conformato2_titulo']); ?></span>
                    <span class="colLeft">
						<span class="tab-txt3"><?PHP echo trim($conteGen20[0]['conformato2_contenido1']); ?></span>
                    </span>
                    <span class="colRight"> 
						<span class="tab-txt3"><?PHP echo trim($conteGen20[0]['conformato2_contenido2']); ?></span>
                    </span>
                </div>
                
                <div name="#4_4">
					<?PHP
							$conteGen21 = Parametros::getConGen2(29);
						?>
					
                    <span class="titleSection"><?PHP echo trim($conteGen21[0]['conformato2_titulo']); ?></span>
                    <span class="tab-txt3"><?PHP echo trim($conteGen21[0]['conformato2_contenido1']); ?></span>
					<br />
					<div>Filtro por ciudad: &nbsp; <select name='ciudad2' size='1' id='tiposelect2'> 
						<?PHP $liscity = Parametros::getCityRedP(); echo $liscity; ?>	
						</select> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						sector: &nbsp; <select name='sector' size='1' id='tiposelectS2'> 
						<?PHP $valores2 = Parametros::getSectorRedP(); echo $valores2; ?>	
						</select>
					</div>
					<br />	
						
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable smallTb"  id='tablaselect2' >
                      
					</table>
					<br />

                    <span class="tab-txt3"><?PHP echo trim($conteGen21[0]['conformato2_contenido2']); ?></span>
                    
                </div>
                
                <div name="#4_5">
					<?PHP
							$conteGen22 = Parametros::getConGen2(30);
						?>
					
				
                    <span class="titleSection"><?PHP echo trim($conteGen22[0]['conformato2_titulo']); ?></span>
                    Cuando se ubique la dirección del punto Platamóvil, éste se puede identificar porque tendrá el siguiente letrero externo:<br /><br />
                    <img src="imagenes/tabsComercio/contenido1.png" width="304" height="246" style="margin:0 185px" /><br /><br />
                    Todos los puntos tendrán un pequeño letrero que muestra los días y horarios de atención:<br /><br />
                    <img src="imagenes/tabsComercio/contenido1.png" width="304" height="246" style="margin:0 185px" /><br /><br />

                                         Al interior, el punto cuenta con un terminal electrónico tipo datafono, que es utilizado por el Agente para realizar las transacciones. El terminal estará ubicado sobre un soporte que además contiene información importante que debe ser del conocimiento de la comunidad:<br /><br />
                    <img src="imagenes/tabsComercio/contenido1.png" width="304" height="246"  style="margin:0 185px"/>
              </div>
                
                <div name="#4_6">
					<?PHP
							$conteGen23 = Parametros::getConGen(17);
						?>
				
                    <span class="titleSection"><?PHP echo trim($conteGen23[0]['conformato1_titulo']); ?></span>
                    <span class="tab-txt3"><?PHP echo trim($conteGen23[0]['conformato1_contenido']); ?></span>
                    
                    <span style="width:100%; float:left; display:block; height:30px;"></span>
                    <img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen23[0]['conformato1_imagen']; ?>" width="631" height="384" /> 
                </div>
                <div name="#4_7">
				
				
                    <span class="titleSection">Operaciones, tarifas y límites del punto</span>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable3">
                      <tr>
                        <th width="12%" >Operación</th>
                        <th width="10%" >Tarifa</th>
                        <th width="11%">Monto mínimo</th>
                        <th width="23%" >Monto máximo por operación</th>
                        <th width="22%" >Máximo Acumulado por día</th>
                        <th width="22%" >Cantidad máxima por cliente</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(33);
				
						if(is_array($datos) && !empty($datos)) {
					
							for($i = 0; $i < sizeof($datos); $i++) {
							$contenido = trim($datos[$i]['datostablas_campo1']);
							$contenido = Parametros::getRemplaza($contenido);
							
							$contenido2 = trim($datos[$i]['datostablas_campo5']);
							$contenido2 = Parametros::getRemplaza($contenido2);
							
							?>	 
									<tr>
										<td><?PHP echo $contenido; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo2']); ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo3']); ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo4']); ?></td>
										<td><?PHP echo $contenido2; ?></td>
										<td><?PHP echo trim($datos[$i]['datostablas_campo6']); ?></td>
									</tr>	
								<?PHP								
							}
						}	
					  ?>
					</table>
                    
                    
                </div>
                
                <div name="#4_8">
					<?PHP
							$conteGen24 = Parametros::getConGen(18);
						?>
					<span class="titleSection"><?PHP echo trim($conteGen24[0]['conformato1_titulo']); ?></span>
                    <span class="tab-txt3"><?PHP echo trim($conteGen24[0]['conformato1_contenido']); ?></span>
                    <span style="width:100%; float:left; display:block; height:30px;"></span>
                    <img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen24[0]['conformato1_imagen']; ?>" width="631" height="384"style="margin:0 35px"  /> 
                </div>
                
                
            </div>
            <!--subtab1 fin-->
        </div>        
        
        <div name="#5">
        	<!--subtab1-->
            <div class="subTab noborder" id="subTab5">
                <ul>
                	<li><a href="#5_1" class="icon5"></a></li>
                    <li><a href="#5_2"><p>Canales de información</p></a></li>
                    <li><a href="#5_3"><p>Canales para presentar peticiones, quejas o reclamos</p></a></li>
                    <li><a href="#5_4"><p>Red de puntos Platamóvil</p></a></li>
                    <li><a href="#5_5"><p>Consumidor financiero</p></a></li>
                    <li><a href="#5_6"><p>Educación Financiera</p></a></li>
                </ul>
                <div name="#5_1">
					<?PHP
							$conteGen25 = Parametros::getConGen(19);
						?>
				
                    <span class="titleSection"><?PHP echo trim($conteGen25[0]['conformato1_titulo']); ?></span>
                    <span class="tab-txt5"><?PHP echo trim($conteGen25[0]['conformato1_contenido']); ?></span>
                    <span style="width:100%; float:left; display:block; height:30px;"></span>
                    <img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen25[0]['conformato1_imagen']; ?>" width="631" height="384" /> 
                </div>
                
                <div name="#5_2">
					<?PHP
							$conteGen26 = Parametros::getConGen2(31);
						?>
                    <span class="titleSection"><?PHP echo trim($conteGen26[0]['conformato2_titulo']); ?></span>
                    <span class="colLeft">
						<span class="tab-txt3"><?PHP echo trim($conteGen26[0]['conformato2_contenido1']); ?></span>
                    </span>
                    <span class="colRight">
						<span class="tab-txt3"><?PHP echo trim($conteGen26[0]['conformato2_contenido2']); ?></span>
                    </span>
                    
                </div>
                
                <div name="#5_3">
					<?PHP
							$conteGen27 = Parametros::getConGen2(32);
						?>
				
                    <span class="titleSection"><?PHP echo trim($conteGen27[0]['conformato2_titulo']); ?></span>
                    <span class="tab-txt2"><?PHP echo trim($conteGen27[0]['conformato2_contenido1']); ?></span>
					<span class="colLeft">
						<span class="tab-txt2"><?PHP echo trim($conteGen27[0]['conformato2_contenido2']); ?></span>
					</span>
					<span class="colRight">
						<img src="cms/modules/conformato2/files/big/<?PHP echo $conteGen27[0]['conformato2_imagen']; ?>" width="424" height="394">
					</span>


              </div>
                
                <div name="#5_4">
					<?PHP
							$conteGen28 = Parametros::getConGen2(33);
						?>
				
				
                    <span class="titleSection"><?PHP echo trim($conteGen28[0]['conformato2_titulo']); ?></span>
						<span class="tab-txt3"><?PHP echo trim($conteGen28[0]['conformato2_contenido1']); ?></span>
					<br />
					<div>Filtro por ciudad: &nbsp; <select name='ciudad' size='1' id='tiposelect'> 
						<?PHP $valores = Parametros::getCityRedP(); echo $valores; ?>	
						</select>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						sector: &nbsp; <select name='sector' size='1' id='tiposelectS1'> 
						<?PHP $valores2 = Parametros::getSectorRedP(); echo $valores2; ?>	
						</select> 
					</div>
					<br />	
						
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="comercioTable smallTb"  id='tablaselect' >
                      
					</table><br />
					<span class="tab-txt3"><?PHP echo trim($conteGen28[0]['conformato2_contenido2']); ?></span>
                    
                </div>
                <div name="#5_5">
					<?PHP
							$conteGen29 = Parametros::getConGen(20);
						?>
				
                    <span class="titleSection"><?PHP echo trim($conteGen29[0]['conformato1_titulo']); ?></span>
                    <span class="tab-txt3"><?PHP echo trim($conteGen29[0]['conformato1_contenido']); ?></span>
				</div>
                
                <div name="#5_6">
					<?PHP
							$conteGen30 = Parametros::getConGen(21);
					?>
                    <span class="titleSection"><?PHP echo trim($conteGen30[0]['conformato1_titulo']); ?></span>
                  <span class="colLeft">
					<span class="tab-txt3"><?PHP echo trim($conteGen30[0]['conformato1_contenido']); ?></span>

                  </span>
                    <span class="colRight">
                    <img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen30[0]['conformato1_imagen']; ?>" width="300" height="250"></span>
                    
                </div>
                
            </div>
         </div>        
        
        <div name="#6">
                <!--subtab1-->
                <div class="subTab noborder" id="subTab6">
                    <ul>
                        <li><a href="#6_1" class="icon6"></a></li>
                        <li><a href="#6_2"><p>¿Qué es una Compañía de financiamiento?</p></a></li>
                        <li><a href="#6_3"><p>¿Qué es la Superintendencia Financiera de Colombia?</p></a></li>
                        <li><a href="#6_4"><p>¿Qué es FOGAFIN?</p></a></li>
                        <li><a href="#6_5"><p>¿Qué es FENALCO?</p></a></li>
                        <li><a href="#6_6"><p>¿Qué es CAF?</p></a></li>
                    </ul>
                    <div name="#6_1">
						<?PHP
							$conteGen31 = Parametros::getConGen(22);
					?>
					
                        <span class="titleSection"><?PHP echo trim($conteGen31[0]['conformato1_titulo']); ?></span>
                        <span class="tab-txt4"><?PHP echo trim($conteGen31[0]['conformato1_contenido']); ?></span>
                       
                       
					<img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen31[0]['conformato1_imagen']; ?>" width="631" height="314" style="margin:0 35px" />
                    </div>
                    
                    <div name="#6_2">
						<?PHP
							$conteGen32 = Parametros::getConGen(23);
					?>
					
                        <span class="titleSection"><?PHP echo trim($conteGen32[0]['conformato1_titulo']); ?></span>
						<?PHP echo trim($conteGen32[0]['conformato1_contenido']); ?>
                        <img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen32[0]['conformato1_imagen']; ?>" width="631" height="384">
                  	</div>
                    <div name="#6_3">
						<?PHP
							$conteGen33 = Parametros::getConGen(24);
					?>
					
                        <span class="titleSection"><?PHP echo trim($conteGen33[0]['conformato1_titulo']); ?></span>
						<span class="tab-txt8"><?PHP echo trim($conteGen33[0]['conformato1_contenido']); ?></span>
					</div>
                    <div name="#6_4">
						<?PHP
							$conteGen34 = Parametros::getConGen(25);
					?>
                        <span class="titleSection"><?PHP echo trim($conteGen34[0]['conformato1_titulo']); ?></span>
						<span class="tab-txt5"><?PHP echo trim($conteGen34[0]['conformato1_contenido']); ?></span>
                    </div>
                    
                    <div name="#6_5">
						<?PHP
							$conteGen35 = Parametros::getConGen(26);
					?>
                        <span class="titleSection"><?PHP echo trim($conteGen35[0]['conformato1_titulo']); ?></span>
                        <span class="tab-txt5"><?PHP echo trim($conteGen35[0]['conformato1_contenido']); ?></span>
					</div>
                    <div name="#6_6">
						<?PHP
							$conteGen36 = Parametros::getConGen(27);
					?>
                        <span class="titleSection"><?PHP echo trim($conteGen36[0]['conformato1_titulo']); ?></span>
						<span class="tab-txt5"><?PHP echo trim($conteGen36[0]['conformato1_contenido']); ?></span>
					</div>
                    
          	</div>
            <!--subtab1 fin-->
            
        </div>
        
        
    </div>
    
</div>


    <script>
        $('#mainTab').liteTabs({ rounded: true, borders: true, width: 996 });
        //$('#mainTab').liteTabs({rounded: true, width: 1027 });
        $('.subTab').liteTabs({width: 939, widthVertical:749});
		/*
		var url = "bus.php";  
		$.get(url, { id: 1 }, function(resultado) {
			var imagen1 = resultado;			
			alert(imagen1);			
		});
		*/
    </script>
<?php include ('footer.php'); ?>

<?php include ('menu.php'); ?>
<script type="text/javascript">

	$(function() {
		
		/*	
		
		var id = $("#tiposelect").find(':selected').val();
			
		//alert(id);
		
		
		$.get('tabladatosRP.php', { id: id } , function(resultado) { 
			$('#tablaselect').empty().html(resultado); 
		});
  
		
		$("#tiposelect").change(function(event){
			var id = $("#tiposelect").find(':selected').val();
			//alert(id);
			$.get('tabladatosRP.php', { id: id } , function(resultado) { 
				$('#tablaselect').empty().html(resultado);
			});
		});
		
		
		var id2 = $("#tiposelect2").find(':selected').val();
			
		//alert(id);
		
		
		$.get('tabladatosRP.php', { id: id2 } , function(resultado) { 
			$('#tablaselect2').empty().html(resultado); 
		});
  
		
		$("#tiposelect2").change(function(event){
			var id2 = $("#tiposelect2").find(':selected').val();
			//alert(id);
			$.get('tabladatosRP.php', { id: id2 } , function(resultado) { 
				$('#tablaselect2').empty().html(resultado);
			});
		});
		
		*/
		
		var id = $("#tiposelect").find(':selected').val();
		
		//alert(id);
		
		$.get('tabladatosRPS.php', { id: id } , function(resultado) { 
			//alert(resultado);
			$('#tiposelectS1').empty().html(resultado); 
			
			var id2 = $("#tiposelectS1").find(':selected').val();
			var id3 = id+"-"+id2;
			$.get('tabladatosRP.php', { id: id3 } , function(resultado2) { 
				$('#tablaselect').empty().html(resultado2); 
			});
		});
		
		$("#tiposelect").change(function(event){
			var id = $("#tiposelect").find(':selected').val();
			//alert(id);
			$.get('tabladatosRPS.php', { id: id } , function(resultado) { 
				//alert(resultado);
				$('#tiposelectS1').empty().html(resultado);
				
				var id2 = $("#tiposelectS1").find(':selected').val();
				//alert(id2);
				var id3 = id+"-"+id2;
				$.get('tabladatosRP.php', { id: id3 } , function(resultado2) { 
					$('#tablaselect').empty().html(resultado2);
				});
					
				
				$("#tiposelectS1").change(function(event){
					var id2 = $("#tiposelectS1").find(':selected').val();
					//alert(id2);
					var id3 = id+"-"+id2;
					$.get('tabladatosRP.php', { id: id3 } , function(resultado2) { 
						$('#tablaselect').empty().html(resultado2);
					});
				});
				

			});
		});
		
		//--------------------------------------------
		
		var idd = $("#tiposelect2").find(':selected').val();
		
		//alert(id);
		
		$.get('tabladatosRPS.php', { id: idd } , function(resultado) { 
			//alert(resultado);
			$('#tiposelectS2').empty().html(resultado); 
			
			var idd2 = $("#tiposelectS2").find(':selected').val();
			var idd3 = idd+"-"+idd2;
			$.get('tabladatosRP.php', { id: idd3 } , function(resultado2) { 
				$('#tablaselect2').empty().html(resultado2); 
			});
		});
		
		$("#tiposelect2").change(function(event){
			var idd = $("#tiposelect2").find(':selected').val();
			//alert(id);
			$.get('tabladatosRPS.php', { id: idd } , function(resultado) { 
				//alert(resultado);
				$('#tiposelectS2').empty().html(resultado);
				
				var idd2 = $("#tiposelectS2").find(':selected').val();
				//alert(id2);
				var idd3 = idd+"-"+idd2;
				$.get('tabladatosRP.php', { id: idd3 } , function(resultado2) { 
					$('#tablaselect2').empty().html(resultado2);
				});
					
				
				$("#tiposelectS2").change(function(event){
					var idd2 = $("#tiposelectS2").find(':selected').val();
					//alert(id2);
					var idd3 = idd+"-"+idd2;
					$.get('tabladatosRP.php', { id: idd3 } , function(resultado2) { 
						$('#tablaselect2').empty().html(resultado2);
					});
				});
				

			});
		});
		
		$('.fancybox-media').fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			helpers : {
				media : {}
			}
		});
		
		
		var cssObj = {
		'width':'233px',
		'height':'60px',
		'background-image': 'url(imagenes/tiposCuentaSimplificada.png)',
		'background-repeat': 'no-repeat',
		'display':'block'
		}
		
		var cssObj2 = {
		'width':'233px',
		'height':'60px',
		'background-image': 'url(imagenes/tiposCuentaTipica.png)',
		'background-repeat': 'no-repeat',
		'display':'block'
		}
		
		
		
		$(".tab-txt9 a:first")
		.empty()
        .css(cssObj)
		.hover(
		  function () {
			$(this).addClass("sobre");
		  },
		  function () {
			$(this).removeClass("sobre");
		  });
	
		$(".tab-txt9 a:last")
		.empty()
        .css(cssObj2)
        .hover(
		  function () {
			$(this).addClass("sobre");
		  },
		  function () {
			$(this).removeClass("sobre");
		  });
		
	});
</script>
</body>
</html>
