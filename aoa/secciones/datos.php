<?php header('Content-Type: text/html; charset=utf-8'); ?>
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
</head>

<body>

<?php include'header.php'; ?>

<?php include'menu.php';
$serv = DbHandler::GetAll("SELECT * FROM servicios WHERE visible_contacto = 1");
      $contador = count($serv);
      $active = '';
      ?>


<div class="title_int">
  <div class="content_940">
    <h2 class="left">Datos <span>de contacto</span></h2>
  </div>
</div>

<div class="content_int content_940">
  <div class="title_serv">
    <h3>Contactos por aseguradora:</h3>
  </div>
  <div class="lista_servicios clearfix">
    <ul class="car-service">
      <?php for($i=0; $i<$contador; $i++):
          if($i==0){ $active='serv_activo';}else{$active='';} ?>
      <li class="slide"><a onclick="obteneraseguradoras(<?php echo $serv[$i]['id'];  ?>);" class="<?php echo $active; ?> bt-tab" href="javascript:void(0)"><?php echo $serv[$i]['titulo'];  ?></a></li>
      <?php endfor; ?>
    </ul>  
  </div>
  <div class="content_lista_datos">
    <ul id="ul" class="clearfix">
<!--      <li>
        <h3>Mapfre</h3>
        <h4>Call AOA: (+571) 5897848</h4>
        <h4># de asistencia: 624</h4>
      </li>
      <li>
        <h3>ALLIANZ</h3>
        <h4>Call AOA: (+571) 5897547</h4>
        <h4># de asistencia: 265</h4>
      </li>
      <li>
        <h3>LIBERTY</h3>
        <h4>Call AOA: (+571) 5897545</h4>
        <h4># de asistencia: 224</h4>
      </li>
      <li>
        <h3>RSA</h3>
        <h4>Call AOA: (+571) 5897546</h4>
        <h4># de asistencia: 772</h4>
      </li>-->
    </ul>
  </div>
    <script>
    function obteneraseguradoras(id){
$.get('./controllers/datoscontacto.php', { id: id, kind: 1  } , function(datos) {
$('#ul').html(datos).change();
          });

    }
    </script>
  <div class="content_ciudad_datos">
    <div class="title_serv">
     <h3>Oficinas  a nivel nacional:</h3>
    </div>
    <p class="texto_pqr" style="margin-top:20px;">&nbsp;</p>
    <div class="lista_ciudades clearfix">
      <?php $dboficinas = new Dboficinas();
      $oficinas = $dboficinas->getList();
      $contador = count($oficinas);
      ?>
      
      <div class="datos_ciudad left" style="margin-right:20px">
          <h3><?php echo $oficinas[0]['ciudad']; ?></h3>
       <?php $items1 = DbHandler::GetAll("SELECT * FROM descripcion_oficina WHERE oficinas_id =".$oficinas[0]['id']); ?>
       <?php for($i=0; $i<count($items1); $i++): ?>
       <div class="item_datos">
         <h4><?php echo $items1[$i]['titulo']; ?></h4>
         <h5><?php echo $items1[$i]['linea1']; ?></h5>
         <h5><?php echo $items1[$i]['linea2']; ?></h5>
       </div>
          <?php endfor; ?>
      </div>
      
      <div class="left" style="margin-right:20px;">
        <?php for($i=1; $i<4; $i++): ?>
        <div class="datos_ciudad">
         <h3><?php echo $oficinas[$i]['ciudad']; ?></h3>
         <?php $items1 = DbHandler::GetAll("SELECT * FROM descripcion_oficina WHERE oficinas_id =".$oficinas[$i]['id']); ?>
         <div class="item_datos">
             <?php for($j=0; $j<count($items1); $j++): ?>
           <h4><?php echo $items1[$j]['titulo']; ?></h4>
           <h5><?php echo $items1[$j]['linea1']; ?></h5>
           <h5><?php echo $items1[$j]['linea2']; ?></h5><br />
           <?php endfor; ?>
         </div>
        </div>
          <?php endfor; ?>
      </div>
      <div class="left">
          <?php for($i=4; $i<$contador; $i++): ?>
        <div class="datos_ciudad">
         <h3><?php echo $oficinas[$i]['ciudad']; ?></h3>
         <?php $items1 = DbHandler::GetAll("SELECT * FROM descripcion_oficina WHERE oficinas_id =".$oficinas[$i]['id']); ?>
         <div class="item_datos">
             <?php for($j=0; $j<count($items1); $j++): ?>
           <h4><?php echo $items1[$j]['titulo']; ?></h4>
           <h5><?php echo $items1[$j]['linea1']; ?></h5>
           <h5><?php echo $items1[$j]['linea2']; ?></h5><br />
           <?php endfor; ?>
         </div>
        </div>
          <?php endfor; ?>
      </div>
    </div>
  </div>
</div> 

<?php include'footer.php' ?>



<script src="assets/js/jquery.js" type="text/javascript"></script>	

<script src="assets/js/jquery.mousewheel.js"></script>
<script src="assets/js/jquery.jscrollpane.min.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/functions.js" type="text/javascript"></script>
<script src="assets/js/placeholder.js"></script>
<script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
<script>
$(document).ready(function(e) {
    $('.lista_servicios a.bt-tab').click(function(e) {
		$('.lista_servicios a.bt-tab').removeClass('serv_activo');
		$(this).addClass('serv_activo');
        $('.content_lista_datos').slideUp(200,function(){
			$(this).slideDown();
		});
    });
});
</script>

</body>
</html>
