<?php echo $template['partials']['header']; ?>
<?php if(isset($msg)) :
	if($error == true) : ?>
<div style="background-color: #f2dede; border-color: #ebccd1; color: #a94442; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;">
	<?php else : ?>
<div style="background-color: #d9edf7; border-color: #bce8f1; color: #31708f; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;">
	<?php endif; ?>
	<?php echo $msg; ?>
</div>
<?php endif; ?>
<div class="container">
  <div class="cont_tit">
    <h1 class="inline">REGISTRO</h1>
  </div>
  <h3>Los campos con * son obligatorios.</h3>
  <div class="clear"></div>
  <?php echo form_open(base_url("modal_registro/registro")) ?>
    <div class="row">
      <fieldset>
        <div class="span6">
          <div class="row">
            <div class="span2">
              <label>Nombre*:</label>
            </div>
            <div class="span4">
              <input type="text" name="cms_nombre" class="validate[required]" placeholder="Nombre">
            </div>
          </div>
        </div>
        <div class="span6">
          <div class="row">
            <div class="span2">
              <label>Apellidos*:</label>
            </div>
            <div class="span4">
              <input type="text" name="cms_apellidos" class="validate[required]" placeholder="Apellidos">
            </div>
          </div>
        </div>
        <div class="clear espacio_en_blanco"></div>
        <div class="span6">
          <div class="row">
            <div class="span2">
              <label>Género:</label>
            </div>
            <div class="span4">
              <div class="row-fluid">
                <div class="span2">
                  <label>F</label>
                </div>
                <div class="span2">
                  <input type="radio" name="cms_genero" id="optionsRadios1" value="F" checked>
                </div>
                <div class="span2">
                  <label>M</label>
                </div>
                <div class="span2">
                  <input type="radio" name="cms_genero" id="optionsRadios2" value="M">
                </div>
                <div class="span2">
                  <label>Otro</label>
                </div>
                <div class="span2">
                  <input type="radio" name="cms_genero" id="optionsRadios3" value="O">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="span6">
          <div class="row">
            <div class="span2">
              <label>Fecha de nacimiento::</label>
            </div>
            <div class="span4">
              <div class="row-fluid">
                <div class="span2">
                  <label>día:</label>
                </div>
                <div class="span2">
                  <input type="text" name="cms_fechanacimiento_dia" class="validate[custom[number], min[1], max[31]]">
                </div>
                <div class="span2">
                  <label>Mes:</label>
                </div>
                <div class="span2">
                  <input type="text" name="cms_fechanacimiento_mes" class="validate[custom[number], min[1], max[12]]">
                </div>
                <div class="span2">
                  <label>Año:</label>
                </div>
                <div class="span2">
                  <input type="text" name="cms_fechanacimiento_anio" class="validate[custom[number], min[1900], max[<?php echo date("Y") ?>]]">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clear espacio_en_blanco"></div>
        <div class="span6">
          <div class="row">
            <div class="span2">
              <label>Email*:</label>
            </div>
            <div class="span4">
              <input type="text" placeholder="Email" name="cms_email" class="validate[required, custom[email]]">
            </div>
          </div>
        </div>
        <div class="span6">
          <div class="row">
            <div class="span2">
              <label>Profesión:</label>
            </div>
            <div class="span4">
              <input type="text" placeholder="Profesión" name="cms_profesion">
            </div>
          </div>
        </div>
        <div class="clear espacio_en_blanco"></div>
        <div class="span4">
          <div class="row">
            <div class="span2">
              <label>País:</label>
            </div>
            <div class="span2">
              <input type="text" placeholder="País" name="cms_pais" class="validate[required]">
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="row">
            <div class="span2">
              <label>Ciudad:</label>
            </div>
            <div class="span2">
              <input type="text" placeholder="Ciudad" name="cms_ciudad" class="validate[required]">
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="row">
            <div class="span2">
              <label>Teléfono:</label>
            </div>
            <div class="span2">
              <input type="text" placeholder="Teléfono" name="cms_telefono" class="validate[required, custom[phone]]">
            </div>
          </div>
        </div>
        <div class="clear espacio_en_blanco"></div>
        <div class="span6">
          <div class="row">
            <div class="span2">
              <label>Contraseña*:</label>
            </div>
            <div class="span4">
              <input type="password" placeholder="Contraseña*" id="pass1" name="cms_password" class="validate[required]">
            </div>
          </div>
        </div>
        <div class="span6">
          <div class="row">
            <div class="span2">
              <label>Confirmar contraseña*:</label>
            </div>
            <div class="span4">
              <input type="password" placeholder="Confirmar contraseña" name="cms_password" class="validate[required, equals[pass1]]">
            </div>
          </div>
        </div>
        <div class="clear espacio_en_blanco"></div>
        <div class="span1">
          <input type="checkbox" name="cms_recibirinfo" value="Y">
        </div>
        <div class="span11">
          <label>Deseo recibir información en mi correo electrónico sobre Constituciónaldia.com.co</label>
        </div>
      </fieldset>
      <div class="clear espacio_en_blanco"></div>
      <fieldset>
        <div class="span12">
          <label>Comprar un plan:</label>
        </div>
        <div class="clear espacio_en_blanco"></div>
        <?php
				$planes = new \planes();
				$planes->order_by("nombre_plan", "asc")->get();
				$planes = $planes->all_to_array(array("id", "nombre_plan", "tiempo_plan", "valor_plan"));
				if(!empty($planes)) :?>
      	<?php foreach($planes as $plan) : ?>
        <div class="span168">
          <div class="row-fluid">
            <div class="span8">
              <label title="<?php echo $plan['nombre_plan']." ".$plan['valor_plan'] ?>" class="conttoltip"><?php echo $plan['nombre_plan'] ?>:</label>
            </div>
            <div class="span4">
              <input type="radio" name="planes_id" id="optionsRadios1-1" value="<?php echo $plan['id'] ?>" class="validate[required]">
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      <?php endif; ?>
        <div class="span168"> </div>
      </fieldset>
      <div class="clear espacio_en_blanco"></div>
      <fieldset>
        <div class="span12">
          <label>Métodos de pago:</label>
        </div>
        <div class="clear espacio_en_blanco"></div>
        <div class="span4 modo_pagos"> <img src="<?php echo base_url(); ?>assets/img/tarjetas/1.png" alt=""> <img src="<?php echo base_url(); ?>assets/img/tarjetas/2.png" alt=""> <img src="<?php echo base_url(); ?>assets/img/tarjetas/3.png" alt=""> <img src="<?php echo base_url(); ?>assets/img/tarjetas/4.png" alt=""> </div>
        <div class="span4 labelterminos">
          <label title="Terminos y condiciones" class="conttoltip">Acepto <a class="carga_modalmediana2" href="<?php echo base_url(); ?>modal_condiciones" target="_parent">términos y condiciones</a></label>
        </div>
        <div class="span2 checkterminos">
          <input type="checkbox" name="acepto" class="validate[required]">
        </div>
        <div class="span2">
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