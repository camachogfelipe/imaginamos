<?php
//secci&oacute;n para enviar correo nuevamente a solicitud del cliente
if(isset($_GET['sol']) and isset($_GET['idpqr']) and isset($_GET['doc'])) :
	include( '../business/class/Correo.class1.php');
	include( '../include/define.php' );
	include( '../include/config.php' );
	include( '../business/function/plGeneral.fnc.php' );
	$sqlQuery = "SELECT A.nombre, A.email, B.texto 
				 FROM pqr_registro AS A 
				 INNER JOIN respuestas_pqr AS B ON A.id=B.pqr_registro_id AND B.pqr_registro_id='".(int)$_GET['idpqr']."' 
				 WHERE A.cedula = '".(int)$_GET['doc']."'";
	$solicitud = DbHandler::GetAll($sqlQuery);
	$nombre = $db->results[2]['nombre'];
	$email = $db->results[2]['email'];
	$respuesta = $db->results[2]['texto'];
	$asunto = utf8_decode("Fwd: Respuesta a su PQR con c&oacute;digo ".(int)$_GET['idpqr']);
	$body= '<p class="texto_doc" style="text-align: center;">
			<p>Sr(a) '.$nombre.'</p>
			'.$respuesta.'
			</p>';
	$cCorreo = new Correo();
	$cCorreo->SendEmail($email, $asunto, $body);
endif;

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1024, maximum-scale=2">
<title>AOA | Se mueve contigo</title>
<link href="favicon.ico" rel="shortcut icon" />
<link href="assets/css/aoa.css" rel="stylesheet" />
<link href="assets/css/reset.css" rel="stylesheet" />
<style type="text/css">.con-solicitudes {width:460px; height:auto; float:left;} .con-solicitudes .sol_pqr {margin-bottom:25px;}</style>
</head>

<body>

<?php include'header.php' ?>

<?php include'menu.php'; 
if(!isset($_POST)){
    header("Location: index.php");
    exit();
}
//if($_POST['num']==NULL || $_POST['num']=='N. de solicitud' ){
//    header("Location: index.php");
//    exit();
//}
if($_POST['num']==NULL || $_POST['num']=='N. de solicitud' ){
   $lastq = ''; 
}else{
       $lastq = 'OR B.pqr_registro_id = '.$_POST['num']; 
}
if(isset($_POST['cedula'])|| $_POST['cedula'] !=''){
    $cedula = $_POST['cedula'];
}else{
    $cedula = 'Nothing';
}
if(isset($_POST['num']) || $_POST['num'] !=''){
    
  $cod = $_POST['num'];  
}else{
    $cod = 11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111;
}

$sqlQuery = "SELECT texto AS respuesta, pqr_registro_id AS cod, A.fecha 
    FROM pqr_registro AS A 
    INNER JOIN respuestas_pqr AS B 
    ON A.id = B.pqr_registro_id 
    WHERE A.cedula = '$cedula' 
    $lastq;";
$solicitud = DbHandler::GetAll($sqlQuery);
$contador = count($solicitud);

?>
<?php $dbpqr = new Dbpqr_front();
$idpqr= $dbpqr->getMaxId();
$pqr_front = $dbpqr->getByPk($idpqr);
?>

<div class="title_int">
  <div class="content_940">
    <h2 class="left">Consulta <span>PQR </span></h2>
  </div>
</div>

<div class="content_int content_940 clearfix">
  <img src="img/pqr_front/<?= str_replace("original","redimension",$pqr_front["imagen_solicitud"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" class="right img_solic" />
  <div class="con-solicitudes">
  
  <?php
	if($contador>0) {
		$codigo = $solicitud[0]['cod'];
		$codigoIni = 0;
		foreach($solicitud as $sol) :
			$texto = $sol['respuesta'];
			$codigo = $sol['cod'];
			$fecha = explode(" ", $sol['fecha']);
			if($codigo != $codigoIni and $codigoIni > 0) :
			?>
  </div>
            <?php
			endif;
			if($codigo != $codigoIni || $codigoIni == 0) :
			 	$codigoIni = $codigo;
			?>
  <div class="sol_pqr left">
      <h3>La solicitud <?= $codigo; ?></h3>
  			<?php
			endif;
			?>
      <p style="font-size: 11px; font-weight: bolder"><?php echo $fecha[0]." a las ".$fecha[1]; ?></p>
      <p>
          <?php
		  if($texto != "REGISTRADA" and $texto != "EN TR&aacute;MITE") :
		  	?>
            RESUELTA.<br />
            Su solicitud ya fu&eacute; resulta y se le env&iacute;o respuesta a su correo.<br />Para solicitar nuevamente su respuesta de clic en el siguiente v&iacute;nculo: <a href="?base&seccion=solicitud&sol=1&idpqr=<?= $codigo ?>&doc=<?= $cedula ?>">Solicitar respuesta</a>
            <?php
		  else : echo $texto;
		  endif;
		  ?>
      </p><br />
  			<?php
  		endforeach;
	?>
  </div>
  	<?php
	}else{
		$texto = 'No hemos encontrado respuesta para su PQR o no se ha procesado un PQR con ese c&oacute;digo, si considera esto un error, por favor comun&iacute;quese telef&oacute;nicamente con nosotros.';
		$codigo = $cod;
  ?>
    <div class="sol_pqr left">
      <h3>La solicitud <?= $cod; ?></h3>
      <!--<p><?php echo date("Y-m-d h:i:s") ?></p>-->
      <p>
          <?= $texto; ?>
      </p>
    </div><?php
    
}
  
   ?>
  	   
    
<!--    <div class="sol_pqr left">
      <h3>La solicitud <?= $cod; ?></h3>
      <p>DD/MM/AAAA</p>
      <p>
          <?= $texto; ?>
      </p>
    </div>-->

    
  </div>
</div> 

<?php include'footer.php' ?>



<script src="assets/js/jquery.js" type="text/javascript"></script>	

<script src="assets/js/jquery.mousewheel.js"></script>
<script src="assets/js/jquery.jscrollpane.min.js"></script>
<script src="assets/js/functions.js" type="text/javascript"></script>
<script src="assets/js/placeholder.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script>
$(document).ready(function(){
  $('input[placeholder]').placeholder();
});
</script>

</body>
</html>
