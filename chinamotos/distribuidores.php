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
		
		
		$("#formDistri").submit(function(event) {
		
				//alert( $("#formContacto").validationEngine('validate') );
				
				
				if( $("#formDistri").validationEngine('validate') ){
				
					//alert('formulario bien lleno');
					
					
					var valnom = $("#nombredis").val();
					var emp = $("#empresadis").val();
					var dir = $("#dirdis").val();
					var city = $("#ciudaddis").val();
					var tel = $("#teldis").val();				
					var email = $("#emaildis").val();				
					var msj = $("#msjdis").val();
					
					
					$.get('enviardistri.php', { nombre: valnom, emp: emp, dir: dir, city: city, tel: tel, email: email, msj: msj } , function(resultado) { 
						alert(resultado);
						
						var txt = "";
						
						$("#nombredis").val(txt);
						$("#empresadis").val(txt);
						$("#dirdis").val(txt);
						$("#ciudaddis").val(txt);
						$("#teldis").val(txt);				
						$("#emaildis").val(txt);				
						$("#msjdis").val(txt);
						
						
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
	.btNav4 {background:url(images/bgBtNav.png) 0 0 no-repeat;}
</style>

</head>
<body>


	<?php include( 'header.php' ); ?>
<?PHP
$infoDistrib= Parametros::getInfoDistrib();
?>

    <div class="conMain">
    	<div class="conInfoGral">
			<!--Categorias-->
            <div class="conPromoHome">
            	<div class="conTitCenPromo"><p class="tCenPromo"><strong>Distribuidores</strong></p></div>
                <div class="conTxDesInt">
                	<p class="txDesInt">"<?PHP echo trim($infoDistrib[0]['distrib_contenido']); ?>"</p>
                </div>
                <div class="conProFiltrados">
                	<div class="conFormDis">
                    	<form class="formDis" id="formDistri">
                        	<label>
                            	<input id="nombredis" value="Nombre:" onBlur="javascript:if(this.value=='') this.value='Nombre:';" onFocus="javascript:if(this.value=='Nombre:') this.value='';" class="validate[required]" data-validation-placeholder="Nombre:" />
                            </label>
                            <label>
                            	<input id="empresadis" value="Empresa:" onBlur="javascript:if(this.value=='') this.value='Empresa:';" onFocus="javascript:if(this.value=='Empresa:') this.value='';" class="validate[required]" data-validation-placeholder="Empresa:" />
                            </label>
                            <label>
                            	<input id="dirdis" value="Dirección:" onBlur="javascript:if(this.value=='') this.value='Dirección:';" onFocus="javascript:if(this.value=='Dirección:') this.value='';" class="validate[required]" data-validation-placeholder="Dirección:" />
                            </label>
                            <label>
                            	<input id="ciudaddis" value="Ciudad:" onBlur="javascript:if(this.value=='') this.value='Ciudad:';" onFocus="javascript:if(this.value=='Ciudad:') this.value='';" class="validate[required]" data-validation-placeholder="Ciudad:" />
                            </label>
                            <label>
                            	<input id="teldis" value="Teléfono:" onBlur="javascript:if(this.value=='') this.value='Teléfono:';" onFocus="javascript:if(this.value=='Teléfono:') this.value='';" class="validate[custom[phone]]" data-validation-placeholder="Teléfono:" />
                            </label>
                            <label>
                            	<input id="emaildis" value="Correo electrónico:" onBlur="javascript:if(this.value=='') this.value='Correo electrónico:';" onFocus="javascript:if(this.value=='Correo electrónico:') this.value='';" class="validate[custom[email]]" data-validation-placeholder="Correo electrónico:" />
                            </label>
                            <textarea id="msjdis" value="Mensaje:" style="resize: none;" onBlur="javascript:if(this.value=='') this.value='Mensaje:';" onFocus="javascript:if(this.value=='Mensaje:') this.value='';" class="" data-validation-placeholder="Mensaje:" >Mensaje:</textarea>
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
                            	<div class="conBtAse">
                    				<a class="iframe" href="asesoresInfo.php"><div class="btAse"><p>ASESORES PERSONALIZADOS</p></div></a>
                    			</div>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
            <!--Fin Categorias-->
    	</div>
    </div>
    
    
	<?php include( 'footer.php' ); ?>


</body>
</html>