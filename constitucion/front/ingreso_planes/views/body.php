<div class="container">
  <div class="cont_emergente450 cont_ingresoplanes">
    <div class="cont_tit">
      <h1 class="inline">INGRESAR A <span>MI CUENTA</span></h1>
    </div>
    <div class="clear"></div>
    <?php echo form_open(base_url("ingreso_planes/registro")); ?>
    <div class="row-fluid">
      <fieldset>
        <div class="span12">
          <input type="text" name="email" class="validate[required, custom[email]]" placeholder="Tu email">
        </div>
        <div class="row-fluid">
          <div class="span12">
            <input type="password" name="clave" class="validate[required]" placeholder="Contraseña">
          </div>
        </div>
      </fieldset>
      <div class="clear espacio_en_blanco"></div>
      <fieldset>
        <div class="span4"> <a href="#" class="color_azul inline conttoltip" data-placement="right" data-toggle="tooltip" title="La contraseña se te enviara a tu correo">Olvide mi contraseña</a> </div>
        <div class="span4 offset4">
          <button class="btn btn-primary ancho100" type="submit">Registrarse</button>
        </div>
      </fieldset>
    </div>
    </form>
    <?php if (isset($msg)) : ?>
      <div style="background-color: #f2dede; border-color: #ebccd1; color: #a94442; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;">
        <?php echo $msg; ?>
      </div>
    <?php endif; ?>
    <div class="clear espacio_en_blanco"></div>
    <p class="inline ancho100 text_centrado"> ¿No tienes Cuenta? has <a class="inline carga_modal" href="<?php echo base_url('modal_registro'); ?>">CLICK AQUÍ</a> para crear una </p>
  </div>
</div>
<div class="clear espacio_en_blancofooter"></div>
<script type="text/javascript">
  $(document).ready(function() {
    $('form').validationEngine({promptPosition: "bottomCenter"});
  });
</script>