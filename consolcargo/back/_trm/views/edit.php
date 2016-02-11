<div class="widget">
  <div class="header"><span><span class="ico gray window"></span>Editar TRM</span> <br />
    <?php echo anchor('cms/trm/', 'Volver', 'class="uibutton icon special answer" style="cursor:pointer;float:right;position: relative;top: -5px"') ?> </div>
  <!-- End header -->
  <div class="content">
    <div class="formEl_b">
      <div>
        <fieldset>
          <label>
          <h2>Ingrese todos los datos</h2>
          </label>
          <?php if(validation_errors() != ''){
                    ?>
          <div class="alertbox error"><?php echo validation_errors(); ?></div>
          <?php
                    } ?>
          <?php $url = 'cms/trm/editarTrm/'.$trm->id?>
          <?php echo form_open_multipart($url); ?>
          <div class="section">
            <label> TRM <small>Ingrese la TRM, el valor debe ser decimal con punto.</small></label>
            <div>
              <input type="text" maxlength="27" name="trm" class="full" value="<?php echo set_value('trm', $trm->trm) ?>">
            </div>
          </div>
          <div class="section">
            <label> COLOR <small>Seleccione el color: verde (subio o se mantuvo estable), rojo (bajo)</small></label>
            <div>
            	<select id="color" class="full" name="color">
              	<option value="VERDE"<?php if(set_value('color', $trm->color) == "VERDE") echo ' selected' ?>>Verde</option>
                <option value="ROJO"<?php if(set_value('color', $trm->color) == "ROJO") echo ' selected' ?>>Rojo</option>
              </select>
            </div>
          </div>
          <br />
          <?php echo form_submit('Submit', 'Guardar', 'class="uibutton special"') ?> <?php echo form_close();?>
        </fieldset>
      </div>
    </div>
  </div>
</div>
<script>
//    $("#wisiwyg").cleditor();
//    $("#wisiwyg2").cleditor();
</script>