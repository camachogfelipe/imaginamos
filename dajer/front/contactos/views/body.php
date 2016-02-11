<style type="text/css">#nav-bt6 {background: #f3f3f3; box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1); -webkit-box-shadow: inset 0px 3px 0px 0px rgba(237, 88, 88, 1);}</style>
  <section>
    <div class="con-section">
      <div class="mg-section cfx">
      	<h1>Contáctenos</h1>
        <h2 class="sub-contact-tt1 fl">Sala de exhibición</h2>
        <div class="contact-col fl">
            <div class="contact-img" style="background:url(<?php echo base_url().$horario->imagen_path; ?>);"></div>
        </div>
        <div class="contact-col fr">
          <h1>Teléfonos:</h1>
          <p><?php echo $contacto->telefono1." - ".$contacto->telefono1; ?></p>
          <h1>Fax:</h1>
          <p><?php echo $contacto->fax; ?></p>
          <h1>E-mail:</h1>
          <p><a href="mailto:#" target="_blank"><?php echo $contacto->email; ?></a></p>
         <!-- <p><a href="mailto:#" target="_blank">&bull; email@dajerequipos.com</a></p> -->
          <h1>Horario de atención:</h1>
          <p><?php echo $horario->dia_inicio." a ".$horario->dia_final; ?>:</p>
          <p><?php echo "de ".$horario->hora_inicio_temp1." a ".$horario->hora_final_temp1." y de ".$horario->hora_inicio_temp2." a ".$horario->hora_final_temp2 ?></p>
          <h1><?php echo $contacto->ciudad; ?></h1>
        </div>
        <h2 class="sub-contact-tt2 fl">Formulario de contacto</h2>
        <form action="<?php echo base_url()."contactos"; ?>" class="grl-form cfx" method="POST">
        	<div class="contact-col fl">
            <input class="validate[required]" type="text" name="empresa" placeholder="Empresa...">
            <input class="validate[required]" type="text" name="nombre" placeholder="Nombre...">
            <input class="validate[required, custom[phone]]" name="telefono_fijo" type="text" placeholder="Teléfono fijo...">
            <input class="validate[required, custom[phone]]" name="telefono_celular" type="text" placeholder="Celular...">
            <input class="validate[required, custom[email]]" name="email" type="text" placeholder="Correo eléctronico...">
          </div>
          <div class="contact-col fr">
            <input class="validate[required]" type="text" name="ciudad" placeholder="Ciudad...">
            <input class="validate[required]" type="text" name="direccion" placeholder="Dirección...">
            <textarea class="validate[required]" type="text" name="comentarios" placeholder="Comentarios..."></textarea>
            <input class="submit-bt" type="submit" value="Enviar">
          </div>
        </form>
      </div>
    </div>
  </section>

<?php if($email_send == true): ?>
 	<div class="con-modals">
    <div class="info-modal cfx" id="modal-ok">
  		<h1>FORMULARIO ENVIADO!</h1>
    	<p>sus datos han sido enviados correctamente</p>
  	</div>
  </div>
<?php endif; ?>
