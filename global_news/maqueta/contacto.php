<?php include("head.php"); ?>
<div class="cuerpo">
<?php $titulo = "formulario de contacto"; include("cabecera_secciones.php"); ?>
	<div>
  	<div class="left imagenContacto"><img src="assets/img/contacto/contacto.png" width="453" height="453"></div>
    <div class="left formcontacto">
    	<form action="" method="post">
      	<input type="text" name="nombre" class="validate[required] inputComentario" placeholder="Nombre completo *" /><br><br>
				<input type="text" name="email" class="validate[required, custom[email]] inputComentario" placeholder="Correo eletrónico *" /><br><br>
				<textarea style="width: 100%" rows="7" name="comentario" class="validate[required]" placeholder="Comentario *"></textarea>
				<p><button type="submit">Enviar</button>
      </form>
    </div>
    <div class="redes_sociales" style="width: 200px">
    <a href="//www.pinterest.com" target="_blank"><img src="assets/img/contacto/pinterest.png" width="42" height="42"></a>
    <a href="//www.twitter.com" target="_blank"><img src="assets/img/contacto/twitter.png" width="42" height="42"></a>
    <a href="//www.linkedin.com" target="_blank"><img src="assets/img/contacto/linkedin.png" width="42" height="42"></a>
    <a href="//plus.google.com" target="_blank"><img src="assets/img/contacto/google.png" width="42" height="42"></a>
    </div>
  </div>
</div><br><br>
<?php require_once("footer.php"); ?>