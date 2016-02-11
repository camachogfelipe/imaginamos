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

<script type="text/javascript">

	$(function() {
		
		
		//alert('CARGANDO...');	
		
		$("#formContacto").submit(function(event) {
		
				//alert( $("#formContacto").validationEngine('validate') );
				
				
				if( $("#formContacto").validationEngine('validate') ){
				
					//alert('formulario bien lleno');
					
					
					var valnom = $("#nombrecontacto").val();
					var dir = $("#dircontacto").val();
					var tel = $("#telcontacto").val();				
					var email = $("#emailcontacto").val();				
					var msj = $("#msjcontacto").val();
					
					
					
					
					$.get('enviarcontacto.php', { nombre: valnom, dir: dir, tel: tel, email: email, msj: msj } , function(resultado) { 
						alert(resultado);
						
						
						var txt = "";
						
						$("#nombrecontacto").val(txt);
						$("#dircontacto").val(txt);
						$("#telcontacto").val(txt);				
						$("#emailcontacto").val(txt);				
						$("#msjcontacto").val(txt);
						
						
						
					});
					
					
				}else{
					//alert('formulario mal lleno');
				}
				
				event.preventDefault(); 
				
				
		});
		
	});

</script>

<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/jquery.mosaic.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollCat.min.js"></script>
<script type="text/javascript" src="js/jquery.selectbox.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="js/jquery.pajinate.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/enhance.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("input.adjunto").filestyle({ 
			image: "images/cargar.png",
			imageheight: 30,
			imagewidth: 126,
			width: 304
		});
  });
</script>
<script type="text/javascript" src="js/jquery.valid.js"></script>
<script type="text/javascript" src="js/jSite.js"></script>

<style type="text/css">
	.btNav5 {background:url(images/bgBtNav.png) 0 0 no-repeat;}
</style>

</head>
<body>


	<?php include( 'header.php' ); ?>


    <div class="conMain">
    	<div class="conInfoGral">
            <div class="conPromoHome">
            	<div class="conTitCenPromo"><p class="tCenPromo"><strong>Contáctenos</strong></p></div>
                <div class="conTxDesInt">
                	<p class="txDesInt">"Si tienes algún requerimiento o duda, no vaciles en contactarnos. Podemos enviarte la parte que necesites donde necesites."</p>
                </div>
                <div class="conProFiltrados">
                	<div class="conImgCon">
                    	<img src="images/imgContacto.jpg" width="998" height="248" alt="" />
                    </div>
                    <div class="conFormCon">
                    	<form class="formCon" id="formContacto">
                        	<div class="colCon">
                        		<label>
                            		<input id="nombrecontacto" value="Nombre:" onBlur="javascript:if(this.value=='') this.value='Nombre:';" onFocus="javascript:if(this.value=='Nombre:') this.value='';" class="validate[required]" data-validation-placeholder="Nombre:" />
                            	</label>
                                <label>
                            		<input id="dircontacto" value="Dirección:" onBlur="javascript:if(this.value=='') this.value='Dirección:';" onFocus="javascript:if(this.value=='Dirección:') this.value='';" class="validate[required]" data-validation-placeholder="Dirección:" />
                            	</label>
                                <label>
                            		<input id="telcontacto" value="Teléfono:" onBlur="javascript:if(this.value=='') this.value='Teléfono:';" onFocus="javascript:if(this.value=='Teléfono:') this.value='';" class="validate[custom[phone]]" data-validation-placeholder="Teléfono:" />
                            	</label>
                                <label>
                            		<input id="emailcontacto" value="Correo electrónico:" onBlur="javascript:if(this.value=='') this.value='Correo electrónico:';" onFocus="javascript:if(this.value=='Correo electrónico:') this.value='';" class="validate[custom[email]]" data-validation-placeholder="Correo electrónico:" />
                            	</label>
                            </div>
                            <div class="colCon">
                            	<textarea id="msjcontacto" value="Mensaje:" style="resize: none;" onBlur="javascript:if(this.value=='') this.value='Mensaje:';" onFocus="javascript:if(this.value=='Mensaje:') this.value='';" class="" data-validation-placeholder="Mensaje:" >Mensaje:</textarea>
                              <div class="margen-adjuntar">
                                <div class="datos-adjunto">
                                  <div class="mascara-adjunto"></div>
                                  <label>                                                                         
                                		<input type="file" class="adjunto" />
                      						</label>
                                </div>
                          		</div>
                            	<label class="btEnvForm">
                            		<input type="submit" value="ENVIAR" />
                            	</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    	</div>
    </div>
    
	<?php include( 'footer.php' ); ?>


</body>
</html>