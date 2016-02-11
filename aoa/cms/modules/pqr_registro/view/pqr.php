<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<link href="assets/css/validationEngine.jquery.css" rel="stylesheet" />
</head>

<body>

<?php include'header.php' ?>

<?php include'menu.php' ?>


<div class="title_int">
  <div class="content_940">
    <h2 class="left">PQR <span> </span></h2>
  </div>
</div>
<?php $dbpqr = new Dbpqr_front();
$idpqr= $dbpqr->getMaxId();
$pqr_front = $dbpqr->getByPk($idpqr);

//for($i=0;$i < count($idpqr);$i++){
//    
//    echo $idpqr[$i];
//}
?>
<div class="content_int content_940">
  <p class="texto_pqr">
    <?php echo utf8_encode($pqr_front['texto_principal']); ?>
  </p>
  <div class="clearfix">
    <form class="form_pqr1 left" action="controllers/insertpqr.php" method="post">
      <h3>Registra tu pqr</h3>
      <input name='nombre' class="validate[required]" type="text" placeholder="Nombre" />
      <input name='cedula' class="validate[required, custom[number]]" type="text" placeholder="Cédula" />
      <input name='dir' class="validate[required]" type="text" placeholder="Dirección" />
      <input name='email' class="validate[required, custom[email]]" type="text" placeholder="E-mail" />
      <div class="clearfix middle_inputs">
        <input name='placa' type="text" class="left" class="validate[required, custom[number]]" placeholder="Placa del vehículo" />
        <select name='aseguradora' class="right validate[required]">
          <option value="">Aseguradora</option>
          <?php
		  	$objAseguradoras = new Dbaseguradoras();
		  	$aseguradoras = $objAseguradoras->getList();
			foreach($aseguradoras as $value) :
				?>
                <option value="<?= $value['id'] ?>"><?= mb_strtoupper($value['titulo']) ?></option>
                <?php
			endforeach;
		  ?>
        </select>
      </div>
      <select name='tipo' class="select_form1 validate[required]">
        <option value="">Tipo de solicitud</option>
        <?php
		  	$objServicios = new Dbservicios();
		  	$servicios = $objServicios->getList();
			foreach($servicios as $value) :
				?>
                <option value="<?= $value['id'] ?>"><?= mb_strtoupper($value['titulo']) ?></option>
                <?php
			endforeach;
		  ?>
      </select>
      <textarea name='comentarios' placeholder="Comentarios"></textarea>
      
      <input id='codigopqr1' type ="hidden" name="id" value ="" />
      <input type="submit" value="Enviar" />
    </form>
    <div class="right">
      <img src="img/pqr_front/<?= str_replace("original","redimension",$pqr_front["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" class="img_pqr" />
      <form class="form_pqr1" action="index.php?base&seccion=solicitud" method="post">
        <h3><?php echo utf8_encode($pqr_front['titulo']); ?></h3>
        <p>
        <?php echo utf8_encode($pqr_front['texto_descriptivo']); ?>
        </p>
        <input name='cedula'class="validate[custom[number]]" type="text" placeholder="Cédula" />
        <input name='num' class="validate[custom[number]]" type="text" placeholder="N. de solicitud" />
        <input type="submit" value="Enviar" />
      </form>
    </div>
  </div>
</div> 

<?php include'footer.php' ?>
<div class="popup_doc">
 <div class="bg_popup"></div>
 <div class="content_popup_doc">
   <a href="javascript:cerrarDoc();" class="btn_close"></a>
   <div class="title_serv">
     <h3>Datos Ingresados</h3>
   </div>
   <p class="texto_doc" style='text-align: center;'>
     Hemos registrado tu PQR<br>
     Recuerda que puedes seguir tu pqr<br>
         Codigo PQR: <span style='color: blue;' id='codigopqr'></span>
     </p>
 </div>
</div>
<script src="assets/js/jquery.js" type="text/javascript"></script>	

<script src="assets/js/jquery.mousewheel.js"></script>
<script src="assets/js/jquery.jscrollpane.min.js"></script>
<script src="assets/js/functions.js" type="text/javascript"></script>
<script src="assets/js/placeholder.js"></script>
<script src="assets/js/jquery.validationEngine.js"></script>
<script src="assets/js/jquery.validationEngine-es.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script>
$(document).ready(function(){
  $('input[placeholder]').placeholder();
   $(".form_pqr1").validationEngine();
});
function abrirDocumentos(){
    $('.popup_doc').fadeIn(300);
    };
function cerrarDoc(){$('.popup_doc').fadeOut(300);};
</script>
<?php 
if(isset($_GET['send'])){
    if($_GET['send']==1){
        ?><script>$(function(){
            $('#codigopqr').html('<?= base64_decode($_GET['idpqr']); ?>').change();
            abrirDocumentos();
        
        });</script>
<script>
        $(function(){
            $('#codigopqr1').html('<?= base64_decode($_GET['idpqr']); ?>').change();
            abrirDocumentos();
        
        });
</script>
            
            <?php
    }else{
        ?><script>alert('ha ocurrido un error, intentalo nuevamente.');</script><?php
    }
}
?>
</body>
</html>
