<!DOCTYPE>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js ie9"> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1; text/html; charset=UTF-8">
<meta name="viewport" content="width=1024, maximum-scale=2">
<title>Audifact S.A.S</title>
<meta name="viewport" content="width=1024, maximum-scale=2">
<link rel="shortcut icon" type="image/x-icon" href="favicon.png"/>
<meta http-equiv="content-language" content="es" />
<meta http-equiv="pragma" content="No-Cache" />
<meta name="Keywords" lang="es" content="" />
<meta name="Description" lang="es" content="" />
<meta name="copyright" content="imaginamos.com" />
<meta name="date" content="2012" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />
<link href="<?php echo base_url('assets') ?>/css/Audifact.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/flexslider.css" type="text/css" media="screen" />
<link href="<?php echo base_url('assets') ?>/css/tabla.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url('assets') ?>/js/modernizr.js"></script>
</head>

<body class="loading">


<div id="loader"><div id="progress"></div></div>

    <div class="bg-header">
     <div class="header">
     
        <a href="<? echo base_url() ?>home"><div class="logo"></div></a>
    
    	<div class="redes-header">
			<ul>
                <a href="<? echo base_url() ?>home"><li class="home"></li></a>              
                <a href=""><li class="correo"></li></a>
			</ul>                       	
        </div>
        
        <div class="buscador">
          <form class="buscar">			
            <input type="text" class="texbox" name="buscador" value="Buscar..." onBlur="if(this.value=='') this.value='Buscar...'" onFocus="if(this.value =='Buscar...' ) this.value=''" />
            <a href="resultado-busqueda.php" class="btn-buscar" onClick="document.getElementById('buscador-web').submit()"></a>									
          </form>
      </div>
        
     </div>   
     
        <div class="marco-menu">
            <div class="menu">
        <ul>
           <a href="<? echo base_url() ?>quienessomos" class="<?php if(@$_GET['quienessomos'] == '1'){echo 'activo';}?>"><li>Quiénes Somos</li></a><hr class="linea-h">
           <a href="<? echo base_url() ?>productos" class="<?php if(@$_GET['productos'] == '2'){echo 'activo';}?>"><li>Productos</li></a><hr class="linea-h">
           <a href="<? echo base_url() ?>servicios" class="<?php if(@$_GET['seccion'] == '3'){echo 'activo';}?>"><li>Servicios</li></a>
       </ul>
    </div>
        <div class="menu2">
        <ul>
            <a href="<? echo base_url() ?>contactenos" class="<?php if (@$_GET['seccion'] == '4'){echo 'activo';}?>"><li>Contáctenos</li></a></a><hr class="linea-h2"> 
            <a href="<? echo base_url() ?>medicamentos" class="<?php if (@$_GET['seccion'] == '5'){echo 'activo';}?>"><li>Medicamentos</li></a><hr class="linea-h2">
                        
            <ul id="mainmenu">
              
              <li class="last"><a href="#">Insumos y Suministros</a>
                <ul>
  <li><a href="<? echo base_url() ?>caracteristicas/insumos" class="<?php if (@$_GET['seccion'] == '6'){echo 'activo';}?>">Insumos</a></li>
  <li><a href="<? echo base_url() ?>caracteristicas/suministros" class="<?php if (@$_GET['seccion'] == '6'){echo 'activo';}?>">Suministros</a></li>
                </ul>
              </li>
            
            </ul>
            
         </ul>
    </div>
    </div>
   
</div> 
    

 <?php echo $template['body'] ?>         




<div class="bg-footer">
 <div class="footer">
    
    <div class="info-f">        
      <h2>Teléfono</h2>
       <h3>+ 57 4131539</h3>
      <ul>
        <li><p>Cra 8 no 8-10</p></li>
        <li><p>Fundación magdalena</p></li>
        <li><p>Bogotá - Colombia</p></li>
      </ul>  
    </div>
 
    <div class="info-f2">
       <h1>Información de <span>Contácto</span></h1>
        <ul>
           <li class="tel"><p>Telefóno: + 57 4131539</p></li>
           <li class="cel"><p>Mobile: + 57 301 2036502</p></li>
           <li class="email"><p> audifactsas@hotmail.com</p></li>
        </ul>
      </div>
 
  <div class="mapa-sitio-f">
    <h1>Map <span>Site</span></h1>
    <ul style="width:145px !important;">
        <a href="quienes-somos.php?seccion=1"><li><p>Quiénes Somos</p></li></a>
        <a href="productos.php?seccion=2"><li><p>Productos</p></li></a>
        <a href="servicios.php?seccion=3"><li><p>Servicios</p></li></a>
    </ul>
    <ul>
        <a href="contactenos.php?seccion=4"><li><p> Características</p></li></a>
        <a href="medicamentos.php?seccion=5"><li><p>Medicamentos</p></li></a>
        <a href="caracteristicas.php?seccion=6"><li><p>Contáctenos</p></li></a>
    </ul>
  </div>
  
  <a href="home"><div class="logo-f"></div></a>
  
  <div class="clear"></div>
 
 </div>
</div> 

<div class="bg-derechos-autor">
<div class="derechos-autor">
  <div class="derechos">© 2013 <span>AUDIFACT S.A.S</span> -  Todos los derechos reservados - Prohibida su reprodución parcial o total.</div>
  <div class="footer-autor">
  <span id="ahorranito2"></span><a href="http://www.imaginamos.com" target="_blank">Diseño Web: </a><a href="http://www.imaginamos.com" target="_blank">imagin<span>a</span>mos.com</a>
  </div>
</div>
</div> 

<script src="<?php echo base_url('assets') ?>/js/jquery-1.9.1.min.js"></script> 
<script>
$(document).ready(function(){
	$('ul#mainmenu li ul').hide();
	$('ul#mainmenu li').hover(
			function(){
				$('ul#mainmenu li').not($('ul', this)).stop();
				$('ul', this).slideDown('fast');
			},
			function(){
				$('ul', this).slideUp('fast');
			}
	);
});
</script>
<script src="<?php echo base_url('assets') ?>/js/pop-up.js"></script>  
<script defer src="<?php echo base_url('assets') ?>/js/jquery.flexslider.js"></script>
<script src="<?php echo base_url('assets') ?>/js/jquery-importantes.js"></script> 
<script src="<?php echo base_url('assets') ?>/js/easing.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets') ?>/js/jquery.ui.totop.js" type="text/javascript"></script> 
<script type="<?php echo base_url('assets') ?>/text/javascript" src="js/jquery.paginador.js"></script> 
<script type="<?php echo base_url('assets') ?>/text/javascript" src="js/jquery.validacion.js"></script>
<script type="<?php echo base_url('assets') ?>/text/javascript" src="js/jquery.validationEngine-es.js"></script>
<script type="<?php echo base_url('assets') ?>/text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url('assets') ?>/js/jquery.dataTables.js"></script>

</body>
</html>