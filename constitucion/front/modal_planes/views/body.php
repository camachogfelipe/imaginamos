<?php echo $template['partials']['header']; ?>
<div class="cont_emergente600">
  <div class="cont_tit">
    <h1 class="inline">COMPRA <span>UN PLAN</span></h1>
  </div>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum varius augue, eu sodales dolor pretium non. Vivamus lobortis neque sodales, consectetur nisi posuere, vestibulum ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce euismod, nisl eget cursus consectetur, </p>
  <div class="clear espacio_en_blanco"></div>
  <?php echo form_open("modal_planes/send"); ?>
  <fieldset>
    <div class="row-fluid">
      <?php
      $planes = new \planes();
      $planes->order_by("nombre_plan", "asc")->get();
      $planes = $planes->all_to_array(array("id", "nombre_plan", "tiempo_plan", "valor_plan"));
      if (!empty($planes)) :
        ?>
  <?php foreach ($planes as $plan) : ?>
          <div class="span3">
            <div class="span9">
              <label title="<?php echo $plan['nombre_plan'] ?>" class="conttoltip"><?php echo $plan['nombre_plan'] ?>:</label>
            </div>
            <div class="span3">
              <input type="radio" name="optionsRadios" id="optionsRadios1-1" value="<?php echo $plan['id'] ?>">
            </div>
          </div>
        <?php endforeach; ?>
<?php endif; ?>
    </div>
  </fieldset>
  <div class="clear espacio_en_blanco"></div>
  <fieldset>
    <label>Métodos de pago:</label>
    <div class="clear espacio_en_blancopeque"></div>
    <div class="modo_pagos"> <img alt="" src="<?php echo base_url(); ?>assets/img/tarjetas/1.png"> <img alt="" src="<?php echo base_url(); ?>assets/img/tarjetas/2.png"> <img alt="" src="<?php echo base_url(); ?>assets/img/tarjetas/3.png"> <img alt="" src="<?php echo base_url(); ?>assets/img/tarjetas/4.png"> </div>
    <a href="<?php echo base_url(); ?>ingreso_planes" target="_parent" class="btn btn-primary inline float_right">Registrarse</a>
  </fieldset>
</form>
</div>