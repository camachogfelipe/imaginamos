<?php echo $template['partials']['header']; ?>
<div class="cont_emergente450">
<div class="cont_tit">
  <h1 class="inline">CONTACTO</h1>
</div>
<div class="clear"></div>
<?php echo form_open(base_url('modal_contacto/send')); ?>
<form action="">
  <div class="row-fluid">
    <fieldset>
      <div class="span12">
        <input type="text" placeholder="Nombre" name="nombre" class="validate[required]" data-prompt-position="topLeft">
      </div>
      <div class="row-fluid">
      <div class="span12">
        <input type="text" placeholder="Correo" name="email" class="validate[required, custom[email]]" data-prompt-position="bottomLeft">
      </div>
      <div class="row-fluid">
        <div class="span12">
          <textarea rows="3" placeholder="Escribe mensaje:" name="mensaje" class="validate[required]" data-prompt-position="bottomLeft"></textarea>
        </div>
      </div>
    </fieldset>
    <div class="clear espacio_en_blanco"></div>
    <fieldset>
      <div class="span4 offset8">
        <button class="btn btn-primary ancho100" type="submit">Enviar</button>
      </div>
    </fieldset>
  </div>
<?php echo form_close(); ?>
<script type="text/javascript">
	$( document ).ready( function() {
		$('form').validationEngine();
	} );
</script>
