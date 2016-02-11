<div class="selectores">
  <?php echo form_open_multipart('directorio/crear/', 'id="crear-directorio"') ?>

  <div class="messages"></div>

  <div class="selectores-publicar2">
    <div class="campo-reg-lab" style="width:254px;">
      <label style="padding-left: 4px;">Nombre de la Empresa</label>
      <input name="empresa" class="campo4" type="text" >
    </div>

    <div class="campo-reg-lab" style="width:254px;">
      <label style="padding-left: 4px;">Dirección</label>
      <input name="direccion" class="campo4" type="text">
    </div>

    <div class="campo-reg-lab" style="width:254px;">
      <label style="padding-left: 4px;">Teléfono</label>
      <input name="telefono" class="campo4" type="text">
      <div class="clr"></div>
    </div>

    <div class="clr"></div>

    <div class="campo-reg-lab" style="width:254px;">
      <label style="padding-left: 4px;">Sitio web</label>
      <input name="sitio_web" class="campo4" type="text" >
    </div>

    <div class="campo-reg-lab" style="width:254px;">
      <label style="padding-left: 4px;">E-mail</label>
      <input name="email" class="campo4" type="text" >
      <div class="clr"></div>
    </div>

    <div class="clr"></div>

    <div class="campo-reg-lab" style="width:254px;">
      <label style="padding-left: 4px;">Cuenta Facebook</label>
      <input name="facebook" class="campo4" type="text" >
    </div>

    <div class="campo-reg-lab" style="width:254px;">
      <label style="padding-left: 4px;">Cuenta Twitter</label>
      <input name="twitter" class="campo4" type="text">
    </div>

    <div class="campo-reg-lab" style="width:254px;">
      <label style="padding-left: 4px;">Cuenta YouTube</label>
      <input name="youtube" class="campo4" type="text">
      <div class="clear"></div>
    </div>

    <div class="clear"></div>

    <div class="campo-reg-lab">
      <label style="padding-left: 4px;">Seleccione la categoría</label>
      <div class="selectBox no-ico" id="select-largo">
        <?php echo form_dropdown('directorio_categoria_id', $select_categorias, null, 'style="width:386px;" class="comboBox1"') ?>
        <div class="clr"></div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>


    <div class="lista-check3">
      <div class="select-check-tit">Cosas que ofrece adicionales:</div>
      <div class="elemento-check2">
        <input id="check_prim" type="checkbox" name="adicionales[]"  value="Boleteria">
        <label>Boleteria</label>
      </div>
      <div class="elemento-check2">
        <input id="check_prim" type="checkbox" name="adicionales[]" value="Escenario">
        <label for="adicionales">Escenario</label>
      </div>
      <div class="elemento-check2">
        <input id="check_prim" type="checkbox" name="adicionales[]" value="Bar">
        <label for="adicionales">Bar</label>
      </div>
      <div class="elemento-check2">
        <input id="check_prim" type="checkbox" name="adicionales[]" value="Lugar para tocar">
        <label for="adicionales">Lugar para tocar</label>
      </div>
      <div class="elemento-check2">
        <input id="check_prim" type="checkbox" name="adicionales[]" value="Luces">
        <label for="adicionales">Luces</label>
      </div>
      <div class="elemento-check2">
        <input id="check_prim" type="checkbox" name="adicionales[]" value="Efectos especiales">
        <label for="adicionales">Efectos especiales</label>
      </div>
      <div class="elemento-check2">
        <input id="check_prim" type="checkbox" name="adicionales[]" value="Backline">
        <label for="adicionales">Backline</label>
      </div>
      <div class="elemento-check2">
        <input id="check_prim" type="checkbox" name="adicionales[]" value="Proyección de video">
        <label for="adicionales">Proyección de video</label>
      </div>
      <div class="elemento-check2">
        <input id="check_prim" type="checkbox" name="adicionales[]" value="Ingeniero de sonido">
        <label for="adicionales">Ingeniero de sonido</label>
      </div>
      <div class="elemento-check2">
        <input id="check_prim" type="checkbox" name="adicionales[]" value="Vestidores">
        <label for="adicionales">Vestidores</label>
      </div>
      <div class="elemento-check2">
        <input id="check_prim" type="checkbox" name="adicionales[]" value="Barricadas">
        <label for="adicionales">Barricadas</label>
      </div>
      <div class="elemento-check2">
        <input id="check_prim" type="checkbox" name="adicionales[]" value="Transporte">
        <label for="adicionales">Transporte</label>
      </div>
      <div class="elemento-check2">
        <input id="check_prim" type="checkbox" name="adicionales[]" value="Catering">
        <label for="adicionales">Catering</label>
      </div>
      <div class="elemento-check2">
        <input id="check_prim" type="checkbox" name="adicionales[]" value="Seguridad">
        <label for="adicionales">Seguridad</label>
      </div>

      <div class="clear"></div>
    </div>
    <div class="area-cont1"><textarea name="descripcion" class="area1" placeholder="Introduce las palabras clave de tu publicación (120 Caracteres)" maxlength="120"></textarea></div>
    <div class="clr"></div>
   
  </div>

  <input class="bot-publicar" type="submit" value="publicar">

  <?php echo form_close(); ?>
</div>