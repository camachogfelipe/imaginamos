<?php $dbcontact = new Dbcontacto();
$idcontact = $dbcontact->getMaxId();
$contact = $dbcontact->getByPk($idcontact);
?>
  	<?php include("head.php"); ?>  
		<?php include("header.php"); ?>

<div class="titulo-internas"><h1><?php echo utf8_encode($contact['titulo']); ?></h1></div>

<div class="contenido">

   <div class="text-contact">
       <p><?php echo utf8_encode($contact['texto']); ?></p>  
   </div>
    
    <form id="form-contacto" action="controllers/contacto.php" method="post" class="contactenos">
     <fieldset>
      <label>Your name</label>
      <input value="" class="validate[required] text-input" type="text" name="nombre" id="" placeholder=""/>
      <label>Your e-mail</label>
      <input value="" class="validate[required,custom[email]]" type="text" name="email" id="" placeholder=""/>    
      <label>Your last name</label>
      <input value="" class="validate[required] text-input" type="text" name="asunto" id="" placeholder=""/>
      <label>Your menssage</label>
      <textarea class="validate[required] text-input" cols="" rows="" name="comentario"></textarea>
    </fieldset>    
    
     <input name="" type="submit" class="submit" value="Enviar"/>
      <a id="enviar" href="#enviado" class="login-window"></a>
  </form>
     
    <div class="datos-mapa">
    <div class="datos-contactenos">
     <img src="img/contacto/<?= str_replace("original","redimension",$contact["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>">
    </div>
    <div class="datos-reales-contacto">
    <ul>
    <li style=" margin-bottom:20px;"><img src="assets/img/header-logo.png" style="width:210px; margin-left:40px;"</li>
    <li class="dir"><?php echo utf8_encode($contact['direccion']); ?></li>
    <li class="tel">Tel: <?php echo utf8_encode($contact['telefono']); ?></li>
    <li class="email"><?php echo utf8_encode($contact['email']); ?></li>
    </ul>
    </div>
    
  </div>
  
  <div class="clearfix"></div> 

</div><!-------Fin Contenido--------------->
					
		<?php include("footer.php"); ?>

<div id="enviado" class="login-popup">
 <a href="#" class="close" id="popup"><div class="btn_close"></div></a>
 
 <div class="titulo-pop"><h1 id="hunomensaje">Mensaje Enviado!</h1></div>
   
   <div class="clearfix"></div>
</div>
<?php if(isset($_GET['ok'])){
    ?><script>
$(document).ready(function(){
    $('#enviar').click();
});
</script><?php
} ?>
<?php if(isset($_GET['error'])){
    ?><script>
$(document).ready(function(){
    $('#hunomensaje').html('Error al enviar, intenta más tarde!').change();
    $('#enviar').click();
});
</script><?php
} ?>
