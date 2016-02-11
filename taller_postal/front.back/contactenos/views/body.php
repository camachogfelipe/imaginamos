
	<div class="container contenidos clearfix">
  <div class="div_gris  "></div>
  <h2 class="tit_secciones">
    Contáctenos
  </h2>
  <div class="div_gris margin_bottom"></div>
  <div class="cont_imagentexto960 clearfix">
      <img src="<?php echo base_url().$text_contact->imagen_path; ?>">
    <div class="columna_contder">
      <p><?php echo $text_contact->texto; ?></p>
      <div class="div_gris"></div>
      <h3 class="subtitsecciones"> Nuestros datos de contacto</h3>
      <div class="div_gris margin_bottom"></div>
      <p class="caracteristicas_detalle">
        <span>Dirección:</span>
        <?php echo $contacto->direccion; ?>
      </p>
      <p class="caracteristicas_detalle">
        <span>Telefóno:</span>
        <?php echo $contacto->telefono; ?>
      </p>
      <p class="caracteristicas_detalle">
        <span>Correo electrónico:</span>
        <?php echo $contacto->email; ?>
      </p>
    </div>
  </div>
  <div class="div_gris margin_bottom"></div>
  <div class="row cont_form cont_formcontacto">
    <form action="post" id="contactoForm">      
      <div class="span6">
        <fieldset>
          <input type="text" name="nombre" placeholder="Nombre*">
          <input type="text" name="email" placeholder="Correo electrónico*" class="required" >
          <input type="text" name="telefono" placeholder="Telefóno" class="required" name="telefono">
          <input type="text" name="celular" placeholder="Celular"> 
        </fieldset>
      </div>
      <div class="span6">
        <fieldset>
          <textarea name="comentario" class="tex_contacto"></textarea>
        </fieldset>
      </div>
      <div class="clear"></div>
      <fieldset>
        <button type="submit" class="bt_anadir float_right">Enviar</button>
      </fieldset>

    </form>
  </div>

</div><!-- contenidos -->

  <?php if($email_send == true): ?>
 	<div class="con-modals">
    <div class="info-modal cfx" id="modal-ok">
         <h1>FORMULARIO ENVIADO!</h1>
    	 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
  	</div>
  </div>
<?php endif; ?>

