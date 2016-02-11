<?PHP 
	require_once("includes/clase_parametros.php");
?>


<!DOCTYPE html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>PLATAMÓVIL - Empresa</title>
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />
    <link href="css/header.css" rel="stylesheet" type="text/css" />
    <link href="css/menu.css" rel="stylesheet" type="text/css" />
    <link href="css/footer.css" rel="stylesheet" type="text/css" />
    <link href="css/empresa.litetabs.css" rel="stylesheet" type="text/css">
	<link href="css/empresa.litetabs.comp.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />    
   <link href="css/idearama.css" rel="stylesheet" type="text/css">
     <!--menulateral-->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	
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
	
	<script type="text/javascript" src="js/botones.js"></script>
	<script type="text/javascript" src="js/menu-2.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/header.js"></script>
    <script src="js/empresa.js"></script>
    <script language="javascript" type="text/javascript" src="js/litetabs.jquery.js"> </script>
    
	
	
	
	
    
</head>
<?php include("header.php"); ?>
<?php include("menu.php"); ?>
<div class="content-empresa">
    <div class="titulo-seccion">
        <div class="tit" id="tit1"><b>¿QUÉ ES?</b> </div>
        <div class="tit" id="tit2"><b>¿CÓMO SE USA?</b></div>
        <div class="tit" id="tit3"><b>OPERACIONES,</b> LÍMITES Y TARIFAS</div>
        <div class="tit" id="tit4"><b>SERVICIO</b> AL CLIENTE</div>
        <div class="tit" id="tit5"><b>¿QUIÉN RESPALDA</b> A PLATAMÓVIL?</div>
    </div>
    <div class="tabsWrapper">
        <div class="div-top1"></div>
        <div class="numeros">
            <div class="paso1" id="p1"></div>
            <div class="paso2" id="p2"></div>
            <div class="paso3" id="p3"></div>
            <div class="paso4" id="p4"></div>
            <div class="paso5" id="p5"></div>
        </div>
        <div id="mainTab">
            <ul class="time-line">
                <a href="#1"><li class="time1" id="t1">¿Qué es?</li></a>
                <a href="#2"><li class="time2" id="t2">¿Cómo se</br>usa?</li></a>
                <a href="#3"><li class="time3" id="t3">Operaciones,</br>límites y tarifas</li></a>
                <a href="#4"><li class="time4" id="t4">Servicio</br>al cliente</li></a>
                <a href="#5"><li class="time5" id="t5">¿Quién respalda</br>a Platamóvil?</li></a>
            </ul>
            <div class="clear"></div>
            <div class="div-top2"></div>
            <!--subtab-->
            <div name="#1"> 	
                <div class="subTab noborder" id="subTab1">
                    <ul>
                        <li><a href="#1_0"><b>1</b></a></li>
                        <li><a href="#1_1">Características</a></li>
                        <li><a href="#1_2">¿Para qué</br>sirve?</a></li>
                        <li><a href="#1_3">Beneficios</a></li>
                        <li><a href="#1_4">¿Cuánto</br>le cuesta?</a></li>
                        <li><a href="#1_5">¿Cómo abrir</br>una cuenta?</a></li>
                        <li><a href="#1_6">¿Cómo</br>funciona?</a></li>
                        <li><a href="#1_7">¿Qué es un</br>corresponsal?</a></li>
                        <li><a href="#1_8">¿Cuando y dónde</br>abrir Platamovil?</a></li>
                    </ul>
                    <div name="#1_0">
						<?PHP
							$conteGen1 = Parametros::getConGen(1);
						?>
                        <div class="tab-cont">
                            <div class="tab-iz" style="width:526px">
                                <div class="tab-tit" style="width:526px"><p><?PHP echo trim($conteGen1[0]['conformato1_titulo']); ?></p></div>
                                <div class="tab-txt">
									<?PHP echo trim($conteGen1[0]['conformato1_contenido']); ?>
									<div style="margin-bottom: 40px;"></div>
								</div>
								
                            </div>
                            <div class="tab-de" style="width:326px">
                                <div class="tab-tit" style="width:326px"><p></p></div>
                                <div class="tab-txt">
                                	<img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen1[0]['conformato1_imagen']; ?>" width="326" height="498">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div name="#1_1">
						<?PHP
							$conteGen2 = Parametros::getConGen(2);
						?>
					
                        <div class="tab-cont">
                            <div class="tab-iz" style="width:526px">
                                <div class="tab-tit" style="width:526px"><p><?PHP echo trim($conteGen2[0]['conformato1_titulo']); ?></p></div>
                                <div class="tab-txt2">                                
									<?PHP echo trim($conteGen2[0]['conformato1_contenido']); ?>
								</div>								
                            </div>
                            
                            <div class="tab-de" style="width:326px">
                                <div class="tab-tit" style="width:326px"><p></p></div>
                                <div class="tab-txt">
                           	    	<img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen2[0]['conformato1_imagen']; ?>" width="326" height="498">
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div name="#1_2">
						<?PHP
							$conteGen3 = Parametros::getConGen(3);
						?>
						
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen3[0]['conformato1_titulo']); ?></p></div>
                                <div class="tab-txt3">
									<?PHP echo trim($conteGen3[0]['conformato1_contenido']); ?>	
								</div>
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-img1"><img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen3[0]['conformato1_imagen']; ?>" /></div>
                            </div>
                        </div>
                    </div>
                    
                    <div name="#1_3">
						<?PHP
							$conteGen4 = Parametros::getConGen(4);
						?>
					
					
                        <div class="tab-cont">
                            <div class="tab-iz" style="width:526px">
                                <div class="tab-tit" style="width:526px"><p><?PHP echo trim($conteGen4[0]['conformato1_titulo']); ?></p></div>
                                <div class="tab-txt">
									<?PHP echo trim($conteGen4[0]['conformato1_contenido']); ?>	
								</div>
                            </div>
                            
                            <div class="tab-de" style="width:326px">
                                <div class="tab-tit" style="width:326px"><p></p></div>
                              <div class="tab-txt">
                                	<img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen4[0]['conformato1_imagen']; ?>" width="326" height="498">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div name="#1_4">
						<?PHP
							$conteGen5 = Parametros::getConGen(5);
						?>
					
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen5[0]['conformato1_titulo']); ?></p></div>
                                <div class="tab-txt2">
                                <?PHP echo trim($conteGen5[0]['conformato1_contenido']); ?>
								</div>
                                
                            </div>
                            
                            <div class="tab-de">
                              <div class="tab-img2"><img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen5[0]['conformato1_imagen']; ?>" /></div>  
                                
                            </div>
                        </div>
                    </div>
                    
                    <div name="#1_5">
						<?PHP
							$conteGen6 = Parametros::getConGen2(1);
						?>
					
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen6[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen6[0]['conformato2_contenido1']); ?>
								</div>
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
								<div class="tab-txt2">
									<?PHP echo trim($conteGen6[0]['conformato2_contenido2']); ?>	
								</div>

                                
                            </div>
                        </div>
                    </div>
                    
                    <div name="#1_6">
						<?PHP
							$conteGen7 = Parametros::getConGen2(2);
						?>
					
					
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen7[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt3">
									<?PHP echo trim($conteGen7[0]['conformato2_contenido1']); ?>	
								</div>
        
        						<div class="tab-img3"><img src="cms/modules/conformato2/files/big/<?PHP echo $conteGen7[0]['conformato2_imagen']; ?>" /></div>  
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
                                <div class="tab-txt3">
									<?PHP echo trim($conteGen7[0]['conformato2_contenido2']); ?>
								</div>
                            </div>
                        </div>
                    </div>
                    
                    <div name="#1_7">
						<?PHP
							$conteGen8 = Parametros::getConGen(6);
						?>
					
                        <div class="tab-cont">
                            <div class="tab-iz" style="width:526px">
                                <div class="tab-tit" style="width:526px"><p><?PHP echo trim($conteGen8[0]['conformato1_titulo']); ?></p></div>
                                <div class="tab-txt">
									<?PHP echo trim($conteGen8[0]['conformato1_contenido']); ?>
								</div>
                            </div>
                            
                            <div class="tab-de" style="width:326px">
                                <div class="tab-tit" style="width:326px"><p></p></div>
                                <div class="tab-txt">
                               		<img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen8[0]['conformato1_imagen']; ?>" width="326" height="377">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div name="#1_8">
						<?PHP
							$conteGen9 = Parametros::getConGen2(3);
						?>
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen9[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen9[0]['conformato2_contenido1']); ?>
								</div>
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen9[0]['conformato2_contenido2']); ?>
								</div>
                            </div>
                        </div>
                    </div>
                    
                </div>      
            </div>
            <!--subtab fin--> 
            
            <!--subtab-->
            <div name="#2"> 	
                <div class="subTab noborder" id="subTab2">
                    <ul>
                        <li><a href="#0"><b>2</b></a></li>
                        <li><a href="#2_1">¿Cómo abrir</br>su cuenta?</a></li>
                        <li><a href="#2_2">¿Cómo activar</br>su cuenta?</a></li>
                        <li><a href="#2_3">¿Cómo utilizar</br>su cuenta?</a></li>
                        <li><a href="#2_4">¿Cómo hacer consultas</br>de su cuenta?</a></li>
                        <li><a href="#2_5">Otras operaciones</br>con su cuenta</a></li>
                    </ul>
                    <div name="#0">
						<?PHP
							$conteGen10 = Parametros::getConGen2(4);
						?>
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen10[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen10[0]['conformato2_contenido1']); ?>
								</div>
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen10[0]['conformato2_contenido2']); ?>
								</div>
                            </div>
                        </div>
                    </div>
                    
                    <div name="#2_1">
						<?PHP
							$conteGen11 = Parametros::getConGen2(5);
						?>
					
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen11[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen11[0]['conformato2_contenido1']); ?>
								</div>
							</div>
                        </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen11[0]['conformato2_contenido2']); ?>
								</div>
                            </div>
                        </div>
                        
                    <div name="#2_2">
						<?PHP
							$conteGen12 = Parametros::getConGen2(6);
						?>
						<div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen12[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen12[0]['conformato2_contenido1']); ?>
								</div>
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen12[0]['conformato2_contenido2']); ?>
								</div>
                            </div>
                        </div>
                    </div>
                    
                    <div name="#2_3">
						<?PHP
							$conteGen13 = Parametros::getConGen2(7);
						?>
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen13[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen13[0]['conformato2_contenido1']); ?>
								</div>
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen13[0]['conformato2_contenido2']); ?>
								</div>
                                
                                <div class="tab-img4"><img src="cms/modules/conformato2/files/big/<?PHP echo $conteGen13[0]['conformato2_imagen']; ?>" /></div> 
                            </div>
                        </div>
                    </div>
                    
                    <div name="#2_4">
						<?PHP
							$conteGen14 = Parametros::getConGen2(8);
						?>
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen14[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen14[0]['conformato2_contenido1']); ?>
								</div>
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen14[0]['conformato2_contenido2']); ?>
								</div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div name="#2_5">
						<?PHP
							$conteGen15 = Parametros::getConGen2(9);
						?>
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen15[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen15[0]['conformato2_contenido1']); ?>
								</div>
        						<div class="tab-img5"><img src="cms/modules/conformato2/files/big/<?PHP echo $conteGen15[0]['conformato2_imagen']; ?>" /></div>
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen15[0]['conformato2_contenido2']); ?>
								</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
   			</div>    
           	<!--subtab-->
            <div name="#3" class="tabs-largos"> 	
                <div class="subTab noborder"  id="subTab3">
                    <ul>
                        <li><a href="#0"><b>3</b></a></li>
                        <li><a href="#3_1">Operaciones que</br>puedo realizar</a></li>
                        <li><a href="#3_2">Tarifas de la</br>cuenta Simplificada</a></li>
                        <li><a href="#3_3">Tarifas de la</br>cuenta Típica</a></li>
                        <li><a href="#3_4">Límites de la</br>cuenta Simplificada</a></li>
                        <li><a href="#3_5">Límites de la</br>de la cuenta Típica</a></li>
                    </ul>
                    <div name="#0">
						<?PHP
							$conteGen16 = Parametros::getConGen2(10);
						?>
					
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen16[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt">
									<?PHP echo trim($conteGen16[0]['conformato2_contenido1']); ?>
								</div>
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
                                <div class="tab-txt">
									<?PHP echo trim($conteGen16[0]['conformato2_contenido2']); ?>
								</div>
                            </div>
                        </div>
                    </div>
                    
                    <div name="#3_1">
						<?PHP
							$conteGen17 = Parametros::getConGen2(11);
						?>
					
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit" style="width:900px;"><p><?PHP echo trim($conteGen17[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt4">
									<?PHP echo trim($conteGen17[0]['conformato2_contenido1']); ?>
								</div>
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
                                <div class="tab-txt4">
									<?PHP echo trim($conteGen17[0]['conformato2_contenido2']); ?>
								</div>
                            </div>
                        </div>
                    </div>
    
    
                    <div name="#3_2">
                        <div class="tab-cont">
                            <div class="tab-anch">
                                <div class="tab-tit"><p>¿Cuáles son las tarifas de la Cuenta Simplificada?</p></div>
                                <div class="tab-txt">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable2">
                      <tr>
                        <th >GENERALES CUENTA DE AHORROS PLATAMÓVIL</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(1);
				
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

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable2">
                      <tr>
                        <th >CONSULTAS EN PORTAL WEB PLATAMÓVIL</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(2);
				
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

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable2">
                      <tr>
                        <th >TRANSACCIONES EN PUNTO PLATAMÓVIL</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(3);
				
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

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable2">
                      <tr>
                        <th >TRANSACCIONES EN OTROS CANALES</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(4);
				
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
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable2">
                      <tr>
                        <th >OTRAS OPERACIONES</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(5);
				
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
                            </div>

                        </div>
                    </div>
                    
                    
                    <div name="#3_3">
                        <div class="tab-cont">
                            <div class="tab-anch">
                                <div class="tab-tit"><p>¿Cuáles son las tarifas de la Cuenta Típica?</p></div>
                                <div class="tab-txt">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable">
                      <tr>
                        <th >GENERALES CUENTA DE AHORROS PLATAMÓVIL</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(6);
				
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

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable">
                      <tr>
                        <th >CONSULTAS EN PORTAL WEB PLATAMÓVIL</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(7);
				
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

                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable">
                      <tr>
                        <th >TRANSACCIONES EN PUNTO PLATAMÓVIL</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(8);
				
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
                      <tr>
                        <td>Depósito en efectivo </td>
                        <td>$ 0</td>
                      </tr>
                      <tr>
                        <td>Retiro en efectivo</td>
                        <td>$ 1.550</td>
                      </tr>
                    </table>


                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable">
                      <tr>
                        <th >TRANSACCIONES EN OTROS CANALES</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(9);
				
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
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable">
                      <tr>
                        <th >OTRAS OPERACIONES</th>
                        <th >VALOR</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(10);
				
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
                            </div>

                        </div>
                    </div>
                    
                    <div name="#3_4">
                        <div class="tab-cont">
                            <div class="tab-anch">
                                <div class="tab-tit"><p>¿Cuáles son los límites de la Cuenta Simplificada?</p></div>
                                <div class="tab-txt">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable2">
                      <tr>
                        <th rowspan="2">GENERALES CUENTA PLATAMÓVIL</th>
                        <th colspan="2" >MONTO POR TRANSACCIÓN</th>
                        <th rowspan="2">LÍMITE DE OPERACIONES </th>
                      </tr>
                      <tr>
                        <th >MÍNIMO</th>
                        <th >MÁXIMO</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(11);
				
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
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable2">
                      <tr>
                        <th rowspan="2">TRANSACCIONES EN PUNTO PLATAMÓVIL</th>
                        <th colspan="2" >MONTO POR TRANSACCIÓN</th>
                        <th rowspan="2">LÍMITE DE OPERACIONES</th>
                      </tr>
                      <tr>
                        <th >MÍNIMO</th>
                        <th >MÁXIMO</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(12);
				
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
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable2">
                      <tr>
                        <th rowspan="2">TRANSACCIONES EN PUNTO PLATAMÓVIL</th>
                        <th colspan="2" >MONTO POR TRANSACCIÓN</th>
                        <th rowspan="2">LÍMITE DE OPERACIONES</th>
                      </tr>
                      <tr>
                        <th >MÍNIMO</th>
                        <th >MÁXIMO</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(13);
				
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
                    </div>
                    
                    <div name="#3_5">
                        <div class="tab-cont">
                            <div class="tab-anch">
                                <div class="tab-tit"><p>¿Cuáles son los límites de la Cuenta Típica?</p></div>
                                <div class="tab-txt">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable">
                      <tr>
                        <th rowspan="2">TRANSACCIONES EN PUNTO PLATAMÓVIL</th>
                        <th colspan="2" >MONTO POR TRANSACCIÓN</th>
                        <th rowspan="2">LÍMITE DE OPERACIONES</th>
                      </tr>
                      <tr>
                        <th >MÍNIMO</th>
                        <th >MÁXIMO</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(14);
				
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
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable">
                      <tr>
                        <th rowspan="2">TRANSACCIONES EN PUNTO PLATAMÓVIL</th>
                        <th colspan="2" >MONTO POR TRANSACCIÓN</th>
                        <th rowspan="2">LÍMITE DE OPERACIONES</th>
                      </tr>
                      <tr>
                        <th >MÍNIMO</th>
                        <th >MÁXIMO</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(15);
				
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
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="empresaTable">
                      <tr>
                        <th rowspan="2">TRANSACCIONES EN PUNTO PLATAMÓVIL</th>
                        <th colspan="2" >MONTO POR TRANSACCIÓN</th>
                        <th rowspan="2">LÍMITE DE OPERACIONES</th>
                      </tr>
                      <tr>
                        <th >MÍNIMO</th>
                        <th >MÁXIMO</th>
                      </tr>
					  <?PHP
						$datos = Parametros::getDatosTablas(16);
				
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
                    </div>
            
                </div>      
            </div>
            <!--subtab-->
            <div name="#4"> 	
                <div class="subTab noborder"  id="subTab4">
                    <ul>
                        <li><a href="#0"><b>4</b></a></li>
                        <li><a href="#4_1">Canales de</br>información</a></li>
                        <li><a href="#4_2">Canales para presentar</br>peticiones, quejas o reclamos</a></li>
                        <li><a href="#4_3">Red de Puntos</br>Platamóvil</a></li>
                        <li><a href="#4_4">¿Quién es el </br>Consumidor Financiero?</a></li>
                    	<li><a href="#4_5">¿Cómo se identifica <br>(un punto Platamóvil)?</a></li>
                    </ul>
                    <div name="#0">
						<?PHP
							$conteGen18 = Parametros::getConGen2(12);
						?>
					
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen18[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt4">
									<?PHP echo trim($conteGen18[0]['conformato2_contenido1']); ?>
								</div>
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
                                <div class="tab-txt4">
									<?PHP echo trim($conteGen18[0]['conformato2_contenido2']); ?>
								</div>
                            </div>
                        </div>
                    </div>
                    
                    <div name="#4_1">
						<?PHP
							$conteGen19 = Parametros::getConGen2(13);
						?>
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen19[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen19[0]['conformato2_contenido1']); ?>
								</div>
							</div>
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen19[0]['conformato2_contenido2']); ?>
								</div>
                        </div>
                    </div>
                    
                    <div name="#4_2">
						<?PHP
							$conteGen20 = Parametros::getConGen2(14);
						?>
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen20[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt5">
									<?PHP echo trim($conteGen20[0]['conformato2_contenido1']); ?>
								</div>
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
                                <div class="tab-txt5">
									<?PHP echo trim($conteGen20[0]['conformato2_contenido2']); ?>
                            	</div>
                                <div class="tab-img6"><img src="cms/modules/conformato2/files/big/<?PHP echo $conteGen20[0]['conformato2_imagen']; ?>" /></div>
                       		</div>
                    	</div>
                    </div>
                        
                        
                    <div name="#4_3">
						<?PHP
							$conteGen21 = Parametros::getConGen2(15);
						?>
                        <div class="tab-cont">
                            <div class="tab-anch">
                            
                                <div class="tab-iz">
                                    <div class="tab-tit"><p><?PHP echo trim($conteGen21[0]['conformato2_titulo']); ?></p></div>
                                    <div class="tab-txt2">
										<?PHP echo trim($conteGen21[0]['conformato2_contenido1']); ?>
									</div>
                                </div>
                                
                                <div class="tab-de">
                                    <div class="tab-tit"><p></p></div>
                                    <div class="tab-txt2">
										<?PHP echo trim($conteGen21[0]['conformato2_contenido2']); ?>
									</div>
                                </div>
								 <span style="width:100%; float:left; display:block; height:30px;"></span>
								
								<br />
								<div class="tab-txt2" >Filtro por ciudad: &nbsp; <select name='ciudad' size='1' id='tiposelect'> 
									<?PHP $valores = Parametros::getCityRedP(); echo $valores; ?>	
									</select> 
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									sector: &nbsp; <select name='sector' size='1' id='tiposelectS'> 
									<?PHP $valores2 = Parametros::getSectorRedP(); echo $valores2; ?>	
									</select>
								</div>
								<br />
								<br />
                                <br />
								 <span style="width:100%; float:left; display:block; height:30px;"></span>
                                <table width="95%" border="0" cellspacing="0" cellpadding="0" class="empresaTable" id='tablaselect'>
                      
								</table></br></br>

                        	</div>
						</div>
                    </div>

                    <div name="#4_4">
						<?PHP
							$conteGen22 = Parametros::getConGen2(16);
						?>
                        <div class="tab-cont">
                            <div class="tab-iz">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen22[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen22[0]['conformato2_contenido1']); ?>
								</div>
							</div>
                            </div>
                            
                            <div class="tab-de">
                                <div class="tab-tit"><p></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen22[0]['conformato2_contenido2']); ?>
								</div>
                        </div>
                    </div>
                    <div name="#4_5">
						<?PHP
							$conteGen23 = Parametros::getConGen2(17);
						?>
                        <div class="tab-cont">
                            <div class="tab-anch">
                                <div class="tab-tit"><p><?PHP echo trim($conteGen23[0]['conformato2_titulo']); ?></p></div>
                                <div class="tab-txt">Cuando se ubique la dirección del Punto Platamóvil, éste se puede identificar porque tendrá el siguiente letrero externo:<br /><br />
                    <img src="imagenes/tabsComercio/contenido1.png" width="304" height="246" style="margin:0 185px" /><br /><br />
                    Todos los Puntos tendrán un pequeño letrero que muestra los días y horarios de atención:<br /><br />
                    <img src="imagenes/tabsComercio/contenido1.png" width="304" height="246" style="margin:0 185px" /><br /><br />

                                         Al interior, el Punto cuenta con un terminal electrónico tipo datafono, que es utilizado por el Agente para realizar las transacciones. El terminal estará ubicado sobre un soporte que además contiene información importante que debe ser del conocimiento de la comunidad:<br /><br />
                    <img src="imagenes/tabsComercio/contenido1.png" width="304" height="246"  style="margin:0 185px"/></div>
                
                            </div>

                        </div>
                    </div>
                    
                    
                    
                </div>
   			</div>    
           	<!--subtab fin--> 
            
            <!--subtab-->
            <div name="#5"> 	
                <div class="subTab noborder"  id="subTab5">
                    <ul>
                        <li><a href="#0"><b>¿Quién respalda a Platamóvil?</b></a></li>
                    </ul>
                    
                    <div name="#0">
						<?PHP
							$conteGen24 = Parametros::getConGen(7);
						?>
					
					
                        <div class="tab-cont">
                            <div class="tab-iz" style="width:526px">
                                <div class="tab-tit" style="width:526px"><p><?PHP echo trim($conteGen24[0]['conformato1_titulo']); ?></p></div>
                                <div class="tab-txt2">
									<?PHP echo trim($conteGen24[0]['conformato1_contenido']); ?>
								</div>
    </p></div>
                            </div>
                            
                            <div class="tab-de" style="width:326px">
                                <div class="tab-tit" style="width:326px"><p></p></div>
                                <div class="tab-txt">
                           	    	<img src="cms/modules/conformato1/files/big/<?PHP echo $conteGen24[0]['conformato1_imagen']; ?>" width="326" height="498">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
      
                    
                </div>
   			</div>    
           	<!--subtab fin--> 
            
             
       		</div>
            
            
            
            
        </div>
        
    </div>

</div>
    <script>
        $('#mainTab').liteTabs({ rounded: true, borders: true, width: 997 });
        //$('#mainTab').liteTabs({rounded: true, width: 1027 });
        $('.subTab').liteTabs({width: 997});
    </script>

<?php include("footer.php"); ?>
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
		*/
		
		var id = $("#tiposelect").find(':selected').val();
		
		//alert(id);
		
		$.get('tabladatosRPS.php', { id: id } , function(resultado) { 
			//alert(resultado);
			$('#tiposelectS').empty().html(resultado); 
			
			var id2 = $("#tiposelectS").find(':selected').val();
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
				$('#tiposelectS').empty().html(resultado);
				
				var id2 = $("#tiposelectS").find(':selected').val();
				//alert(id2);
				var id3 = id+"-"+id2;
				$.get('tabladatosRP.php', { id: id3 } , function(resultado2) { 
					$('#tablaselect').empty().html(resultado2);
				});
					
				
				$("#tiposelectS").change(function(event){
					var id2 = $("#tiposelectS").find(':selected').val();
					//alert(id2);
					var id3 = id+"-"+id2;
					$.get('tabladatosRP.php', { id: id3 } , function(resultado2) { 
						$('#tablaselect').empty().html(resultado2);
					});
				});
				

			});
		});
		
	});

</script>
