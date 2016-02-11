<?php echo $template['partials']['header']; ?>
<div class="cont_emergente450">
  <div class="cont_tit">
    <h1 class="inline">INGRESAR A <span>MI CUENTA</span></h1>
  </div>
  <div class="clear"></div>
  <?php if ($logged === FALSE) : ?>
  <?php echo form_open(base_url("modal_registrarse/registro")); ?>
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
  <?php echo form_close(); ?>
    <?php if (isset($msg)) : ?>
      <div style="background-color: #f2dede; border-color: #ebccd1; color: #a94442; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;">
        <?php echo $msg; ?>
      </div>
    <?php endif; ?>
  <?php else : ?>
  <div style="color: #3a87ad; background-color: #d9edf7; border-color: #bce8f1; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;">
    Bienvenido <?php echo $this->session->userdata['cms_nombre']. " " . $this->session->userdata['cms_apellidos']; ?><br><br>
    <a href="<?php echo base_url("userfront") ?>" target="_top">Ver perfil</a><br>
    <a href="<?php echo base_url("ingreso_planes/logout") ?>" target="_top">Salir</a>
  </div>
  <?php endif; ?>
</div>
