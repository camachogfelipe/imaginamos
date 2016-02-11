<?php echo $template['partials']['header']; ?>
<div class="cont_emergente450">
  <div class="cont_tit">
    <h1 class="inline">INSCRIBETE A <span>NUESTRO BOLETIN</span></h1>
  </div>
  <div class="clear"></div>
  <?php echo form_open("modal_newsletter/send"); ?>
    <div class="row-fluid">
    	<fieldset>
        <div class="span12">
          <input type="text" placeholder="Tu nombre" name="nombre" class="validate[required]">
        </div>
      </fieldset>
      <fieldset>
        <div class="span12">
          <input type="text" placeholder="Tu email" name="email" class="validate[required, custom[email]]">
        </div>
      </fieldset>
      <div class="clear espacio_en_blanco"></div>
      <fieldset>
        <div class="span4 offset4">
          <button class="btn btn-primary ancho100" type="submit">Registrarse</button>
        </div>
      </fieldset>
    </div>
  <?php echo form_close(); ?>
</div>
<script type="text/javascript">
	$( document ).ready( function() {
		$('form').validationEngine({promptPosition: "bottomCenter"});
	} );
</script>