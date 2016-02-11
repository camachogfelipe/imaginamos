<?
    include_once './php/clases.php';
    
    $redesDAO = new redesDAO();
    $redes  = $redesDAO->gets();
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>

<script type="text/javascript" src="highslide/highslide.js"></script>
<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<script type="text/javascript">
    hs.graphicsDir = 'highslide/graphics/';
    hs.outlineType = 'rounded-white';
	hs.wrapperClassName = 'wide-border';
</script>

<link rel="stylesheet" type="text/css" href="shadowboxstyle.css">

<script language="JavaScript" type="text/javascript">
function openShadowbox2(content){
window.parent.Shadowbox.open({
  content: content,
  player: 'iframe',
  width: '350',
  height: '320'
});
}
</script>

<script language="JavaScript" type="text/javascript">
function openShadowbox3(content){
window.parent.Shadowbox.open({
  content: content,
  player: 'iframe',
  width: '350',
  height: '390'
});
}
</script>

<script language="JavaScript" type="text/javascript">
function openShadowbox4(content){
window.parent.Shadowbox.open({
  content: content,
  player: 'iframe',
  width: '350',
  height: '620'
});
}
</script>

<!-- the following line is only required to run the demos -->
<script type="text/javascript" src="shadowbox/demo.js"></script>

<!-- this section is the only one needed to run Shadowbox -->
<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css">
<script type="text/javascript" src="shadowbox/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({
    // a darker overlay looks better on this particular site
    overlayOpacity: 0.8
    // setupDemos is defined in assets/demo.js
}, setupDemos);
</script>

<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".modal-form").colorbox({inline:true, width:295, height:457});
		$(".modal-res").colorbox({inline:true, width:700, height:550});
	});
</script>

<link href="css/stylos_pperfecto.css" rel="stylesheet" type="text/css" />
</head>

<body><div id="envpie"><div id="col1_logcien"><img src="images/logocienxcien.png" width="164" height="109" /></div>
	 <div id="col1_pie">
	 <span class="titulopie">Pene Perfecto </span>
	 <div id="menupie">
	 
	 <ul>
             <li><a href="index.php">Inicio</a></li>
	  <li><a href="como_funciona.php">Cómo funciona </a></li>
	   <li><a href="beneficios.php">Beneficios </a></li>
	   <li><a href="resultados.php">Resultados </a></li>
	   <li><a href="comparenos.php">Compárenos</a></li>
	 </ul>
	
	 </div>
	 
	 </div>

	 <div id="col1_pie">
	 <span class="titulopie">Soporte </span>
	 <div id="menupie">
	 
	 <ul>
	 <li><a href="#nogo" onclick="openShadowbox3('loginweb_inf.php')">Help desk </a></li>
	  <li><a href="preguntas_frecuentes.php">Preguntas frecuentes  </a></li>
	   <li><a href="contactenos.php">Contáctenos</a></li>
	   <li><a href="politica_privacidad.php">Política de privacidad </a></li>
	   <li><a href="terminos_condiciones.php">Términos del servicio </a></li>
	 </ul>

	 </div>

	 </div>

  
  	 <div id="col1_pie">
	 <span class="titulopie">Otros Enlaces </span>
	 <div id="menupie">
	 
	 <ul>
	 <li><a href="empresa.php">Empresa</a></li>
	  <li><a href="tecnicas_aevitar.php">Técnicas a evitar </a></li>
	   <li><a href="comentarios.php">Comentarios</a></li>
	   <li><a href="#nogo" onclick="openShadowbox2('mod_encuesta.php')">Encuesta</a></li>
	   
	 </ul>
	 
	 </div>
	 </div>

  <div id="col1_pie">
	 <span class="titulopie">Síganos </span>
	 <div id="facebook">	 
	 <ul>
             <li><a href="<?=$redes[0]->getlink() ?>">Facebook</a></li>	   
	 </ul>	 	 
	 </div>
	 
	  <?php /*?><div id="twitter">	 
	 <ul>
	 <li><a href="<?=$redes[1]->getlink() ?>">Twitter</a></li>	   
	 </ul>	 	 
	 </div>
	 
	 <div id="ytube">	 
	 <ul>
	 <li><a href="<?=$redes[2]->getlink() ?>">Youtube</a></li>	   
	 </ul>	 	 
	 </div><?php */?>

  </div>
	 </div> 
</body>
</html>